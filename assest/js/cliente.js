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
        url: "CCliente/RegCliente",
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            setTimeout(function(){
                location.reload()
              },1200)
        }
      })
    }  
  }

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
            setTimeout(function(){
                location.reload()
              },1200)
        }
      })
    }  
  }
