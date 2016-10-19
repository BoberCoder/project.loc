<?php

ini_set('error_reporting',0); #        |
ini_set('display_errors',0); #         | Підключення виведення повідомлень помилок... При виставленні в усіх трьох функціях нулів повідомлення не будуть виводитися
ini_set('display_startup_errors',0); # |

include ('app/include/Classes/Auto.php');
$var = require ('app/header.php'); //При підключенні файлів командами include або require вони повертають значення одиниці при вдалому підключенні окремих файлів.

if (!$var) {
    echo 'Файл не підключено!!!';
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php 
                    $posts = get_posts();
                ?>
            <div class="page-header">
                <h1>Всі записи</h1>
            </div>
             <?php foreach ($posts as $post):?>
            <div class="row">
              <div class="col-md-3">
                <a href="#" class="thumbnail">
                    <img src="<?=$post['image']?>" alt="">
                </a>
              </div>
              <div class="col-md-9">
                <h4><a href="#"><?=$post['title']?></a></h4>
                <p>
                    <?=$post['description']?>
                </p>
                <p><a class="btn btn-info btn-sm" href="#">Читати повністю</a></p>
                <br/>
                <ul class="list-inline">
                    <li><i class="glyphicon glyphicon-list"></i> <a href="#">Назва категорії</a> | </li>
                    <li><i class="glyphicon glyphicon-calendar"></i> 8 вересня 2016 21:30</li>
                </ul>
              </div>
            </div>
            <hr>
            <?php endforeach;?>
            
        </div>
        <div class="col-md-3">
            sidebar
        </div>
    </div>
</div>

<?php
require 'app/footer.php';
?>
