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

    let cliente = document.getElementById("servCliente").selectedIndex;
    let idSolicitud = document.getElementById("idSolicitud").selectedIndex;
    let ruta = document.getElementById("ruta").selectedIndex;

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
    if(idSolicitud == null || idSolicitud == 0){
      document.getElementById("error-solicitud").innerHTML="Selecciona la solicitud de servicio"
    }
    else if(cliente == null || cliente == 0){
      document.getElementById("error-cliente").innerHTML="Seleccione el cliente"
    } 
    else if(ruta == null || ruta == 0){
      document.getElementById("error-ruta").innerHTML="Selecciona una ruta para este servicio"
    }else{
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
         /*  console.log(data); */
        }
      })
    }
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
        /* console.log(data) */
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
          /* console.log(data) */
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
  }else{
    document.getElementById("contratoCam").disabled=false
  }
  
  if(contrato != 0){
    document.getElementById("conductorAsig").disabled=true
  }else{
     document.getElementById("conductorAsig").disabled=false
  } 
}
/*===========================================================
    Seguimiento y actualizacion de contenedor del cliente 
               por parte del ADMINISTRADOR
==========================================================*/
function MovimientoContenedor(id){
  $("#modal-lg").modal("show")

    var obj = "";
    $.ajax({
      type: "POST",
      url: "FNuevoMovimiento/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      }
    })
}
/* PARA BUSCAR O RASTREAR UN CONTENEDOR */
function buscarContenedor(){
  let numContenedor = document.getElementById("numContenedor").value
  var obj = "";
    $.ajax({
      type: "POST",
      url: "FBuscarMovimiento/"+numContenedor,
      data: obj,
      success: function (data) {
         /* console.log(data) */
        $("#LlenarContenedor").html(data)
      }
    })
}
/*PARA REGISTRAR EL MOVIMIENTO DE CONTENEDOR */
function RegMovimiento(id){
  let form = new FormData($("#FNuevoMovimiento")[0])
  let fecha = document.getElementById("fechaHora").value;
  let ubicacionCont=document.getElementById("ubicacionCont").value;
  
    if(fecha == null || fecha == 0){
      document.getElementById("error-fecha").innerHTML="Seleccione la fecha de movimiento"
    }else if(ubicacionCont == null || ubicacionCont == 0){
      document.getElementById("error-ubicacion").innerHTML="Debe registrar la ubicación del contenedor"
    }
    else{ 
     $.ajax({
       type: "POST",
       url: "RegMovimiento/"+id,
       data: form,
       cache: false,
       contentType: false,
       processData: false,
       success: function (data) {
         /* console.log(data) */
         Swal.fire({
           title: 'Movimiento Registrado',
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
/*EDITAR MOVIMIENTO */
function MEditarMovimiento(id){
  $("#modal-lg").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "FEditMovimiento/"+id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}
function EditMovimiento(id){
  let form = new FormData($("#FEditMovimiento")[0])
  /* let fecha = document.getElementById("fechaHora").value; */
  let ubicacionCont=document.getElementById("ubicacionCont").value;
  
    if(ubicacionCont == null || ubicacionCont == 0){
      document.getElementById("error-ubicacion").innerHTML="Debe registrar la ubicación del contenedor"
    }
  else{
    $.ajax({
      type: "POST",
      url: "EditMovimiento/"+id,
      data: form,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
        /* console.log(data) */
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
/*FUNCION PARA ELIMINAR EL MOVIMIENTO */
function MEliminarMovimiento(id){
  $("#modal-default").modal("show");
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "FEliMovimiento/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data);
      },
    });
}
function EliMovimiento(id){
  var obj = "";
    $.ajax({
      type: "POST",
      url: "EliMovimiento/"+id,
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
/* ================================
FUNCION PARA BUSCAR BILL PARA REPORTES
====================================*/
function buscarBL(){
  let nroBill = document.getElementById("nroBill").value
  var obj = "";
    $.ajax({
      type: "POST",
      url: "FBuscarBL/"+nroBill,
      data: obj,
      success: function (data) {
         /* console.log(data) */
        $("#contenido").html(data)
      }
    })
}
function FNotaDebito(id){
  var obj = "";
  $.ajax({
    type: "POST",
    url: "GeneraNotaDebito/"+id,
    data: obj,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
        console.log(data)
    }
  })
}
