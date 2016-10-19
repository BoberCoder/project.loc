<?php

        $login = $_POST['login'];
        $password = $_POST['firstpassword'];
        $confirmpass = $_POST['confirm'];
        
        $link = mysqli_connect ('localhost','bobercoder','80963968201','my_blog');
        
        $password = md5($password);
        $sql = "INSERT INTO users VALUES('','$login','$password')";
        $send = mysqli_query($link, $sql);
?>