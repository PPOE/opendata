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
                <tr><th>todo</th><td>todo</td></tr>
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
