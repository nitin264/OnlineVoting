<?php  
session_start();
#echo phpinfo();
$serverName = "tcp:localhost,1433";
$connectionOptions = array("Database"=>"reg_data",
    "Uid"=>"Nitin", "PWD"=>"calvin");
$conn = sqlsrv_connect($serverName, $connectionOptions);

if($conn == false) {
    echo "Authenticaation Error for the database";
    echo FormatErrors(sqlsrv_errors());
} else {
    echo "Your details are registered...";
}

//echo $_POST['user_name'];
//echo $_REQUEST['user_name'];

// Taking all 2 values from the form data(input)
        $user_name = $_REQUEST['user_name'];
        $psw = $_REQUEST['psw'];

// Performing insert query execution
        $tsql = "INSERT INTO dbo.logins VALUES ('$user_name', '$psw')";

$getProducts = sqlsrv_query($conn, $tsql);

if( $getProducts === false ) {
    echo "failed query<br/>";
    echo FormatErrors(sqlsrv_errors());
}

$tsql = "select * from dbo.signup_details where us_name = '$user_name' and psw = '$psw'";

$getProducts = sqlsrv_query($conn, $tsql);

if( $getProducts === false ) {
    echo "failed query<br/>";
    echo FormatErrors(sqlsrv_errors());
}

$row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC);
if(is_null($row)){
    header("Location: /project/login_page.php");
}
else {

    $check_us_name = $row['us_name'];

    $isAdmin = $row['isAdmin']; 
    //echo "hello";
    //echo $user_name;
    //echo $check_us_name; 


        if ($check_us_name === $user_name)
            {   $_SESSION["isAdmin"] = $isAdmin;
            header("Location: /project/vote%20pages/index.php");
            
        } 
        else {
        header("Location: /project/login_page.php");
        }
}
//closes connection
sqlsrv_close($conn);

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