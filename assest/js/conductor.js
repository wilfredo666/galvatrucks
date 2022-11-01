/*===================================
Modal formulario nuevo Conductor
=====================================*/
function MNuevoConductor() {
  $("#modal-lg").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CConductor/FNuevoConductor",
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}
/*===================================
Modal formulario nuevo Conductor
=====================================*/
function RegConductor() {
  let form = new FormData($("#FNuevoConductor")[0])

  let nomConductor=document.getElementById("nomConductor").value
  let correoCond=document.getElementById("correoCond").value
  let categoria = document.getElementById("categoria").selectedIndex;
  let contactoCond=document.getElementById("contactoCond").value

  if(nomConductor == null || nomConductor.length == 0){
    document.getElementById("error-nomConductor").innerHTML="El campo Nombre Conductor no puede estar vacio"
  }
  else if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correoCond))){
    document.getElementById("error-correoCond").innerHTML="Llene el correo en este formato: Ejm. 'ejemplo@gmail.com' "
  }
  if(contactoCond == null || contactoCond.length == 0){
    document.getElementById("error-contactoCond").innerHTML="Digite un número de contacto"
  }
  else if(categoria == null || categoria == 0){
    document.getElementById("error-categoria").innerHTML="Seleccione la categoria de su Licencia"
  }

  else{
    $.ajax({
      type: "POST",
      url: "CConductor/RegConductor",
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
}
/*===================================
Modal formulario VER Conductor
=====================================*/
function MVerConductor(id){
  $("#modal-lg").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CConductor/MVerConductor/"+id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)

    }
  })
}
/*===================================
Modal formulario EDITAR Conductor
=====================================*/
function MEditarConductor(id){
  $("#modal-lg").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CConductor/FEditConductor/"+id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}
/*===================================
EDITAR  Conductor
=====================================*/
function EditConductor(id){
  let form = new FormData($("#FEditConductor")[0])

  let nomConductor=document.getElementById("nomConductor").value
  let correoCond=document.getElementById("correoCond").value
  let categoria = document.getElementById("categoria").selectedIndex;
  let contactoCond=document.getElementById("contactoCond").value

  if(nomConductor == null || nomConductor.length == 0){
    document.getElementById("error-nomConductor").innerHTML="El campo Nombre Conductor no puede estar vacio"
  }
  else if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correoCond))){
    document.getElementById("error-correoCond").innerHTML="Llene el correo en este formato: Ejm. 'ejemplo@gmail.com' "
  }
  if(contactoCond == null || contactoCond.length == 0){
    document.getElementById("error-contactoCond").innerHTML="Digite un número de contacto"
  }
  else if(categoria == null || categoria == 0){
    document.getElementById("error-categoria").innerHTML="Seleccione la categoria de su Licencia"
  }

  else{
    $.ajax({
      type: "POST",
      url: "CConductor/EditConductor/"+id,
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
Modal formulario ELIMINAR Conductor
=====================================*/
function MEliminarConductor(id){
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CConductor/FEliConductor/"+id,
    data: obj,
    success: function (data) {
      $("#content-default").html(data)
    }
  })
}
/*===================================
ELIMINAR Conductor
=====================================*/
function EliConductor(id){
  var obj=""
  $.ajax({
    type: "POST",
    url: "CConductor/EliConductor/"+id,
    data: obj,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      
      Swal.fire({
        title: 'Registro eliminado',
        icon: 'success',
        showConfirmButton: false,
        timer:1000
      })
      
      setTimeout(function(){
        location.reload()
      },1200)
    }
  })
}

function reporteConductor(){

  let form = new FormData($("#ReporteConductor")[0])

  $.ajax({
    type: "POST",
    url: "reporteCond",
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      $("#repServConductor").html(data)
    }
  })
}
