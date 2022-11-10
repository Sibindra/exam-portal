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
        // echo $dB;
    }
        // SELECT symbolNO FROM users where Email=".$email
        // $sql=base64_decode($_GET['id']);
        
        // echo $sql;
        
        $email=base64_decode($_GET['email']);
        
        // echo $email;
        
        // $sql="SELECT * FROM users WHERE Email='timalsinasibindra@gmail.com'";
        $sql="SELECT * FROM users WHERE Email='$email'";
        // echo $sql;

        // echo $sql;
        
        $result=$con->query($sql);

        if($result->num_rows>0){
            while($row = $result->fetch_assoc()){
                echo "Symbol No: " .$row["symbolNo"];
            }
        }else{
            echo "NO SUCH EMAIL";
        }

?>