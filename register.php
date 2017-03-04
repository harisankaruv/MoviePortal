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
        <div class="w3-card-8" style="width:50%; margin: auto; position: relative; transform: translateY(10%) ">
            <form>
                <div class="w3-container w3-blue">
                    <h2 class="w3-animate-right">Sign Up</h2>
                </div>
                <div class="w3-container w3-padding-12" style="width: 60%">
                    <input type="text" name="fname" class="w3-input w3-animate-input w3-hover-teal" style="background-color: transparent; width: 90%"/>
                    <label class="w3-label">First Name</label>
                    <input type="text" name="lname" class="w3-input w3-animate-input w3-hover-teal" style="background-color: transparent; width: 90%"/>
                    <label class="w3-label">Last Name</label>
                    <input type="email" name="mailid" class="w3-input w3-animate-input w3-hover-teal" style="background-color: transparent; width: 90%"/>
                    <label class="w3-label">E-mail</label>
                    <input type="text" name="pass-main" class="w3-input w3-animate-input w3-hover-teal" style="background-color: transparent; width: 90%"/>
                    <label class="w3-label">Password</label>
                    <input type="text" name="pass-confirm" class="w3-input w3-animate-input w3-hover-teal" style="background-color: transparent; width: 90%"/>
                    <label class="w3-label">Confirm Password</label>
                    <br><br>
                    <input type="checkbox" class="w3-check" name="policy"/>
                    <label class="w3-label">I accept to the terms and policies</label><br><br>
                </div>
                <div class="w3-center w3-padding-12">
                    <input type="button" class="w3-button w3-teal w3-round-large w3-ripple" value="Sign up" onclick="fn()"/>
                    <br><br>
                    <a href="signin.php">Already registered? Login here!</a>
                </div>
                
            </form>
        </div>
        <!--<div class="w3-container w3-teal w3-bottom">
            <p>&copy; of Team#17</p>
        </div>-->
    </body>
</html>
