<?
mysql_connect("localhost","root","123456");
$dbname="lat_dbase";
$cek=mysql_query("CREATE DATABASE $dbname") or die("Couldn't Create Database:
$dbname");
if($cek){
 echo "Database $dbname berhasil dibuat";
}
?> 