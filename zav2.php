<!DOCTYPE html>
<html lang="en">

<head>
  <title>Контактна інформація</title>
  <meta charset=UTF-8>
  <meta http-equiv="Content-Type" content="text/html">
  <style>
    table {
      border-collapse: collapse;
      padding: 2px;
    }
    input[type=submit],[type=reset]{
      background-color: #CDC5C2	;
      border: none;
      padding: 5px 20px;
      margin: 10px 15px;
      color: #252850;
      cursor: pointer;
      border-radius: 12px;
    }
    h3{
      color: #8E4585;
    }
    h2{
      color: #423C63;
    }
    b{
      color: #614051;
    }
  </style>
</head>

<body>
  <?php
  function print_form($f_name, $l_name, $email, $zip, $object)
  {
  ?>
    <form action="zav2.php" method="POST">
      <table cellspasing="2" cellpedding="2" border="1">
        <tr>
          <td>Ім'я</td>
          <td><input name="f_name" type="text" value="<?php echo $f_name ?>"></td>
        </tr>
        <tr>
          <td>Прізвище<b>*</b></td>
          <td><input name="l_name" type="text" value="<?php print $l_name ?>"></td>
        </tr>
        <tr>
          <td>Email адреса<b>*</b></td>
          <td><input name="email" type="text" value="<?php print $email ?>"></td>
        </tr>
        <tr>
          <td>Поштовий індекс<b>*</b></td>
          <td><input name="zip" type="text" value="<?php print $zip ?>"></td>
        </tr>
        <tr>
          <td>Улюблений предмет</td>
          <td><input name="object" type="text" value="<?php print $object ?>"></td>
        </tr>
      </table>
      <br><input name="submit" type="submit" value="Надіслати">
      <input type="reset" value="Відмінити">
    </form>
  <?php
  }
  function check_form($f_name, $l_name, $email, $zip, $object)
  {
    if (!$l_name || !$email || !$zip) : echo "<h2>Помилка у заповненні форми!</h2>";
      if (!$l_name) {
        echo "<var><h3>Ви не заповнили поле <b>Прізвище</b></h3></var>";
      }
      if (!$email) {
        echo "<h3>Ви не заповнили поле <b>Email адреса</b></h3>";
      }
      if (!$zip) {
        echo "<h3>Ви не заповнили поле <b>Поштовий індекс</b></h3>";
      }
      print_form($f_name, $l_name, $email, $zip, $object);
    else : confirm_form($f_name, $l_name, $email, $zip, $object);
    endif;
  }
  function confirm_form($f_name, $l_name, $email, $zip, $object)
  {
  ?>
    <h2>Дякуємо! Слідуюча інформація була успішно надіслана</h2>
    <b>Контактна інформація</b>
  <?php
    echo "<br>$f_name $l_name $email<br>Поштовий індекс: $zip<br>
    Улюблений предмет: $object\n";
  }
  if (!array_key_exists('submit', $_POST)) :
  ?>
    <fieldset>
      <legend>
        <h3 style="color: #6D3F5B;">Будь-ласка, введіть інформацію про себе</h3>
      </legend>
      <i style="color: #800080;">Поля з <b>*</b> обов'язкові для заповнення<p></i>
      <?php
      print_form(" " , " ", " ", " ", " ", " ");
    else :
      check_form($_POST['f_name'], $_POST['l_name'], $_POST['email'], $_POST['zip'], $_POST['object']);
    endif;
      ?>
    </fieldset>
</body>

</html>