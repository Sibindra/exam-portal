<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
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
                <span class="s">Symbol No: <?php echo $symbolNo ?></span>
                <span class="s">Name: <?php echo $name ?></span>
                <span class="s">Faculty: <?php echo $faculty ?></span>
                <span class="s">Year: <?php echo $year ?></span>
                <span class="s">Name of college: <?php echo $collegeName ?></span>
                <span class="s">University: <?php echo $uni ?></span>
            </div>
            <div class="secondhalf">
                <div id="internaldiv">
                    <span class="s">Reg no: <?php echo $regNo ?></span>
                    <span class="s">Roll no: <?php echo $rollNo ?></span>
                    <span class="s">Programme: <?php echo $programme ?></span>
                </div>

                <div class="duepayment">
                    <span class="s">Due Payment: <?php echo $duePayment ?></span>
                </div>
            </div>

            <div id="image">
                <img src="<?php echo $img ?>" alt="photoFrame" />
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
                    <td><?php echo $data["sub1"] ?></td>
                    <td><?php echo $data["subCode1"] ?></td>
                    <td><?php echo $data["credit1"] ?></td>
                    <td class=<?php echo $barrierCss ?>> <?php echo $data["barrier1"] ?></td>
                    <td><?php echo $data["barrierSubject1"] ?></td>
                    <td><?php echo $data["barrierSem1"] ?></td>
                </tr>

                <tr>
                    <td>02</td>
                    <td><?php echo $data["sub2"] ?></td>
                    <td><?php echo $data["subCode2"] ?></td>
                    <td><?php echo $data["credit2"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $data["barrier2"] ?></td>
                    <td><?php echo $data["barrierSubject2"] ?></td>
                    <td><?php echo $data["barrierSem2"] ?></td>
                </tr>

                <tr>
                    <td>03</td>
                    <td><?php echo $data["sub3"] ?></td>
                    <td><?php echo $data["subCode3"] ?></td>
                    <td><?php echo $data["credit3"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $data["barrier3"] ?></td>
                    <td><?php echo $data["barrierSubject3"] ?></td>
                    <td><?php echo $data["barrierSem3"] ?></td>
                </tr>

                <tr>
                    <td>04</td>
                    <td><?php echo $data["sub4"] ?></td>
                    <td><?php echo $data["subCode4"] ?></td>
                    <td><?php echo $data["credit4"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $data["barrier4"] ?></td>
                    <td><?php echo $data["barrierSubject4"] ?></td>
                    <td><?php echo $data["barrierSem4"] ?></td>
                </tr>

                <tr>
                    <td>05</td>
                    <td><?php echo $data["sub5"] ?></td>
                    <td><?php echo $data["subCode5"] ?></td>
                    <td><?php echo $data["credit5"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $data["barrier5"] ?></td>
                    <td><?php echo $data["barrierSubject5"] ?></td>
                    <td><?php echo $data["barrierSem5"] ?></td>
                </tr>

                <tr>
                    <td>06</td>
                    <td><?php echo $data["sub6"] ?></td>
                    <td><?php echo $data["subCode6"] ?></td>
                    <td><?php echo $data["credit6"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $data["barrier6"] ?></td>
                    <td><?php echo $data["barrierSubject6"] ?></td>
                    <td><?php echo $data["barrierSem6"] ?></td>
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
                    <td><?php echo $backData["backSub1"] ?></td>
                    <td><?php echo $backData["subCode1"] ?></td>
                    <td><?php echo $backData["credit1"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $backData["barrier1"] ?></td>
                    <td><?php echo $backData["barrierSubject1"] ?></td>
                    <td><?php echo $backData["barrierSem1"] ?></td>
                </tr>

                <tr>
                    <td>02</td>
                    <td><?php echo $backData["backSub2"] ?></td>
                    <td><?php echo $backData["subCode2"] ?></td>
                    <td><?php echo $backData["credit2"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $backData["barrier2"] ?></td>
                    <td><?php echo $backData["barrierSubject2"] ?></td>
                    <td><?php echo $backData["barrierSem2"] ?></td>
                </tr>

                <tr>
                    <td>03</td>
                    <td><?php echo $backData["backSub3"] ?></td>
                    <td><?php echo $backData["subCode3"] ?></td>
                    <td><?php echo $backData["credit3"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $backData["barrier3"] ?></td>
                    <td><?php echo $backData["barrierSubject3"] ?></td>
                    <td><?php echo $backData["barrierSem3"] ?></td>
                </tr>

                <tr>
                    <td>04</td>
                    <td><?php echo $backData["backSub4"] ?></td>
                    <td><?php echo $backData["subCode4"] ?></td>
                    <td><?php echo $backData["credit4"] ?></td>
                    <td class=<?php echo $barrierCss ?>><?php echo $backData["barrier4"] ?></td>
                    <td><?php echo $backData["barrierSubject4"] ?></td>
                    <td><?php echo $backData["barrierSem4"] ?></td>
                </tr>
            </table>
        </div>

        <!-- footer -->
        <div id="footer">
            <h2 class="footertext">Thank You</h2>
            <div id="btn">
                <button id="export" class="button">Export</button>
                <button id="fillform" class="button">Fill Form</button>
            </div>
        </div>
    </div>
</body>

</html>