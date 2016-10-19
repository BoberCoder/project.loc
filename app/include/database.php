<?php

$link = mysqli_connect ('localhost','bobercoder','80963968201','my_blog');

if(mysqli_connect_errno())
{
    echo 'Помилка в підключенні до бази даних('.mysqli_connect_errno().'): '.mysqli_connect_error(); 
    exit();
}
