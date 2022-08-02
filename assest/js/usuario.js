/*===================================
Modal formulario nuevo usuario
=====================================*/
function MNuevoUsuario(){
  $("#modal-lg").modal("show");

  var obj=""
  $.ajax({
    type:"POST",
    url:"CUsuario/FNuevoUsuario",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

/*===================================
Modal formulario nuevo usuario
=====================================*/
function RegUsuario(){
  var pass_1=document.getElementById("password").value
  var pass_2=document.getElementById("password2").value

  if(pass_1==pass_2){
    var form=new FormData($("#FNuevoUsuario")[0])

    $.ajax({
      type:"POST",
      url:"CUsuario/RegUsuario",
      data:form,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){
        setTimeout(function(){
          location.reload()
        },1200)
      }
    })
  }else{
    document.getElementById("error-password").innerHTML="Las contraseñas no coinciden"

  }

}