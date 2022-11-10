<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    include("dashboard-backend/connection.php");
    
    ?>
    <div id="heropage">
        <div id="header">
            <div id="welcome">
                Hi,
                <div id="wave">👋</div>
                <br />

                <h5>This is your Exam Portal Dashboard!</h5>
            </div>

            <h5 class="user">USER PROFILE</h5>

            <div id="buttons">
                <button id="export" onclick="window.print()">Export</button>
                <button id="fillform" onclick="location.href='../Form/Form.html'">Fill Form</button>
            </div>
        </div>

        <div id="stddetails">
            <div id="firsthalf">
                <span class="s">Symbol No: <?php echo $symbolNo?></span>
                <span class="s">Name: <?php echo $name?></span>
                <span class="s">Faculty: <?php echo $faculty?></span>
                <span class="s">Year: <?php echo $year?></span>
                <span class="s">Name of college: <?php echo $collegeName?></span>
                <span class="s">University: <?php echo $uni?></span>
            </div>
            <div class="secondhalf">
                <div id="internaldiv">
                    <span class="s">Reg no: <?php echo $regNo?></span>
                    <span class="s">Roll no: <?php echo $rollNo?></span>
                    <span class="s">Programme: <?php echo $programme?></span>
                    <!-- <span class="s"></span> -->
                </div>

                <div class="duepayment">
                    <span class="s">Due Payment: <?php echo $duePayment?></span>
                </div>
            </div>

            <div id="image">
                <img src="photoFrame.png" alt="photoFrame" />
            </div>
        </div>

        <!-- Subject details -->
        <div id="subdetails">
            <h2 class="subHead">Regular Subjects</h2>

            <table class="subtable">
                <tr id="tablehead">
                    <th class="head">SN</th>
                    <th class="head">Subject</th>
                    <th class="head">Subject Code</th>
                    <th class="head">Credit Hrs</th>
                    <th class="head">Barrier Status</th>
                    <th class="head">Barrier Subject</th>
                    <th class="head">Barrier Semester</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Enigeering Mathematics II</td>
                    <td>1213</td>
                    <td>3 hrs</td>
                    <td class="barrier">Barrier</td>
                    <td>Engineering Mathematics IV</td>
                    <td>4th</td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Mathematical Foundation in Computer Science</td>
                    <td>1114</td>
                    <td>2 hrs</td>
                    <td class="notbarrier">Not Barrier</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>03</td>
                    <td>Physics</td>
                    <td>5498</td>
                    <td>3 hrs</td>
                    <td class="notbarrier">Not Barrier</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>04</td>
                    <td>Object Oriented Programming in C++</td>
                    <td>2014</td>
                    <td>4 hrs</td>
                    <td class="notbarrier">Not Barrier</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table>
        </div>

        <!-- Back Subject details -->
        <div id="backsubdetails">
            <h2 class="subHead">Back Subjects</h2>

            <table class="subtable">
                <tr id="tablehead">
                    <th class="head">SN</th>
                    <th class="head">Subject</th>
                    <th class="head">Subject Code</th>
                    <th class="head">Credit Hrs</th>
                    <th class="head">Barrier Status</th>
                    <th class="head">Barrier Subject</th>
                    <th class="head">Barrier Semester</th>
                </tr>

                <tr>
                    <td>01</td>
                    <td>Enigeering Mathematics II</td>
                    <td>1213</td>
                    <td>3 hrs</td>
                    <td class="barrier">Barrier</td>
                    <td>Engineering Mathematics IV</td>
                    <td>4th</td>
                </tr>

                <tr>
                    <td>02</td>
                    <td>Mathematical Foundation in Computer Science</td>
                    <td>1114</td>
                    <td>2 hrs</td>
                    <td class="notbarrier">Not Barrier</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>03</td>
                    <td>Physics</td>
                    <td>5498</td>
                    <td>3 hrs</td>
                    <td class="notbarrier">Not Barrier</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>04</td>
                    <td>Object Oriented Programming in C++</td>
                    <td>2014</td>
                    <td>4 hrs</td>
                    <td class="notbarrier">Not Barrier</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </table>
        </div>

        <!-- footer -->
        <div id="footer">
            <h2 class="footertext">All Rights Reserved to the Team ⓒ</h2>
            <div id="btn">
                <button id="export" class="button">Export</button>
                <button id="fillform" class="button">Fill Form</button>
            </div>
        </div>
    </div>
</body>

</html>