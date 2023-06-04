<style>
  /* style to home webpage  */
  body {
    background-color: #f1f1f1;
    font-family: Arial, Helvetica, sans-serif;
  }

  .navbar {
    overflow: hidden;
    background-color: #333;
  }

  .navbar * {
    box-sizing: border-box;
  }

  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    position: relative;
  }

  .dropdown {
    float: left;
    overflow: hidden;
  }

  .dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }

  .navbar i {
    font-size: 16px !important;
  }

  .navbar .koszyk::after {
    content: "11";
    position: absolute;
    top: 2px;
    right: 0;
    width: 18px;
    height: 18px;
    text-align: center;
    line-height: 18px;
    color: white;
    background-color: #cc4444;
    font-size: 12px;
    border-radius: 50%;

  }

  /* last child  */
  .navbar a:last-child {
    float: right;
  }
</style>

<!-- strona główna  -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<div class="navbar">
  <a href="<?= APP_FOLDER ?>/">Home</a>
  <a href="<?= APP_FOLDER ?>/produkty">produkty</a>
  <!-- koszyk -->

  <a class="koszyk" href="<?= APP_FOLDER ?>/koszyk"> <i class="material-icons">shopping_basket</i>
  </a>
  <a href="<?= APP_FOLDER ?>/login"><?= $params["status"] ?></a>
</div>
</div>