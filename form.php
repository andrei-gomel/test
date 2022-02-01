<br><h3>Калькулятор</h3>

<?php
$_POST['a'] = false;$_POST['b'] = false;
?>

<form action="check_result.php" method="post">
   <input type="text" name="a" value="<?if ($_POST['a']) echo $_POST['a'];?>"><br>
   <input type="text" name="b" value="<?=$_POST['b'];?>"><br>
   <input type="submit" name="znak" value="+">
     <input type="submit" name="znak" value="-">
       <input type="submit" name="znak" value="*">
         <input type="submit" name="znak" value="/">
         <hr align="left" width="270">
