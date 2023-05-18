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
  view('components/menu');

  ?>

  <h1>Witaj na <?php echo $params['pageTitle'] ?> </h1>

  <?php echo $params['img'] ?>


  <?php
  echo $params['welcomeMessage'];
  ?>
  <br>
  <button id=" <?php echo $params["koszyk"] ?>" type="button" class="AddToBasketBtn btn btn-primary">Dodaj do koszyka</button>

</body>

</html>