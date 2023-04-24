/*===================================
Modal formulario nuevo Cuenta
=====================================*/
function MNuevaCuenta() {
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CEfectivo/FNuevaCuenta",
    data: obj,
    success: function (data) {
      $("#content-default").html(data)
    }
  })
}
/*===================================
Modal formulario nuevo Cuenta
=====================================*/
function RegCuenta() {
  let form = new FormData($("#FNuevaCuenta")[0])

  $.ajax({
    type: "POST",
    url: "CEfectivo/RegCuenta",
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
      setTimeout(function () {
        location.reload()
      }, 1300)
    }
  })
}

/*===================================
Modal formulario VER Cuenta
=====================================*/
function MVerCuenta(id) {
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CCuenta/MVerCuenta/" + id,
    data: obj,
    success: function (data) {
      $("#content-default").html(data)

    }
  })
}
/*===================================
Modal formulario EDITAR Cuenta
=====================================*/
function MEditarCuenta(id) {
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CEfectivo/FEditCuenta/" + id,
    data: obj,
    success: function (data) {
      $("#content-default").html(data)
    }
  })
}
/*===================================
EDITAR nuevo Cuenta
=====================================*/
function EditCuenta(id) {
  let form = new FormData($("#FEditCuenta")[0])

  $.ajax({
    type: "POST",
    url: "CEfectivo/EditCuenta/" + id,
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

/*===================================
Modal formulario ELIMNAR Cuenta
=====================================*/
function MEliminarCuenta(id) {
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "CCuenta/FEliCuenta/" + id,
    data: obj,
    success: function (data) {
      $("#content-default").html(data)
    }
  })
}
/*===================================
ELIMINAR nuevo Cuenta
=====================================*/
function EliCuenta(id) {
  var obj = ""
  $.ajax({
    type: "POST",
    url: "CCuenta/EliCuenta/" + id,
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
/* =======================================
==============PARA CREDITOS ================
============================================ */

function MNuevoCredito() {
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "FNuevoCredito",
    data: obj,
    success: function (data) {
      $("#content-default").html(data)
      /* console.log(data); */
    }
  })
}
/*===================================
Modal formulario nuevo Cuenta
=====================================*/
function RegCredito() {
  let form = new FormData($("#FNuevoCredito")[0])

  $.ajax({
    type: "POST",
    url: "RegCredito",
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
      setTimeout(function () {
        location.reload()
      }, 1300)
    }
  })
}

/*===================================
Modal formulario EDITAR CREDITO
=====================================*/
function MEditarCredito(id) {
  $("#modal-default").modal("show")

  var obj = "";
  $.ajax({
    type: "POST",
    url: "FEditCredito/" + id,
    data: obj,
    success: function (data) {
      $("#content-default").html(data)
     /* console.log(data); */
    }
  })
}
/*===================================
EDITAR nuevo Cuenta
=====================================*/
function EditCredito(id) {
  let form = new FormData($("#FEditCredito")[0])

  $.ajax({
    type: "POST",
    url: "EditCredito/" + id,
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


