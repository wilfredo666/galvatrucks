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
    let form = new FormData($("#FNuevoContratoCam")[0])

    let nomContrato=document.getElementById("nomContrato").value
    let placaCon=document.getElementById("placaCon").value
    let fechaIni=document.getElementById("fechaIni").value
  
    if(nomContrato == null || nomContrato.length == 0){
      document.getElementById("error-nomContrato").innerHTML="El campo Nombre del Cotrato no puede estar vacio"
    }
    else if(!(/^GALVA\-\d/g.test(nomContrato))){
      document.getElementById("error-nomContrato").innerHTML="Inicie con el prefijo: Ejm. 'GALVA-0001' "
    }
    else if(!(/^\d{3,4}[-]\w{3}$/.test(placaCon))){
      document.getElementById("error-placaCon").innerHTML="Llene la placa en este formato: Ejm. '2452-DSE' "
    }
    else if(fechaIni == null || fechaIni.length == 0){
      document.getElementById("error-fechaIni").innerHTML="Debe seleccionar una fecha de Incio de Contrato"
    }

    else{
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
  }

  function MVerContratoCam(id){
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CContratoCamion/MVerContratoCam/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      
      }
    })
  }
  