<?php
   
   $server="localhost";
   $username="root";
   $password="";
   $dB="testdB";

   $con=mysqli_connect($server,$username,$password,$dB);

   if(!$con){
    die("connection failed due to:'$con->error()'");
   }
   else{
    echo "Sucess";
    }
?>