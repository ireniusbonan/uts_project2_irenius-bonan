<?php
$database_hostname = "localhost";
$database_username ="root";
$database_password = "";
$database_name = "web1";
$database_port = "3306";

try{
 //sintaks berhasil?  
 $database_connection= new PDO("mysql:host=$database_hostname;dbname=$database_name",
 $database_username, $database_password); 
 //$cek = "Koneksi Berhasil";
 //echo $cek;
}catch(PDOException $x){
die($x->getMessage());
}
?>