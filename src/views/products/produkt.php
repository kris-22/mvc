<content>


  <h1>Witaj na <?= $params["pageTitle"] ?> </h1>
  <?= $params["img"] ?>

  <br>
  <b>Cena: </b>
  <?= $params["cena"] ?>
  zł
  <br>
  <?= $params["welcomeMessage"] ?>
  <br>

  <button id=" <?= $params['koszyk'] ?>" type="button" class="pButton">Dodaj do koszyka</button>

  <!-- onclick subbmit buttton run ajax -->
</content>