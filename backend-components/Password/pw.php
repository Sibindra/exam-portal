<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="pw.css">
</head>

<body>
    <form action="../newPassword.php?requestedEmail=test@test.com" method="POST" id="form">

    <div class="container">

            <div class="container1">
                <h2 id="title">Please enter your new password</h2>

                <div class="new">
                    <input type="password" name="newPassword" placeholder="Enter your password" id="p1" class="box">
                    <!-- <input type="password" name="confirmnewPassword" placeholder="Confirm password" id="p2" class="box"> -->
                </div>

                <div class="btn">
                    <button id="bt" type="submit">Submit</button>
                </div>

            </div>
        </div>

        <script src="pw.js"></script>
    </form>
</body>

</html>