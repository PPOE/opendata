<?php

/**
 * Class MemberRepository
 *
 * @author Peter Grassberger aka. PeterTheOne <petertheone@piratenpartei.at>
 */
Class MemberRepository {

    private $pdo;

    /**
     *
     */
    public function __construct() {
        include '../adm_api/config.php';
        $this->pdo = new PDO('mysql:host=' . $g_adm_srv . ';dbname=' . $g_adm_db, $g_adm_usr, $g_adm_pw);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * @return array
     */
    public function getMemberCount() {
        $statement = $this->pdo->prepare('
            SELECT
                B.timestamp AS timestamp,
                users AS registeredMembers,
                members AS payingMembers,
                A.bakk AS payingAndVerifiedMembers
            FROM
                ppoe_mv_info.mv_statistik B
                LEFT JOIN (
                    SELECT
                        timestamp,
                        SUM(akk) AS bakk
                    FROM
                        ppoe_mv_info.mv_statistik
                    WHERE
                        LO != 0
                    GROUP BY timestamp
                ) A
                ON
                    A.timestamp = B.timestamp
                WHERE
                    LO = 0
                ORDER BY
                    timestamp ASC;
        ');
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_OBJ);
        return $statement->fetchAll();
    }

    /**
     * @param $stateOrganisation
     * @return array
     */
    public function getMemberCountByStateOrganisation($stateOrganisation) {
        $statement = $this->pdo->prepare('
            SELECT * FROM ppoe_mv_info.mv_statistik WHERE LO = :stateOrganisation ORDER BY timestamp ASC;
        ');
        $statement->bindParam(':stateOrganisation', $stateOrganisation);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_OBJ);
        return $statement->fetchAll();
    }
}