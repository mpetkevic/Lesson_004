<?php

// Подключаем задания
require_once('functions.php');

// Магия которая пригодится в жизни
ob_start();

/**
 * Task 1
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 1:</h2>";
$file = "data.xml";
echo "<p>", task1($file), "</p>";
echo "</div>";

/**
 * Task 2
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 2:</h2>";
echo "<p>", task2(), "</p>";
echo "</div>";

/**
 * Task 2
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 3:</h2>";
echo "<p>", task3(), "</p>";
echo "</div>";




$content = ob_get_contents();
ob_end_clean();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Домашнее задание №3 от loftschool.com</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>Домашнее задание №3</h1>
            <?= $content ?>
        </div>
    </div>
</div>
</body>
</html>
