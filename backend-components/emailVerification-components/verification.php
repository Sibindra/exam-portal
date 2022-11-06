<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>verification</title>

        <link rel="stylesheet" href="style.css" />

    </head>
    <body>

        <?php
            include "../forgotPassword.php"
        ?>
        <div id="hero">
            <div id="container">
                <div id="header">
                    <h1 id="title">Enter the verification code</h1>

                    <h3 id="description">
                        Enter the code we have sent you at your email address
                        <span>test@test.com</span>
                    </h3>
                </div>

                <div id="codeContainer">
                    <input type="number" id="0" class="input" maxlength="1"/>
                    <input type="number" id="1" class="input" maxlength="1"/>
                    <input type="number" id="2" class="input" maxlength="1"/>
                    <input type="number" id="3" class="input" maxlength="1"/>
                </div>

                <div id="footer">
                    <button id="btn">Submit</button>
                    <a href="#" id="resend">Resend code</a>
                </div>
            </div>
        </div>
    </body>

    <script src="verification.js"></script>

</html>