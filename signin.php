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
        <div class="w3-card-8" style="width:50%; margin: auto; top:50%; position: relative; transform: translateY(25%) ">
            <form>
                <div class="w3-container w3-blue">
                    <h2 class="w3-animate-right">Login</h2>
                </div>
                <div class="w3-container w3-padding-32">
                    <input type="text" name="username" class="w3-input" style="background-color: transparent"/>
                    <label class="w3-label w3-validate">Username</label>
                    <input type="password" name="upass" class="w3-input" style="background-color: transparent"/>
                    <label class="w3-label w3-validate"">Password</label><br>
                    <a href="#">Forgot Password?</a>
                </div>
                <div class="w3-container w3-center w3-padding-12">
                    <input type="button" value="Log In" onclick="fn()" class="w3-button w3-teal w3-round-large"/><br>
                    <a href="#" style="color:green">Not Regiistered? Signup Now!</a>
                </div>
            </form>
        </div>
        <div class="w3-container w3-teal w3-bottom">
            <p>&copy; of Team#17</p>
        </div>
    </body>
</html>
