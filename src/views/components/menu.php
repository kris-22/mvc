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

<!-- strona główna  -->

<div class="navbar">
  <a href="<?php echo APP_FOLDER ?>/">Home</a>
  <a href="produkty">produkty</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    </div>
  </div>
</div>