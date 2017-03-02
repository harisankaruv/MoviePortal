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
        <div>
            <form>
                <span style="color:black">Username : </span>
                <input type="text" name="username" placeholder="Username" class="w3-label w3-validate"/><br>
                <span style="color:black">Password : </span>
                <input type="password" name="upass" placeholder="Password" class="w3-label w3-validate"/><br>
                <div>
                    <input type="button" value="Log In" onclick="fn()" class="w3-button w3-teal w3-round-large"/>
                    <input type="button" value="Sign Up" onclick="fn2()" class="w3-button w3-green w3-round-large"/>
                <div>
            </form>
        </div>
    </body>
</html>
