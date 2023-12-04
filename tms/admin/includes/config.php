<?php 
// DB credentials.
define('DB_HOST','http://tourism0819.mysql.database.azure.com');
define('DB_USER','lohith_8');
define('DB_PASS','password@12');
define('DB_NAME','tms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
