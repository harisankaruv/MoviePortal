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
                    <h2 class="w3-animate-right">Sign Up</h2>
                </div>
                <div class="w3-container w3-padding-12">
                    <div class="w3-left">
                        <input type="text" name="fname" class="w3-input w3-left" style="background-color: transparent"/>
                        <label class="w3-label">First Name</label>
                    </div>
                    <div class="w3-right">
                        <input type="text" name="lname" class="w3-input w3-right" style="background-color: transparent"/>
                        <label class="w3-label">Last Name</label>
                    </div>
                    <input type="email" name="mailid" class="w3-input" style="background-color: transparent"/>
                    <label class="w3-label">E-mail</label>
                    <br>
                    <input type="text" name="pass-main" class="w3-input" style="background-color: transparent"/>
                    <label class="w3-label">Password</label>
                    <input type="text" name="pass-confirm" class="w3-input" style="background-color: transparent"/>
                    <label class="w3-label">Confirm Password</label>
                    <div class="w3-center">
                        <input type="button" class="w3-button w3-teal w3-round-large w3-ripple" value="Sign up" onclick="fn()"/>
                    </div>
                </div>
            </form>
        </div>
        <div class="w3-container w3-teal w3-bottom">
            <p>&copy; of Team#17</p>
        </div>
    </body>
</html>
