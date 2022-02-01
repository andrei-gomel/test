<?php

session_start();

//include 'autorize.php';
//checkLogin($username)

// Если в сессии имя пользователя не установлено, пытаемся его достать из куки

if(!isset($_SESSION['username']) and isset($_COOKIE['username']))
{
  $_SESSION['username'] = $_COOKIE['username'];
}

// Ещё раз ищем имя пользователя в сессии.
$username = $_SESSION['username'];

// Неавторизированных пользователей отправляем на страницу авторизации.

if ($username == null)
{
  header('Location: login.php');
}

if (isset($_POST['res']))
{
/*
  $a = $_POST['a'];
  $b = $_POST['b'];
  $res1 = $_POST['res1'];
*/

//$mess = false;
  if ($_POST['znak'] == '+')
  {
    $d = $_POST['a'] . ' + ' . $_POST['b'] . ' = ' . $_POST['res1'];
  }
  else{

    if ($_POST['a'] < $_POST['b'])
    {
      $d = $_POST['b'] . ' - ' . $_POST['a'] . ' = ' . $_POST['res1'];
    }
    else {
      $d = $_POST['a'] . ' - ' . $_POST['b'] . ' = ' . $_POST['res1'];
    }
  }

if ($_POST['res'] == $_POST['res1'])
  {
    $mess = '<h3><font color=green>Молодец, ' . $username . ' ! Ответ правильный! <br>' . $d . '</font></h3><br><br>';
  }
  else {
      $mess = '<h3><font color=red>Ой, ' . $username . ' .. Ты за каникулы забыл математику. <br> Правильный ответ: ' . $d . '</font></h3><br><br>';
    }
}

$arr_znak = ['+', '-'];
$znak = rand(0,1);
$znak = $arr_znak[$znak];

if ($username == 'Егор')
{
    $a = rand(1,9);
    $b = rand(1,9);
}
else{
  $a = rand(10,1000);
  $b = rand(10,1000);
}

if ($znak == '-')
{
    if ($a < $b)
    {
      $res1 = $b - $a;
      $prim = '<b>' . $b . $znak . $a .'= </b>';
    }
    else{
      $res1 = $a - $b;
      $prim = '<b>' . $a . $znak . $b .'= </b>';
    }
}
else {
  $res1 = $a + $b;
  $prim = '<b>' . $a . $znak . $b .'= </b>';
}

include 'view.php';
?>
