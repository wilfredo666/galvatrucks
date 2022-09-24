/* ==========================================
MODAL PARA FORMULARIO NUEVA SOLICITUD SERVICIO
=============================================*/
function MNuevoSolicitud(){
    $("#modal-lg").modal("show")
    var obj="";
    $.ajax({
        type: "POST",
        url: "CSolicitudServicio/FNuevoServicio",
        data: obj,
        success: function (data){
            $("#content-lg").html(data)
            /* console.log(data) */
        }
    })
}

function RegSolicitud(){
    let form = new FormData($("#FNuevoSolicitud")[0])

    let numBl = document.getElementById("numBill").value
    let navieras = document.getElementById("naviera").selectedIndex;
    let fechaSol = document.getElementById("fechaSolicitud").value
    let docPdf = document.getElementById("docBill").value

    if(numBl == null || numBl.length == 0){
        document.getElementById("error-numBill").innerHTML="El campo Numero de BL no puede estar vacío"
    } 
    else if(navieras == null || navieras == 0){
        document.getElementById("error-naviera").innerHTML="Selecciona la naviera, con la que está importando"
    }
    else if(fechaSol == null || fechaSol.length == 0){
        document.getElementById("error-fecha").innerHTML="Selecciona la fecha de solicitud..!!!"
    } 
    else if(docPdf == null || docPdf.length == 0){
        document.getElementById("error-doc").innerHTML="Debe subir el BL en formato digital PDF"
    } 
    
    else{
    $.ajax({
        type: "POST",
        url: "CSolicitudServicio/RegSolicitud",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            /* console.log(data) */
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
/* ==========================================
FUNCION PARA FORMULARIO DE EDICIÓN DE SOLICITUD SERVICIO
=============================================*/
function MEditarSolicitud(id){
    $("#modal-lg").modal("show")

    var obj = "";
    $.ajax({
        type: "POST",
        url: "CSolicitudServicio/FEditSolicitud/"+id,
        data: obj,
        success: function(data){
            $("#content-lg").html(data)
            /* console.log(data) */
        }
    })
}

function EditSolicitud(id){
    let form = new FormData($("#FEditSolicitud")[0])

    let numBl = document.getElementById("numBill").value
    let navieras = document.getElementById("naviera").selectedIndex;
    let fechaSol = document.getElementById("fechaSolicitud").value
    let docPdf = document.getElementById("docBill").value

    if(numBl == null || numBl.length == 0){
        document.getElementById("error-numBill").innerHTML="El campo Numero de BL no puede estar vacío"
    } 
    else if(navieras == null || navieras == 0){
        document.getElementById("error-naviera").innerHTML="Selecciona la naviera, con la que está importando"
    }
    else if(fechaSol == null || fechaSol.length == 0){
        document.getElementById("error-fecha").innerHTML="Selecciona la fecha de solicitud..!!!"
    } 
    
    else{
    $.ajax({
        type: "POST",
        url: "CSolicitudServicio/EditSolicitud/"+id,
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
            /* console.log(data) */
            Swal.fire({
                title: 'Solicitud Actualizada',
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
/* ==========================================
FUNCION PARA ELIMINAR SOLICITUD SERVICIO
=============================================*/
function MEliminarSolicitud(id){
    $("#modal-default").modal("show")

    var obj = "";
    $.ajax({
      type: "POST",
      url: "CSolicitudServicio/FEliSolicitud/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      }
    })
}

function EliSolicitud(id){
    var obj=""
    $.ajax({
      type: "POST",
      url: "CSolicitudServicio/EliSolicitud/"+id,
      data: obj,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
        
        Swal.fire({
          title: 'Solicitud eliminada',
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
/* ==========================================
FUNCION PARA MOSTRAR REPORTE SOLICITUDES
=============================================*/
function reporteSolicitudes(){
    let form = new FormData($("#ReporteSolicitud")[0])

    $.ajax({
        type: "POST",
        url: "soliServicio",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
          $("#repServConductor").html(data)
          /* console.log(data) */
        }
      })
}