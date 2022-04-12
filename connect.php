<?php
error_reporting(0);
$db_host="sql11.freesqldatabase.com";
$db_user="sql11483538";
$db_password="h5tn1GsUf2";
$db_name="sql11483538";
$link=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$link)
{
	die('<p style="color:red">' .mysqli_connect_errno().'-'. mysqli_connect_error().'</p>');
}
echo"<p>Вы подключились к серверу MySQL</p>";
?>