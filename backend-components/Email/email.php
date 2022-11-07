<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link rel="stylesheet" href="email.css">
</head>
<body>
    <div class="container">
        <div class="container1">
            <form action="../sendEmail.php" method="post">

                <div class="heading">
                    <h2>Please enter your email</h2>
                </div>

                <div class="new">
                    <input type="email" name="email" placeholder="Please enter your email" id="n">
                </div>
                
                <div class="btn">
                    <button id="bt">Submit</button>
                </div>
            </form>

        </div>
    </div>
</body>
</html>