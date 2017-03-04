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
                <div class="w3-container w3-blue">
                    <h2 class="w3-animate-fading">Welcome to T-Book</h2>
                </div>
                <div class="w3-container w3-center w3-padding-12 w3-center">
                    <input type="button" value="Log In" onclick="window.location.href='signin.php'" class="w3-button w3-teal w3-round-large w3-xlarge"/>
                    <input type="button" value="Sign Up" onclick="fn2()" class="w3-button w3-green w3-round-large w3-xlarge"/>
                </div>
            </form>
        </div>
        <div class="w3-container w3-teal w3-bottom">
            <p>&copy; of Team#17</p>
        </div>
    </body>
</html>
