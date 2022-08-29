/*===================================
Modal formulario nuevo Camion
=====================================*/
function MNuevoServicio(){
    $("#modal-xl").modal("show")
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CServicio/FNuevoServicio",
      data: obj,
      success: function (data) {
        $("#content-xl").html(data)
      }
    })
}
  /*===================================
  Modal formulario nuevo SERVICIO
  =====================================*/
  function RegServicio() {

    let form = new FormData($("#FNuevoServicio")[0])
   /*  let form1 = new FormData($("#FNuevoServicio1")[0])
    let form2 = new FormData($("#FNuevoServicio2")[0])
    let form3 = new FormData($("#FNuevoServicio3")[0]) */

 /*    let placa=document.getElementById("placa").value
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
        url: "CServicio/RegServicio",
        data: form,
    /*     data: form1,form2,form3, */
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
Modal formulario VER SERVICIO
=====================================*/
  function MVerServicio(id){
    $("#modal-xl").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CServicio/MVerServicio/"+id,
      data: obj,
      success: function (data) {
        $("#content-xl").html(data)
      
      }
    })
  }
/*===================================
Modal formulario EDITAR SERVICIO
=====================================*/
  function MEditarServicio(id){
    $("#modal-xl").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CServicio/FEditServicio/"+id,
      data: obj,
      success: function (data) {
        $("#content-xl").html(data)
      }
    })
  }
/*===================================
EDITAR nuevo SERVICIO
=====================================*/
  function EditServicio(id){
    let form = new FormData($("#FEditServicio")[0])

   /*  let placa=document.getElementById("placa").value
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

    else{  */
      $.ajax({
        type: "POST",
        url: "CServicio/EditServicio/"+id,
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
Modal formulario ELIMNAR SERVICIO
=====================================*/
  function MEliminarServicio(id){
    $("#modal-default").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CServicio/FEliServicio/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      }
    })
  }
/*===================================
ELIMINAR nuevo Camion
=====================================*/
function EliServicio(id){
 var obj= ""
    $.ajax({
      type: "POST",
      url: "CServicio/EliServicio/"+id,
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
/*===================================
Seleccion de Contrato O Asignación
=====================================*/
function SeleccionServicio(){
  let asignacion = document.getElementById("conductorAsig").value
  let contrato = document.getElementById("contratoCam").value

  if(asignacion != 0){
    document.getElementById("contratoCam").disabled=true
   /*  document.getElementById("contratoCam").value="" */
  } 
  if(contrato != 0){
    document.getElementById("conductorAsig").disabled=true
    document.getElementById("contratoCam").disabled=false
  } 
}
