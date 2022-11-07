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

    <div class="container">
        <form action="../newPassword.php" method="POST">

            <div class="container1">
                <h2>Please enter your new password</h2>

                <div class="new">
                    <input type="password" name="newPassword" placeholder="Enter your password" id="n">
                </div>
                <div class="confirm">
                    <input type="password" name="confirmnewPassword" placeholder="Confirm password" id="con">
                </div>

                <div class="btn">
                    <button id="bt" type="submit">Submit</button>
                </div>

            </div>
        </form>
    </div>
</body>

</html>