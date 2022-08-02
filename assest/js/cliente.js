/*===================================
Modal formulario nuevo Cliente
=====================================*/
function MNuevoCliente() {
    $("#modal-lg").modal("show");
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCliente/FNuevoCliente",
      data: obj,
      success: function (data) {
        $("#content-lg").html(data);
      },
    });
  }
  /*===================================
  Modal formulario nuevo Cliente
  =====================================*/
  function RegCliente() {
    var form = new FormData($("#FNuevoCliente")[0]);
  
    $.ajax({
      type: "POST",
      url: "CCliente/RegCliente",
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
          setTimeout(function(){
              location.reload()
            },1200)
      },
    });
  }