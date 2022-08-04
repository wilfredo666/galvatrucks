/*===================================
Modal formulario nuevo Contrato de Camion
=====================================*/
function MNuevoContratoCam() {
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CContratoCamion/FNuevoContratoCam",
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      }
    })
  }
  /*===================================
  Modal formulario nuevo Contrato de Camion
  =====================================*/
  function RegContratoCam() {
    var form = new FormData($("#FNuevoContratoCam")[0])
  
    $.ajax({
      type: "POST",
      url: "CContratoCamion/RegContratoCam",
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