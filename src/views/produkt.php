<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="<?php echo APP_FOLDER ?>/style/style.css">

</head>


<body>


  <!-- strona główna  -->

  <?php
  include('components/menu.php');
  ?>
  <form action="produkty/load">

    <input type="text" list="ice-cream-flavors" id="ice-cream-choice" name="name">
    <datalist id="ice-cream-flavors">
      <?php echo $options ?>
    </datalist>

    <input type="submit" value="submit">

  </form>

  <h1>Witaj na <?php echo $pageTitle ?> </h1>
  <?php echo $img ?>

  <?php echo $welcomeMessage ?>




</body>

</html>