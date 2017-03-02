<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="loginStyle.css">
        <link rel="stylesheet" type="text/css" href="w3css.css">
    </head>
    <body style="background-image: url('images/background.jpg');background-repeat: no-repeat;background-attachment: fixed; background-size: 100%">
        <?php
        // put your code here
        ?>
        <div class="w3-container w3-teal">
            <h1>T-Book Online</h1>
        </div>
        <div class="w3-card-8" style="width:50%; margin: auto; top:50%; transform: translateY(50%); position: relative">
            <form>
                <div class="w3-container w3-blue">
                    <h2 class="w3-animate-right">Login</h2>
                </div>
                <div class="w3-container w3-padding-32">
                    <input type="text" name="username" class="w3-input"/>
                    <label class="w3-label w3-validate">Username</label>
                    <input type="password" name="upass" class="w3-input"/>
                    <label class="w3-label w3-validate">Password</label>
                </div>
                <div class="w3-container w3-center w3-padding-12">
                    <input type="button" value="Log In" onclick="fn()" class="w3-button w3-teal w3-round-large"/>
                    <input type="button" value="Sign Up" onclick="fn2()" class="w3-button w3-green w3-round-large"/>
                </div>
            </form>
        </div>
        <!--<footer class="w3-container w3-teal">
            <p>&copy; of Team#17</p>
        </footer>-->
    </body>
</html>
