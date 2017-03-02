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
    <body>
        <?php
        // put your code here
        ?>
        <div class="w3-card-8" style="width:50%">
            <form class="w3-container">
                <div class="w3-container w3-blue">
                    <h2>Login</h2>
                </div>
                <input type="text" name="username" class="w3-input"/>
                <label class="w3-label w3-validate">Username</label>
                <input type="password" name="upass" class="w3-input"/>
                <label class="w3-label w3-validate">Password</label>
                <div>
                    <input type="button" value="Log In" onclick="fn()" class="w3-button w3-teal w3-round-large"/>
                    <input type="button" value="Sign Up" onclick="fn2()" class="w3-button w3-green w3-round-large"/>
                <div>
            </form>
        </div>
    </body>
</html>
