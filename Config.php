<?php
 session_start();

 $servername="localhost";
 $username="root";
 $password="";
 $db="login";

 $conn=new mysqli($servername, $username, $password, $db);
 if(!$conn){
  die("Connection faild". mysqli_connect_error());
 }