<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <form  method="post">
    <input type="text" id="login"placeholder="login" name=login>
      <input type="text" id="login"placeholder="password" name=password>
    <input type="submit" name="button" value="in logen"></input>
  </form>
<?php
  session_start();
  function inverse($x) {
      if (!$x) {
          throw new Exception('Division by zero.');
      }
      return 1/$x;
  }
  try {
      echo inverse(0) . "\n";
  }
  catch (Exception $e) {
      error_log($e, 3, "errors.log");
      echo("<h1>Er is iets fout gegaan!</h1>");
  }

 ?>

  </body>
</html>
