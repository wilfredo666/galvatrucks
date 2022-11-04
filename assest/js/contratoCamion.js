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

  /*     let nomContrato=document.getElementById("nomContrato").value */
  let propietario = document.getElementById("propietario").value
  let placaCon = document.getElementById("placaCon").value
  let fechaIni = document.getElementById("fechaIni").value

  /* if(nomContrato == null || nomContrato.length == 0){
    document.getElementById("error-nomContrato").innerHTML="El campo Nombre del Cotrato no puede estar vacio"
  }
  else if(!(/^GALVA\-\d/g.test(nomContrato))){
    document.getElementById("error-nomContrato").innerHTML="Inicie con el prefijo: Ejm. 'GALVA-0001' "
  }
  else */
  if (propietario == null || propietario.length == 0) {
    document.getElementById("error-propietario").innerHTML = "El campo propietario no puede estar vacío..!!"
  }
  else if (!(/^[a-zA-Z0-9\_\-\.\:\s]{4,60}$/.test(propietario))) {
    document.getElementById("error-propietario").innerHTML = "El campo no puede tener caracteres especiales: Utilice combinaciones de letras y numeros 'Ej: JUAN CEl-788541' "
  }
  else if (!(/^\d{3,4}[-]\w{3}$/.test(placaCon))) {
    document.getElementById("error-placaCon").innerHTML = "Llene la placa en este formato: Ejm. '2452-DSE' "
  } else if (fechaIni == null || fechaIni == 0) {
    document.getElementById("error-fechaIni").innerHTML = "Seleccione la fecha de contrato"
  }

  else {
    $.ajax({
      type: "POST",
      url: "CContratoCamion/RegContratoCam",
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
        setTimeout(function () {
          location.reload()
        }, 1200)
      }
    })
  }
}
/*===================================
Modal formulario VER Contrato de Camion
=====================================*/
function MVerContratoCam(id) {
  $("#modal-lg").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CContratoCamion/MVerContratoCam/" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)

    }
  })
}
/*===================================
Modal formulario EDITAR Contrato de Camion
=====================================*/
function MEditarContratoCam(id) {
  $("#modal-lg").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CContratoCamion/FEditContratoCam/" + id,
    data: obj,
    success: function (data) {
      $("#content-lg").html(data)
    }
  })
}
/*===================================
EDITAR Contrato de Camion
=====================================*/
function EditContratoCam(id) {
  let form = new FormData($("#FEditContratoCam")[0])

  /*     let nomContrato=document.getElementById("nomContrato").value */
  let propietario = document.getElementById("propietario").value
  let placaCon = document.getElementById("placaCon").value
  let fechaIni = document.getElementById("fechaIni").value

  /* if(nomContrato == null || nomContrato.length == 0){
    document.getElementById("error-nomContrato").innerHTML="El campo Nombre del Cotrato no puede estar vacio"
  }
  else if(!(/^GALVA\-\d/g.test(nomContrato))){
    document.getElementById("error-nomContrato").innerHTML="Inicie con el prefijo: Ejm. 'GALVA-0001' "
  }
  else */
  if (propietario == null || propietario.length == 0) {
    document.getElementById("error-propietario").innerHTML = "El campo propietario no puede estar vacío..!!"
  }
  else if (!(/^[a-zA-Z0-9\_\-\.\:\s]{4,60}$/.test(propietario))) {
    document.getElementById("error-propietario").innerHTML = "El campo no puede tener caracteres especiales: Utilice combinaciones de letras y numeros 'Ej: JUAN CEl-788541' "
  }
  else if (!(/^\d{3,4}[-]\w{3}$/.test(placaCon))) {
    document.getElementById("error-placaCon").innerHTML = "Llene la placa en este formato: Ejm. '2452-DSE' "
  } else if (fechaIni == null || fechaIni == 0) {
    document.getElementById("error-fechaIni").innerHTML = "Seleccione la fecha de contrato"
  }

  else {
    $.ajax({
      type: "POST",
      url: "CContratoCamion/EditContratoCam/" + id,
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
        setTimeout(function () {
          location.reload()
        }, 1200)
      }
    })
  }
}
/*===================================
Modal formulario ELIMINAR Contrato de Camion
=====================================*/
function MEliminarContratoCam(id) {
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CContratoCamion/FEliContratoCam/" + id,
    data: obj,
    success: function (data) {
      $("#content-default").html(data)
    }
  })
}
/*===================================
ELIMINAR Contrato de Camion
=====================================*/
function EliContratoCam(id) {
  var obj = "";
  $.ajax({
    type: "POST",
    url: "CContratoCamion/EliContratoCam/" + id,
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
      setTimeout(function () {
        location.reload()
      }, 1200)
    }
  })
}

function codigoContrato() {
  let placaCon = document.getElementById("placaCon").value
  let propietario = document.getElementById("propietario").value

  let arrayPropietario = propietario.split(" ")
  let nombre = arrayPropietario[0] + " " + arrayPropietario[1]
  /* let placa=placaCon.options[placaCon.selectedIndex].text */

  /*   const fill = (number, len) =>
    "0".repeat(len - number.toString().length) + number.toString(); */

  let codCon = nombre + "_" + placaCon
  /* console.log(codAsig) */
  document.getElementById("nomContrato").value = codCon

}