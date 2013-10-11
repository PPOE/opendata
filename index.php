<?php

/**
 * opendata.piratenpartei.at
 *
 * @author Peter Grassberger aka. PeterTheOne <petertheone@piratenpartei.at>
 */

require_once 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

require_once 'jsonFormat.php';
require_once 'MemberRepository.class.php';

$app = new \Slim\Slim();

$response = $app->response();
$response['Content-Type'] = 'application/json';

$app->get('/', function() use($app) {
    $response = $app->response();
    $response['Content-Type'] = 'text/html';

    $app->render('documentation.php');
});

$app->get('/member/count/', function() use($app) {
    try {
        $userRepository = new MemberRepository();

        $result = $userRepository->getMemberCount();
        $app->response()->body(json_format($result));
    } catch (Exception $e) {
        $result = array(
            'exception' => $e->getMessage()
        );
        $app->response()->body(json_format($result));

        $app->response()->status(400);
        $app->response()->header('X-Status-Reason', $e->getMessage());
    }
});

$app->run();