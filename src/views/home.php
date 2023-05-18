<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  view('components/menu')
  ?>
  <h1>Witaj na <?php echo $pageTitle ?> </h1>
  <h3> <?php echo $welcomeMessage ?> </h3>


  <?php
  loadController('Auth', 'login');
  ?>

</body>

</html>