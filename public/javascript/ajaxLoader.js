// alert("ajaxLoader.js");

/* <input type="submit" class="pButton ajaxData" value="submit" data-id="#ajaxDataForm" data-controller="Product" data-class="showOne"> */

/*
@button class = ajaxData
@data-id - id of form
@data-controller - controller name
@data-class - class name
*/

$(".ajaxData").click(function () {
  var id = $(this).data("id");
  var controller = $(this).data("controller");
  var classValue = $(this).data("class");
  var urlPath = $(this).data("urlpath");
  id = $(id).val();
  $.ajax({
    url: "",
    method: "POST",
    data: {
      ajax: true,
      controller: controller,
      class: classValue,
      id: id,
    },
    success: function (data) {
      $("content").html(data);
      urlPath = urlPath + id;
      window.history.pushState("data", "witaj ", urlPath);
      document.title = id;
    },
  });
});
