<?php
$db_host="bwylitbrfdtczzedsndu-mysql.services.clever-cloud.com"; //localhost server 
$db_user="u8gqrxpvimsr619e";	//database username
$db_password="OU3bGxjhDeU4mZDiyf1O";	//database password   
$db_name="bwylitbrfdtczzedsndu";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



