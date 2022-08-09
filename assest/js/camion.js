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
    let form = new FormData($("#FNuevoCamion")[0])

    let placa=document.getElementById("placa").value
    let clase = document.getElementById("clase").selectedIndex;
    let capacidad = document.getElementById("capacidad").selectedIndex;

    if(!(/^\d{3,4}[-]\w{3}$/.test(placa))){
      document.getElementById("error-placa").innerHTML="Llene la placa en este formato: Ejm. '2452-DSE' "
    }
    else if(clase == null || clase == 0){
      document.getElementById("error-clase").innerHTML="Debes seleccionar una clase para este camión"
    }else if(capacidad == null || capacidad == 0){
      document.getElementById("error-capacidad").innerHTML="Seleccione la capacidad de carga para el camión"
    }

    else{
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
  }

  function MVerCamion(id){
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCamion/MVerCamion/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      
      }
    })
  }

  function MEditarCamion(id){
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCamion/FEditCamion/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      }
    })
  }

  function EditCamion(id){
    let form = new FormData($("#FEditCamion")[0])

    let placa=document.getElementById("placa").value
    let clase = document.getElementById("clase").selectedIndex;
    let capacidad = document.getElementById("capacidad").selectedIndex;

    if(!(/^\d{3,4}[-]\w{3}$/.test(placa))){
      document.getElementById("error-placa").innerHTML="Llene la placa en este formato: Ejm. '2452-DSE' "
    }
    else if(clase == null || clase == 0){
      document.getElementById("error-clase").innerHTML="Debes seleccionar una clase para este camión"
    }else if(capacidad == null || capacidad == 0){
      document.getElementById("error-capacidad").innerHTML="Seleccione la capacidad de carga para el camión"
    }

    else{
      $.ajax({
        type: "POST",
        url: "CCamion/EditCamion/"+id,
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
