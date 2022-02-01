<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Решаем примеры</title>
</head>

<?php $arr_color = ['#00FA9A']; ?>

<body bgcolor="orange">

<?php

(isset($mess)) ? $mess : $mess = '';

$header = '<div style="width:350px; float: left; padding-left: 1200px;">
  <span style="color:red"><b>Привет, ' . $username . '</b></span> |
  <a href="login.php">Выход</a><hr></div>';

echo $header . '<br><br><br><br><div style="width:550px; float: left; padding-left: 600px;">';

echo $mess . '<h3>Реши пример: <br><br>' . $prim;

  $main = '<form action="" method="post">'.
    '<input type="text" name="res">'.
    '<input type="hidden" name="a" value="' . $a . '">
    <input type="hidden" name="b" value="' . $b . '">
    <input type="hidden" name="znak" value="' . $znak . '">
    <input type="hidden" name="res1" value="' . $res1 . '">'.
    '<input type="submit" value="Ответить"></form>'.
    '</div><br><br>
    <div style="width:550px; float: left; padding-left: 600px;">
      <a href="calculator.php">Калькулятор</a></div></body></html>';

  echo $main;
