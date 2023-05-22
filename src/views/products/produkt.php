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
  <!-- //load jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- strona główna  -->

  <?php



  ?>

  <form onsubmit="return false" class="productForm">

    <input type="text" list="ice-cream-flavors" id="ajaxData" name="name">
    <datalist id="ice-cream-flavors">
      <?php echo $params["options"] ?>
    </datalist>

    <input type="submit" class="pButton" value="submit">

  </form>
  <content>


    <h1>Witaj na <?php echo $params["pageTitle"] ?> </h1>
    <?php echo $params["img"] ?>
    <br>
    <b>Cena: </b>
    <?php echo $params["cena"] ?>
    zł
    <br>

    <?php echo $params["welcomeMessage"] ?>
    <br>



    <button id=" <?php echo $params['koszyk'] ?>" type="button" class="pButton">Dodaj do koszyka</button>

    <!-- onclick subbmit buttton run ajax -->
    <script>
      $(document).ready(function() {
        $(".pButton").click(function() {
          var id = $("#ajaxData").val();
          $.ajax({
            url: "",
            method: "POST",
            data: {
              ajax: true,
              controller: "Product",
              class: "showOne",
              id: id
            },
            success: function(data) {
              // alert(data);
              $("content").html(data);
              window.history.pushState("data", "witaj ", id);
              document.title = id;

            }
          });
        });
      });
    </script>
  </content>
</body>


</html>