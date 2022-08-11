/*===================================
Modal formulario nuevo Empresa Maritima
=====================================*/
function MNuevoEmpMaritima(){
    $("#modal-default").modal("show");

    var obj="";
    $.ajax({
        type:"POST",
        url:"CEmpresaMaritima/FNuevoEmpMaritima",
        data:obj,
        success: function(data){
            $("#content-default").html(data)
        }
    })
}

/*===================================
Modal formulario REGISTRAR Empresa Maritima
=====================================*/
function RegEmpMaritima(){
    let form= new FormData($("#FNuevoEmpMaritima")[0])

    let razonSocial=document.getElementById("razonSocial").value
    let correoEmp=document.getElementById("correoEmp").value

    if(razonSocial == null || razonSocial.length == 0){
        document.getElementById("error-razonSocial").innerHTML="El campo Razon Social Naviera no puede estar vacio"
      }
    else if( !(/^[A-Z]{2,}/g.test(razonSocial))) {
        document.getElementById("error-razonSocial").innerHTML="Escriba en Mayúsculas: Ejem. 'ABC'"
      }
    else if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correoEmp))){
        document.getElementById("error-correoEmp").innerHTML="Llene el correo en este formato: Ejm. 'ejemplo@gmail.com' "
    }
    
    else{
        $.ajax({
            type:"POST",
            url:"CEmpresaMaritima/RegEmpMaritima",
            data:form,
            cache:false,
            contentType:false,
            processData:false,
            success: function(data){
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
Modal formulario VER Empresa Maritima
=====================================*/
function MVerEmpMaritima(id){
    $("#modal-default").modal("show")
  
    var obj = "";
    $.ajax({
      type: "POST",
      url: "CEmpresaMaritima/MVerEmpMaritima/"+id,
      data: obj,
      success: function (data) {
        $("#content-default").html(data)
      
      }
    })
  }
/*===================================
Modal formulario EDITAR Empresa Maritima
=====================================*/
  function MEditarEmpMaritima(id){
  $("#modal-default").modal("show");

    var obj="";
    $.ajax({
        type:"POST",
        url:"CEmpresaMaritima/FEditEmpMaritima/"+id,
        data:obj,
        success: function(data){
            $("#content-default").html(data)
        }
    })
  }
/*===================================
EDITAR Empresa Maritima
=====================================*/
  function EditEmpMaritima(id){
    let form= new FormData($("#FEditEmpMaritima")[0])

    let razonSocial=document.getElementById("razonSocial").value
    let correoEmp=document.getElementById("correoEmp").value

    if(razonSocial == null || razonSocial.length == 0){
        document.getElementById("error-razonSocial").innerHTML="El campo Razon Social Naviera no puede estar vacio"
      }
    else if( !(/^[A-Z]{2,}/g.test(razonSocial))) {
        document.getElementById("error-razonSocial").innerHTML="Escriba en Mayúsculas: Ejem. 'ABC'"
      }
    else if(!(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(correoEmp))){
        document.getElementById("error-correoEmp").innerHTML="Llene el correo en este formato: Ejm. 'ejemplo@gmail.com' "
    }
    
    else{
        $.ajax({
            type:"POST",
            url:"CEmpresaMaritima/EditEmpMaritima/"+id,
            data:form,
            cache:false,
            contentType:false,
            processData:false,
            success: function(data){
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
Modal formulario ELIMINAR Empresa Maritima
=====================================*/
  function MEliminarEmpMaritima(id){
    $("#modal-default").modal("show");

    var obj="";
    $.ajax({
        type:"POST",
        url:"CEmpresaMaritima/FEliEmpMaritima/"+id,
        data:obj,
        success: function(data){
            $("#content-default").html(data)
        }
    })
  }
/*===================================
ELIMINAR Empresa Maritima
=====================================*/
  function EliEmpMaritima(id){
    var obj="";
    $.ajax({
      type:"POST",
      url:"CEmpresaMaritima/EliEmpMaritima/"+id,
      data:obj,
      cache:false,
      contentType:false,
      processData:false,
      success: function(data){
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