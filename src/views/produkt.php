<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
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

  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
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
</style>

<body>
  <!-- strona główna  -->

  <div class="navbar">
    <a href="/mvc">Home</a>
    <a href="/mvc/produkty">produkty</a>
    <div class="dropdown">
      <button class="dropbtn">Dropdown
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
      </div>
    </div>
  </div>


  <h1>Witaj na <?php echo $pageTitle ?> </h1>
  <h3> <?php echo $welcomeMessage ?> </h3>
  <form action="produkty/load">
    <input type="text" name="name" id="name">
    <input type="submit" value="submit">
  </form>




</body>

</html>