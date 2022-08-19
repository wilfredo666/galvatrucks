/*===================================
Modal formulario nuevo Asignacion
=====================================*/
function MNuevoAsignacion() {
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CAsignacion/FNuevoAsignacion",
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      }
    })
  }
  /*===================================
  Modal formulario nuevo Asignacion
  =====================================*/
  function RegAsignacion() {
    let form = new FormData($("#FNuevoAsignacion")[0])

    let asignacion=document.getElementById("asignacion").value
    /* let clase = document.getElementById("clase").selectedIndex;
    let capacidad = document.getElementById("capacidad").selectedIndex; */

    if(!(/^Asig\-\w{4}$/.test(asignacion))){
      document.getElementById("error-asignacion").innerHTML="Llene la placa en este formato: Ejm. 'Asig-0001' "
    }
    /* else if(clase == null || clase == 0){
      document.getElementById("error-clase").innerHTML="Debes seleccionar una clase para este camión"
    }else if(capacidad == null || capacidad == 0){
      document.getElementById("error-capacidad").innerHTML="Seleccione la capacidad de carga para el camión"
    } */

    else{
      $.ajax({
        type: "POST",
        url: "CAsignacion/RegAsignacion",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
          Swal.fire({
            title: 'Registro Exitoso',
            icon: 'success',
            showConfirmButton: false,
            timer: 1100
          })
            setTimeout(function(){
                location.reload()
              },1300)
        }
      })
    }
  }
/*===================================
Modal formulario VER Asignacion
=====================================*/
  function MVerAsignacion(id){
    $("#modal-default").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CAsignacion/MVerAsignacion/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      
      }
    })
  }
/*===================================
Modal formulario EDITAR Asignacion
=====================================*/
  function MEditarAsignacion(id){
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CAsignacion/FEditAsignacion/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      }
    })
  }
/*===================================
EDITAR nuevo Asignacion
=====================================*/
  function EditAsignacion(id){
    let form = new FormData($("#FEditAsignacion")[0])

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
        url: "CAsignacion/EditAsignacion/"+id,
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
          Swal.fire({
            title: 'Registro Actualizado',
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
          })
            setTimeout(function(){
                location.reload()
              },1200)
        }
      })
    }
  }
/*===================================
Modal formulario ELIMNAR Asignacion
=====================================*/
  function MEliminarAsignacion(id){
    $("#modal-default").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CAsignacion/FEliAsignacion/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      }
    })
  }
/*===================================
ELIMINAR nuevo Asignacion
=====================================*/
function EliAsignacion(id){
 var obj= ""
    $.ajax({
      type: "POST",
      url: "CAsignacion/EliAsignacion/"+id,
      data: obj,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
          /*swit alerts */
        Swal.fire({
          title: 'Registro Eliminado',
          icon: 'success',
          showConfirmButton: false,
          timer: 1000
        })
          setTimeout(function(){
              location.reload()
            },1200)
      }
    })
}