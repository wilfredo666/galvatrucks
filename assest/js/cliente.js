/*===================================
Modal formulario nuevo Cliente
=====================================*/
function MNuevoCliente() {
    $("#modal-lg").modal("show");
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCliente/FNuevoCliente",
      data: obj,
      success: function (data) {
        $("#content-lg").html(data);
      },
    });
  }
  /*===================================
  Modal formulario nuevo Cliente
  =====================================*/
  function RegCliente() {
    let form = new FormData($("#FNuevoCliente")[0])

    let razonSocial=document.getElementById("razonSocial").value
    let tipoCli = document.getElementById("tipoCli").selectedIndex;
    let contactoCli=document.getElementById("contactoCli").value
    let correoCli=document.getElementById("correoCli").value
    let nit=document.getElementById("nit").value
    
    if(razonSocial == null || razonSocial.length == 0){
      document.getElementById("error-razonSocial").innerHTML="El campo Razón Social no puede estar vacio"
    }
    else if(nit == null || nit == 0){
      document.getElementById("error-nit").innerHTML="Debe Introducir en Número de NIT"
    }
    else if(tipoCli == null || tipoCli == 0){
      document.getElementById("error-tipoCli").innerHTML="Seleccionar el tipo"
    }
    else if(contactoCli == null || contactoCli.length == 0){
      document.getElementById("error-contactoCli").innerHTML="Digite un número de contacto"
    }
    else if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correoCli))){
      document.getElementById("error-correoCli").innerHTML="Llene el correo en este formato: Ejm. 'ejemplo@gmail.com' "
  }

    else{
      $.ajax({
        type: "POST",
        url: "CCliente/RegCliente",
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
  Modal formulario VER Cliente
  =====================================*/
  function MVerCliente(id){
    $("#modal-lg").modal("show")

    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCliente/MVerCliente/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data)
      
      }
    })
  }
  /*===================================
  Modal formulario EDITAR Cliente
  =====================================*/
  function MEditarCliente(id){
    $("#modal-lg").modal("show");
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCliente/FEditCliente/"+id,
      data: obj,
      success: function (data) {
        $("#content-lg").html(data);
      },
    });
  }
  /*===================================
  Modal formulario EDITAR Cliente
  =====================================*/
  function EditCliente(id){
    let form = new FormData($("#FEditCliente")[0])

    let razonSocial=document.getElementById("razonSocial").value
    let tipoCli = document.getElementById("tipoCli").selectedIndex;
    let contactoCli=document.getElementById("contactoCli").value
    let correoCli=document.getElementById("correoCli").value
    
    if(razonSocial == null || razonSocial.length == 0){
      document.getElementById("error-razonSocial").innerHTML="El campo Razón Social no puede estar vacio"
    }
    else if(tipoCli == null || tipoCli == 0){
      document.getElementById("error-tipoCli").innerHTML="Seleccionar el tipo"
    }
    else if(contactoCli == null || contactoCli.length == 0){
      document.getElementById("error-contactoCli").innerHTML="Digite un número de contacto"
    }
    else if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correoCli))){
      document.getElementById("error-correoCli").innerHTML="Llene el correo en este formato: Ejm. 'ejemplo@gmail.com' "
  }

    else{
      $.ajax({
        type: "POST",
        url: "CCliente/EditCliente/"+id,
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
  Modal formulario ELIMINAR Cliente
  =====================================*/
  function MEliminarCliente(id){
    $("#modal-default").modal("show");
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCliente/FEliCliente/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data);
      },
    });
  }
 /*===================================
  ELIMINAR Cliente
  =====================================*/
  function EliCliente(id){
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CCliente/EliCliente/"+id,
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
  REPORTE POR CADA CLIENTE
  =====================================*/
  function reporteCliente(){
    let formulario = new FormData($("#ReporteCliente")[0])

    $.ajax({
      type: "POST",
      url: "repCliente",
      data: formulario,
      cache: false,
      contentType: false,
      processData: false,
      success: function(data){
        console.log("llegaste al ajax")
       /*  $("#reporte_ciente").html(data) */
      }
    })
  }
   /*===================================
  ACTUALIZAR PERFIL DEL CLIENTE
  =====================================*/
 
    function ActualizarCli(id) {
      let pass1 = document.getElementById("password").value
      let pass2 = document.getElementById("password2").value
      let correoCli = document.getElementById("correoCli").value

      if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correoCli))){
        document.getElementById("error-correoCli").innerHTML="Llene el correo en este formato: Ejm. 'ejemplo@gmail.com' "
      }
      else if (pass1 == pass2) {
        let form = new FormData($("#actualizarDatosCli")[0])

      $.ajax({
        type: "POST",
        url: "ActualizarCli/"+id,
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
          Swal.fire({
            title: 'Datos Actualizados',
            icon: 'success',
            showConfirmButton: false,
            timer: 1000
          })
          setTimeout(function(){
              location.reload()
            },1200)
      
        }
      })
    }  else {
      document.getElementById("error-password").innerHTML = "Las contraseñas no coinciden"
      document.getElementById("error-password2").innerHTML = "Las contraseñas no coinciden"
    }
  } 
