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
                $rollNo=$row["symbolNo"];
            }
        }else{
            echo "NO SUCH EMAIL";
        }

        // echo $rollNo;

        // fetching values
        $query="SELECT * FROM `Student Details` where Rollno='$rollNo'";

        // echo $query;

        $ans=$con->query($query);

        if($ans->num_rows>0){
            while($rows=$ans->fetch_assoc()){
                $symbolNo=$rows["Symbolno"];
                $name=$rows["Name"];
                $faculty=$rows["Faculty"];
                $year=$rows["Year"];
                $collegeName=$rows["NameofCollege"];
                $uni=$rows["University"];
                $regNo=$rows["Rollno"];
                $programme=$rows["Programme"];
                $duePayment=$rows["Due"];
                // $img=$rows["img_dir"];
            }
        }

        else{
            echo "NO MATCH";
        }

        // echo $duePayment;
?>