<?php

// Подключаем задания
require_once('functions.php');

// Магия которая пригодится в жизни
ob_start();

/**
 * Task 1
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 1</h2>";

// Вариант 1
$data = [
    "Пусть всегда будет солнце,",
    "Пусть всегда будет небо,",
    "Пусть всегда будет мама,",
    "Пусть всегда буду я."
];

task1($data);

// Вариант 2
$data = [
    "От",
    "улыбки",
    "хмурый",
    "день",
    "светлей"
];

echo "<p>", task1($data, true), "</p>";
echo "</div>";


/**
 * Task 2
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 2</h2>";

$data = [1, 2, 3, 4, 5];

echo "<p>", task2($data, "+"), "</p>";
echo "<p>", task2($data, "-"), "</p>";
echo "<p>", task2($data, "*"), "</p>";

$data = [16, 8, 2, 1];

echo "<p>", task2($data, "/"), "</p>";
echo "</div>";

/**
 * Task 3
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 3</h2>";

$data = [];

echo "<p>", task3("+", 1, 2, 3, 4, 5), "</p>";
echo "<p>", task3($data, "-", 1, 2, 3, 4, 5), "</p>";
echo "<p>", task3($data, "*", 1, 2, 3, 4, 5), "</p>";

$data = [16, 8, 2, 1];

echo "<p>", task3($data, "/"), "</p>";
echo "</div>";

/**
 * Task 4
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 4</h2>";
task4(1, 1);
task4(8, 8);
echo "</div>";

/**
 * Task 5
 */
echo "<div class='jumbotron'>";
echo "<h2>Задание 5</h2>";
echo "<p>", task5("Radar"), "</p>";
echo "<p>", task5("12"), "</p>";
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
    <title>Второе домашнее задание от loftschool.com</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>Второе домашнее задание</h1>
            <?= $content ?>
        </div>
    </div>
</div>
</body>
</html>
