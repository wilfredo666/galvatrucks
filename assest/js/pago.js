/* ================================
FUNCION PARA AÑADIR MODAL DE PAGO
====================================*/
function FAnadirPago(id){
    $("#modal-default").modal("show");
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CAnadirPago/"+id,
      data: obj,
      success: function (data) {
        /* console.log(data) */
        $("#content-default").html(data);
      },
    });
}
/* ================================
FUNCION PARA REGISTRAR EL PAGO
====================================*/
function RegPago(){
    let form = new FormData($("#FNuevoPago")[0])
    $.ajax({
        type: "POST",
        url: "RegPago",
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
            /* setTimeout(function(){
                location.reload()
              },1200) */
              $("#modal-default").modal("hide")
              buscarBill()
         /*  console.log(data); */
        }
      })
}
/* ================================
FUNCION PARA BUSCAR BILL
====================================*/
function buscarBill(){
    let nroBill = document.getElementById("nroBill").value
    var obj = "";
      $.ajax({
        type: "POST",
        url: "FBuscarBill/"+nroBill,
        data: obj,
        success: function (data) {
           /* console.log(data) */
          $("#contenido").html(data)
        }
      })
}
/* ================================
FUNCION PARA EDITAR EL PAGO
====================================*/
function MEditarPago(id){
    $("#modal-default").modal("show")

    var obj = "";
    $.ajax({
      type: "POST",
      url: "FEditPago/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
        /* console.log(data) */
      }
    })
}
function EditPago(id){
    let form = new FormData($("#FEditPago")[0])
    $.ajax({
        type: "POST",
        url: "EditPago/"+id,
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
/* ================================
FUNCION PARA ELIMINAR EL PAGO
====================================*/
function MEliminarPago(id){
    $("#modal-default").modal("show");
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "FEliPago/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data);
      },
    });
}
function EliPago(id){
    
    var obj = "";
    $.ajax({
      type: "POST",
      url: "EliPago/"+id,
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