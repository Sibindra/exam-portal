<?php
//  connection to localhost
$server = "localhost";
$username = "root";
$password = "";
$dB = "Exam-Portal";

$con = mysqli_connect($server, $username, $password, $dB);


if (!$con) {
    die("FAILED");
} else {
}
$email = base64_decode($_GET['email']);


$sql = "SELECT * FROM users WHERE Email='$email'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rollNo = $row["symbolNo"];
    }
} else {
    echo "NO SUCH EMAIL";
}


$query = "SELECT * FROM `Student Details` where Rollno='$rollNo'";


$ans = $con->query($query);

if ($ans->num_rows > 0) {
    while ($rows = $ans->fetch_assoc()) {
        $symbolNo = $rows["Symbolno"];
        $name = $rows["Name"];
        $faculty = $rows["Faculty"];
        $year = $rows["Year"];
        $collegeName = $rows["NameofCollege"];
        $uni = $rows["University"];
        $regNo = $rows["Regno"];
        $programme = $rows["Programme"];
        $duePayment = $rows["Due"];

        $img = $rows["img_dir"];
    }


    $data = array();
    $index = 1;

    $subQuery = "SELECT * FROM `Regular Subjects` where Year='$year'";
    $r = $con->query($subQuery);

    if($r->num_rows>0){
        while($rows=$r->fetch_assoc()){
       
        $subx=$rows["Subject"];
        $subCodex=$rows["Subject Code"];
        $creditx=$rows["Credit Hrs"];
        $barrierSubjectx=$rows["Barrier Subject"];
        $barrierSemx=$rows["Barrier Semester"];
        $barrierx=$rows["Barrier Status"];

        if($barrierx=="Not Barrier"){
            $barrierCss="notbarrier";
        }else{
            $barrierCss="barrier";
        }

        // echo $barrierCss."   ";


        // echo $barrierSubjectx;
        // echo $creditx;
        // echo $subCodex;
        // echo $subx;
        $data["sub".$index]=$subx;
        $data["subCode".$index]=$subCodex;
        $data["credit".$index]=$creditx;
        $data["barrierSubject".$index]=$barrierSubjectx;
        $data["barrierSem".$index]=$barrierSemx;
        $data["barrier".$index]=$barrierx;

        $index++;
        
    };
   

    }

} else {
    echo "NO MATCH";
}
