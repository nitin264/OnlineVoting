<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'Nitin';
    $DATABASE_PASS = 'calvin';
    $DATABASE_NAME = 'phppoll';
    try {
        return new PDO('sqlsrv:server =' . $DATABASE_HOST . ';database=' . $DATABASE_NAME , $DATABASE_USER, $DATABASE_PASS);
        echo'Connected';
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!'.$exception);
    }
}

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Voting & Poll System</h1>
            <a href="index.php"><i class="fas fa-poll-h"></i>Polls</a>
    	</div>
    </nav>
EOT;
}


// Template footer
function template_footer() {
// DO NOT INDENT THE PHP CODE
echo <<<EOT
    </body>
</html>
EOT;
}

?>


