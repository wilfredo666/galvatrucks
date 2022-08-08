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
               setTimeout(function(){
                   location.reload()
               },1200)
            }
        })
    }   
}

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