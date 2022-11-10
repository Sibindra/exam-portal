<?php

// variables

    $email = $_POST['email'];
    $password= $_POST['password'];

    // echo $email;

    $sql = ("SELECT * FROM users WHERE email='$email' AND password='$password'");

    // executing query
    $results = mysqli_query($con, $sql);

    // number of results of sql 
    $num = mysqli_num_rows($results);

    
    // echo $num;

    
    // MATCH IN DATABASE
    if ($num > 0) {
        // code for match found
        // $id=("SELECT symbolNo FROM users where Email=".$email);
        // $res=mysqli_query($con,$id);

        // $res=$con->query($id);
        // echo $res;
        
        // echo $id;
        // echo "MATCH FOUND";
        // echo $email;
        header('Location: ../dashboard-components/dashboard.php?email='.base64_encode($email));
        exit;
    } else {
        // code for match not found
        echo "NO MATCH";
        // header('Location: ../index.html');
        // exit;
    }
?>