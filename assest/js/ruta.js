/*===================================
Modal formulario nuevo ruta
=====================================*/
function MNuevoRuta() {
    $("#modal-default").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CRuta/FNuevoRuta",
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      }
    })
  }
  /*===================================
  Modal formulario nuevo ruta
  =====================================*/
  function RegRuta() {
    let form = new FormData($("#FNuevoRuta")[0])

/*     let placa=document.getElementById("placa").value
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

    else{ */
      $.ajax({
        type: "POST",
        url: "CRuta/RegRuta",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
          Swal.fire({
            title: 'Registro Exitoso',
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
/*===================================
Modal formulario VER ruta
=====================================*/
  function MVerRuta(id){
    $("#modal-lg").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "Cruta/MVerRuta/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      
      }
    })
  }
/*===================================
Modal formulario EDITAR ruta
=====================================*/
  function MEditarRuta(id){
    $("#modal-default").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CRuta/FEditRuta/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      }
    })
  }
/*===================================
EDITAR nuevo ruta
=====================================*/
  function EditRuta(id){
    let form = new FormData($("#FEditRuta")[0])
/* 
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

    else{ */
      $.ajax({
        type: "POST",
        url: "CRuta/EditRuta/"+id,
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
/*===================================
Modal formulario ELIMNAR ruta
=====================================*/
  function MEliminarRuta(id){
    $("#modal-default").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CRuta/FEliRuta/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      }
    })
  }
/*===================================
ELIMINAR nuevo ruta
=====================================*/
function EliRuta(id){
 var obj= ""
    $.ajax({
      type: "POST",
      url: "CRuta/EliRuta/"+id,
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