<?php  
#echo phpinfo();
$serverName = "tcp:localhost,1433";
$connectionOptions = array("Database"=>"reg_data",
    "Uid"=>"Nitin", "PWD"=>"calvin");
$conn = sqlsrv_connect($serverName, $connectionOptions);

if($conn == false) {
    echo "Failed";
    echo FormatErrors(sqlsrv_errors());
} else {
    echo "Connected";
}

$tsql = "SELECT * FROM dbo.logins;";
$getProducts = sqlsrv_query($conn, $tsql);

while($row = sqlsrv_fetch_array($getProducts, SQLSRV_FETCH_ASSOC))
{
    echo($row['us_name']);
    echo("<br/>");
}

sqlsrv_free_stmt($getProducts);
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

