<?php 

$serverName = "HPLAPTOP-14CM0"; //Nama server dapat dilihat di ssms.
$connectionInfo = array( "Database"=>"TSQL2012");  
  
/* Connect using Windows Authentication. */  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Unable to connect.</br>";  
     die( print_r( sqlsrv_errors(), true));
} else {
    echo "konek";
}

?>