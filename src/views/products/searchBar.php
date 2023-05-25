<form onsubmit="return false" class="productForm">

  <input type="text" list="ice-cream-flavors" id="ajaxDataForm" name="name">
  <datalist id="ice-cream-flavors">
    <?= $params["options"] ?>
  </datalist>

  <input type="submit" class="pButton ajaxData" value="submit" data-id="#ajaxDataForm" data-controller="Product" data-class="showOne" data-urlpath="<?= APP_FOLDER ?>/produkty/">

</form>
<!-- //link javascript  -->
<script src="<?= APP_FOLDER ?>/script/ajaxLoader.js"></script>