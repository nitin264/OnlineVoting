<?php  
#echo phpinfo();
$serverName = "tcp:localhost,1433";
$connectionOptions = array("Database"=>"reg_data",
    "Uid"=>"Nitin", "PWD"=>"calvin");
$conn = sqlsrv_connect($serverName, $connectionOptions);

if($conn == false) {
    echo "Failed";
    echo FormatErrors(sqlsrv_errors());
} 

//echo $_POST['user_name'];
//echo $_REQUEST['user_name'];

// Taking all 2 values from the form data(input)
        $user_name = $_REQUEST['user_name'];
        $email = $_REQUEST['email'];
        $psw = $_REQUEST['psw'];
        $psw_repeat = $_REQUEST['psw_repeat'];


// Performing insert query execution
        $tsql = "INSERT INTO dbo.signup_details VALUES ('$user_name', '$email', '$psw', '$psw_repeat', 0)";

$getProducts = sqlsrv_query($conn, $tsql);

if( $getProducts === false ) {
    echo "failed query<br/>";
    echo FormatErrors(sqlsrv_errors());
    exit;
}

sqlsrv_close($conn);

header("Location: /project/login_page.php");

function FormatErrors( $errors )
{
    /* Display errors. */
    echo "Error information: <br/>";

    foreach ( $errors as $error )
    {
        echo "SQLSTATE: ".$error['SQLSTATE']."<br/>";
        echo "Code: ".$error['code']."<br/>";
        echo "Message: ".$error['message']."<br/>";
    }
}

?> 