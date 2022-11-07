<?php
    require ("emailConnection.php");

    // echo $dB;

    // echo $code;

    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];

    $enteredCode= $a.$b.$c.$d;


    if($enteredCode==$code){
        echo "match";
        header(Location: )
    }else{
        echo"fail";
    }
?>