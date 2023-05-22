<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="<?= APP_FOLDER ?>/style/style.css">
</head>

<body>
  <?php
  loadController('Menu', 'index');

  ?>
  
  <!-- login form -->
<div class="bracketTable">
    <h1>Koszyk</h1>
    <table border="solid">
        <tr>
            <th>Produkt</th>
            <th>Cena</th>
            <th>Ilość</th>
            <th>Usuń</th>
        </tr>
        <tr>
            <td>Produkt 1</td>
            <td>100</td>
            <td>1</td>
            <td><a href="">Usuń</a></td>
        </tr>
        <tr>
            <td>Produkt 2</td>
            <td>200</td>
            <td>1</td>
            <td><a href="">Usuń</a></td>
        </tr>
    </table>

</div>


</body>

</html>