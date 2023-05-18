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
  loadController('Menu', 'index');

  ?>
  <h1>Witaj na <?php echo $params['pageTitle'] ?> </h1>

  <h3> <?php echo $params['welcomeMessage']  ?> </h3>


  <?php
  // loadController('Product', 'show', ['id' => 'telefon']);

  // loadController('Product', 'showOne', ['id' => 'słuchawki']);
  // loadController('Product', 'showOne', ['id' => 'telefon']);
  // loadController('Product', 'showOne', ['id' => 'myszka']);
  // loadController('Product', 'showOne', ['id' => 'laptop']);

  // loadController('Product', 'show', ['id' => 'telefweon']);

  // loadController('Product', 'show');
  // loadController('Auth', 'login');
  // loadController('Auth', 'register');
  // loadController('Product', 'show', ['id' => 'telefon']);

  ?>

</body>

</html>