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
    var form= new FormData($("#FNuevoEmpMaritima")[0])

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