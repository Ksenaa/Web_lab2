<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cьомий приклад</title>
  <meta charset=UTF-8>
  <meta http-equiv="Content-Type" content="text/html">
</head>
<body>
<?
   $var = 5;
   $i = 0;
   while(++$i <= $var)
   {
      echo($i); echo('<br>');  
   }
?>
<b>____________________________________________________________________</b><p>
<?
// ____________________________________________________________________
   $var = 7;
   $i = 0;
   while(++$i <= $var)
   {
      echo($i);
      echo('<br>');
      if($i==3)break;
   }
?>
<b>____________________________________________________________________</b><p>
<?
   $var = 7;
   $i = 0;
   while(++$i <= $var)
   {
      if($i==5)
      {
         continue;
      }
      echo($i);
      echo('<br>');
   }
?>
</body>