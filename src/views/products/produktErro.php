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
  loadController('Menu', 'index');


  ?>
  <form action="produkty/load" class="productForm">

    <input type="text" list="ice-cream-flavors" id="ice-cream-choice" name="name">
    <datalist id="ice-cream-flavors">
      <?php echo $params["options"] ?>
    </datalist>

    <input type="submit" value="submit">

  </form>

  <h1>Witaj na <?php echo $params["pageTitle"] ?> </h1>

  <?php echo $params["welcomeMessage"] ?>
  <br>




</body>

</html>