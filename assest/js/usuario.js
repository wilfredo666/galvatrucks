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
  let pass_1=document.getElementById("password").value
  let pass_2=document.getElementById("password2").value

  let nomUsuario=document.getElementById("nomUsuario").value
  let loginUsuario=document.getElementById("loginUsuario").value

  if(nomUsuario == null || nomUsuario.length == 0){
    document.getElementById("error-nomUsuario").innerHTML="El campo usuario no puede estar vacio"
  }else if(loginUsuario == null || loginUsuario.length == 0){
    document.getElementById("error-loginUsuario").innerHTML="El campo login no puede estar vacio"
  }else{
    
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

}