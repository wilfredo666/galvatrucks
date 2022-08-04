/*===================================
Modal formulario nuevo Camion
=====================================*/
function MNuevoCamion() {
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCamion/FNuevoCamion",
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      }
    })
  }
  /*===================================
  Modal formulario nuevo Camion
  =====================================*/
  function RegCamion() {
    var form = new FormData($("#FNuevoCamion")[0])
  
    $.ajax({
      type: "POST",
      url: "CCamion/RegCamion",
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
          setTimeout(function(){
              location.reload()
            },1200)
      }
    })
  }