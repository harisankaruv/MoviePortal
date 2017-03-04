<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="loginStyle.css">
        <link rel="stylesheet" type="text/css" href="w3css.css">
    </head>
    <body style="background-repeat: no-repeat;background-attachment: fixed; background-size: 100%">
        <?php
        // put your code here
        ?>
        <div class="w3-container w3-teal">
            <h1>T-Book Online</h1>
        </div>
        <div class="w3-card-8" style="width:50%; margin: auto; top:50%; position: relative; transform: translateY(25%) ">
            <form>
                <div class="w3-container w3-blue w3-center">
                    <h2 class="w3-animate-opacity">Login</h2>
                </div>
                <div class="w3-container w3-padding-32 w3-center">
                    <center>
                    <input type="text" name="username" class="w3-center w3-input w3-animate-input w3-hover-pale-green" style="background-color: transparent; width: 60%"/>
                    <label class="w3-label w3-validate">Username</label>
                    <input type="password" name="upass" class="w3-center w3-input w3-animate-input w3-hover-pale-green" style="background-color: transparent; width: 60%"/>
                    <label class="w3-label w3-validate"">Password</label>
                    </center><br>
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="w3-container w3-center w3-padding-12">
                    <input type="button" value="Log In" onclick="fn()" class="w3-button w3-teal w3-round-large"/><br>
                    <br><a href="register.php" style="color:green">Not Registered? Signup Now!</a>
                </div>
            </form>
        </div>
        <div class="w3-container w3-teal w3-bottom">
            <p>&copy; of Team#17</p>
        </div>
    </body>
</html>
