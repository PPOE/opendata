<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Peter Grassberger">

        <title>OpenData - Piratenpartei Österreichs</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">

            <div class="page-header">
                <h1>OpenData - Piratenpartei Österreichs</h1>
                <p class="lead">Documentation</p>
            </div>

            <h2 class="text-warning">Warning!</h2>
            <p class="text-warning">This API is under heavy development and therefor not stable!</p>

            <h2>User Count</h2>
            <p><a href="member/count/"><code>index.php/member/count/</code></a></p>
            <p>
                Returns a list of member counts at certain days.
            </p>
            <table class="table">
                <tr><th>HTTP Method</th><td>GET</td></tr>
            </table>
            <h3>Parameters</h3>
            <table class="table">
                <tr>
                    <th>stateOrganisation</th><td>number from 0 to 8</td>
                    <td>
                        Filter by state organisation:
                        <ul>
                            <li>0: Sum of all (default)</li>
                            <li>1: Burgenland</li>
                            <li>2: Carinthia</li>
                            <li>3: Lower Austria</li>
                            <li>4: Upper Austria</li>
                            <li>5: Salzburg</li>
                            <li>6: Styria</li>
                            <li>7: Tyrol</li>
                            <li>8: Vorarlberg</li>
                            <li>9: Vienna</li>
                            <li>10: No State (not yet implemented)</li>
                        </ul>
                    </td>
                </tr>
            </table>

            <h3>Response</h3>
            <table class="table">
                <tr><th>timestamp</th><td>timestamp</td><td>-</td></tr>
                <tr><th>registeredMembers</th><td>number</td><td>Number of Members that are registered at the Austrian Pirate Party.</td></tr>
                <tr><th>payingMembers</th><td>number</td><td>Number of Members that are registered at the Austrian Pirate Party and have a positive payment status.</td></tr>
                <tr><th>payingAndVerifiedMembers</th><td>number</td><td>Number of Members that are registered at the Austrian Pirate Party, have a positive payment status and have verified identities.</td></tr>
            </table>

        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
    </body>
</html>
