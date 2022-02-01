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
