<?php

function Login($username, $remember)
{
  // Имя не должно ббыть пустой строкой.
  if (trim($username) == '')
    return false;

  // Запоминаем имя в сессии
  $_SESSION['username'] = $username;

  // и в cookies, если пользователь поставил галочку 'Запомнить'.
  if ($remember)
    setcookie('username', $username, time() + 60);

  // Авторизация прошла успешно.
  return true;
}

function Logout()
{
  // Делаем куку просроченной.
  setcookie('username', '', time() - 1);

  // Сброс сессии (удаляем имя пользователя).
  unset($_SESSION['username']);
}

session_start();

// Устанавливаем флаг входа в значение false.
$enter_site = false;

// Попадая на страницу login.php Авторизация сбрасывается.
Logout();

// Если массив $_POST не пуст, то обрабатываем отправку формы.
if (count($_POST) > 0)
{

   @$remember_user = (int)$_POST['remember'];
   $enter_site = Login($_POST['username'], $remember_user);
}

// Переадресуем пользователя на одну из страниц сайта.
if($enter_site)
{
  header('Location: check_me.php');
  exit;
}

?>

<br><br><br><br><br><br>
<div style="width:500px; float: left; padding-left: 650px;">
<h3>Как тебя зовут?</h3>

<form action="" method="post">
  Имя: <input type="text" name="username"><br>
  Запомнить меня <input type="checkbox" name="remember" value="1"><br>
  <input type="submit" value="Войти">
</form>
</div>
