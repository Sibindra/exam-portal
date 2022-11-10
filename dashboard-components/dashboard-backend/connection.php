<?php

    //  connection to localhost
    $server = "localhost";
    $username = "root";
    $password = "";
    $dB = "Exam-Portal";

    $con = mysqli_connect($server, $username, $password, $dB);


    if(!$con){
        die("FAILED");
    }
    
    else{
        // echo "Sucess";
    }
        
        // SELECT symbolNO FROM users where Email=".$email
        $sql=base64_decode($_GET['id']);
        // echo $sql;
        
        
        // $sql=("SELECT symbolNo FROM users WHERE Email='timalsinasibindra@gmail.com'");
        
        
        $result=mysqli_query($con,$sql);
        
        echo $result;
?>