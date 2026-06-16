<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Регулярные выражения, часть 1</h2>

    <?php

    $text = file_get_contents('text.txt');

    $text = preg_replace('/\r\n|\r|\n/', '<br>', $text);

    $patterns = [];
    $pictures = [];

    $patterns[] = "/\{pict1\}/";
    $pictures[] = "<p><img src='pictures/pict1.jpg' style='width:500px;'></p>";

    $patterns[] = "/\{pict2\}/";
    $pictures[] = "<p><img src='pictures/pict2.jpg' style='width:500px;'></p>";

    $patterns[] = "/\{pict3\}/";
    $pictures[] = "<p><img src='pictures/pict3.jpg' style='width:500px;'></p>";

    $patterns[] = "/\{pict4\}/";
    $pictures[] = "<p><img src='pictures/pict4.jpg' style='width:500px;'></p>";

    $patterns[] = "/\{pict5\}/";
    $pictures[] = "<p><img src='pictures/pict5.jpg' style='width:500px;'></p>";

    $patterns[] = "/\{pict6\}/";
    $pictures[] = "<p><img src='pictures/pict6.jpg' style='width:500px;'></p>";


    $text = preg_replace($patterns, $pictures, $text);

    echo $text;
    ?>

</body>
</html>
