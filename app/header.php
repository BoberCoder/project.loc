<?php
    require_once 'include/database.php';
    require_once 'include/function.php';
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X_UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Мій Блог</title>
        <script src="public/js/jquery-3.1.1.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Відкрити навігацію</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Мій блог</a>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <?php
                           $categories = get_categories($link); //записуємо в змінну масив даних отриманий із БД.
                        ?>
                      <!--  <?php if(3>4): ?>
                        <li><a href="#">Пункт 1</a></li>
                        <li><a href="#">Пункт 2</a></li>
                        <?php else: ?>
                        <li><a href="#">Пункт 3</a></li>
                        <li><a href="#">Пункт 4</a></li>
                        <?php endif ?>-->
                       <!-- <?php 
                            $i = 1;
                            while ($i <= 6)
                            {
                                echo '<li><a href="#">Категорія '.$i.'</a></li>';
                                $i++;
                            }
                        ?>-->
                        <?php foreach ($categories as $category): ?>
                         
                        <li><a href="/category.php?id=<?=$category["id"]?>"><?=$category["title"]?></a></li>
                         
                        <?php endforeach; ?>
                        <li><a href="#"><i class="glyphicon glyphicon-plus-sign"></i>Додати категорію</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#modalform" role="button" data-toggle="modal"><i class="glyphicon glyphicon-user "></i>Авторизуватись</a></li>
                    </ul>
                </div>
            </div>
        </div>