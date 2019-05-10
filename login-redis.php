<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 29-01-2019
 * Time: 14:36
 */
?>

<html>
    <head>
        <title>Advanced login registration</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Oxygen:400,300,700" rel="stylesheet" type="text/css"/>
        <link href="https://code.ionicframework.com/ionicons/1.4.1/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div class="signin cf">
        <div class="avatar"></div>
        <form >
            <div class="inputrow">
                <input type="text" id="name" placeholder="Username"/>
                <label class="ion-person" for="name"></label>
            </div>
            <div class="inputrow">
                <input type="password" id="pass" placeholder="Password"/>
                <label class="ion-locked" for="pass"></label>
            </div>
            <input type="checkbox" name="remember" id="remember"/>
            <label class="radio" for="remember">Stay Logged In</label>
            <input type="submit" value="Login"/>
        </form>
    </div>

    </body>
</html>
