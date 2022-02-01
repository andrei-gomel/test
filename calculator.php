<!DOCTYPE html>
<html lang="ru">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Калькулятор</title>
</head>
<body>

<?php

function calculate($a, $b, $znak)
{
  switch ($znak) {

    case '+':
      $res = $a + $b;
      break;

    case '-':
      $res = $a - $b;
      break;

    case '*':
      $res = $a * $b;
      break;

    case '/':
      if ($b == 0)
      {
        echo '<h3>Ошибка! Деление на ноль.<h3>';
        $res = false;
      }
        else
          $res = $a / $b;
      break;

    default:
      echo '<br><h3>Ошибка! Неопределённая операция!<h3>';
      break;
  }

  return $res;
}

?>

<div style="width:500px; float: left; padding-left: 630px;">
<br><br><br><h3>Калькулятор</h3>
<form action="calculator.php" method="post">
   <input type="text" name="a" value="

<?php

   if (isset($_POST['a']) and $_POST['a'] != '')
   {
     echo $_POST['a'];
   }
?>

"><br><input type="text" name="b" value="

<?php
   if (isset($_POST['b']) and $_POST['b'] != '')
   {
     echo $_POST['b'];
   }
?>

"><br>
   <input type="submit" name="znak" value="+">
     <input type="submit" name="znak" value="-">
       <input type="submit" name="znak" value="*">
         <input type="submit" name="znak" value="/"><hr align="left" width="230">

<?php

if(isset($_POST['a']) and isset($_POST['b']))
{
  $res = false;
  $err = false;
  $num1 = $_POST['a'];
  $num2 = $_POST['b'];
  $znak = $_POST['znak'];

  if (is_numeric($_POST['a']) and is_numeric($_POST['b']))
  {
    $res = calculate($num1, $num2, $znak);
  }
  elseif (!is_numeric($_POST['a']) and !is_numeric($_POST['b'])) {

    $err = 'Ошибка! Ведите число 1 и число 2!';
  }
  else {
    if (!is_numeric($_POST['a'])) {

      $err = 'Ошибка! Ведите число 1!';
    }
    if (!is_numeric($_POST['b'])) {

      $err = 'Ошибка! Ведите число 2!';
    }
  }

  if ($res)
  {
    echo '<h3>Результат :<br><br>&nbsp;';
    echo $num1 . ' ' . $znak . ' ' . $num2 . ' = ' . $res . '<h3>';
  }

  if ($num2 == 0 and $znak == '*' and is_numeric($num2))
  {
    echo '<h3>Результат :<br><br>&nbsp;';
    echo $num1 . ' ' . $znak . ' ' . $num2 . ' = ' . (int)$res . '<h3>';
  }

  if($err and !$res)
  {
    echo '<h3>' . $err . '<h3>';
  }
}

echo '</div>';
?>

<br><br><div style="width:500px; float: left; padding-left: 630px;">
  <a href="check_me.php">Хочу решать сам!</a></div>

</body>
</html>
