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
</content>