<?php
$servername = "localhost";
$userame = "root";
$password = "";
$dbname = "";

//create conect
users(id INT AUTO_INCREMENT, PRIMARY_KEY);
$conn = new mysqli($servername,$userame,$password,$dbname);
#echo ("conection successful: have fun with php");x
$sql = "CREATE TABLE IF EXISTS users()";
$username varchar(255), NOT NULL;
$password varchar(255), NOT NULL;

//check connect
if ($conn->query $sql) === TRUE;
echo("Table was sucsessful");
else 
echo("Error creating table" $conn->error);
?>