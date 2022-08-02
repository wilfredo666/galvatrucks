/*===================================
Modal formulario nuevo Conductor
=====================================*/
function MNuevoConductor() {
  $("#modal-lg").modal("show");

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CConductor/FNuevoConductor",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data);
    },
  });
}
/*===================================
Modal formulario nuevo Conductor
=====================================*/
function RegConductor() {
  var form = new FormData($("#FNuevoConductor")[0])

  $.ajax({
    type: "POST",
    url: "CConductor/RegConductor",
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
