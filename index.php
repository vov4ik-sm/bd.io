<?php
error_reporting(0);
$db_host="localhost";
$db_user="root";
$db_password="dfcrt300";
$db_name="smaginbd";
$link=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if(!$link)
{
	die('<p style="color:red">' .mysqli_connect_errno().'-'. mysqli_connect_error().'</p>');
}
echo"<p>Вы подключились к серверу MySQL</p>";
?>
<form action="index.php" method="GET">
<p>Запрос_insert_brand</p>
 Введите название бренда:<input type="text" name="NameAuthor"><br>
<input type="submit" name="submit" value="Добавить в бд"><br>
</form>
</form><form method="post" action="http://dealer.ru/Main.php">
<input type="submit" name="submitButton" value="Menu" />
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO brand(  id_brand, brand)
  VALUES (0, '$_GET[NameAuthor]')");

}
?>