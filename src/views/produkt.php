<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <!-- strona główna  -->

  <?php include('components/menu.php') ?>



  <h1>Witaj na <?php echo $pageTitle ?> </h1>
  <?php echo $welcomeMessage ?>
  <form action="produkty/load">
    <input type="text" name="name" id="name">
    <input type="submit" value="submit">
  </form>




</body>

</html>