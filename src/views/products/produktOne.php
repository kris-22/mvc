<!-- strona główna  -->

<?php
// loadController('Menu', 'index');
?>

<h1>Witaj na <?php echo $params['pageTitle'] ?> </h1>

<?php echo $params['img'] ?>


<?php
echo $params['welcomeMessage'];
?>
<br>
<button id=" <?php echo @$params["koszyk"] ?>" type="button" class="AddToBasketBtn btn btn-primary">Dodaj do koszyka</button>

</body>

</html>