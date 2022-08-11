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
  let rolUsuario = document.getElementById("rolUsuario").selectedIndex;

  if(nomUsuario == null || nomUsuario.length == 0){
    document.getElementById("error-nomUsuario").innerHTML="El campo usuario no puede estar vacio"
  }else if(loginUsuario == null || loginUsuario.length == 0){
    document.getElementById("error-loginUsuario").innerHTML="El campo login no puede estar vacio"
  }else if(rolUsuario == null || rolUsuario == 0){
    document.getElementById("error-rolUsuario").innerHTML="Debes seleccionar un ROL para este usuario"
  }
  
  else{
    
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
    }else{
      document.getElementById("error-password").innerHTML="Las contraseñas no coinciden"
    }
  }

}
/*===================================
Modal formulario Ver usuario
=====================================*/
function MVerUsuario(id){
  
   $("#modal-lg").modal("show");

  var obj=""
  $.ajax({
    type:"POST",
    url:"CUsuario/MVerUsuario/"+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}
/*===================================
Modal formulario Editar usuario
=====================================*/
function MEditarUsuario(id){
  $("#modal-lg").modal("show");

  var obj=""
  $.ajax({
    type:"POST",
    url:"CUsuario/FEditUsuario/"+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}
/*===================================
Modal formulario Editar usuario
=====================================*/
function EditUsuario(id){
  let pass_1=document.getElementById("password").value
  let pass_2=document.getElementById("password2").value

  let nomUsuario=document.getElementById("nomUsuario").value
  let loginUsuario=document.getElementById("loginUsuario").value
  let rolUsuario = document.getElementById("rolUsuario").selectedIndex;

  if(nomUsuario == null || nomUsuario.length == 0){
    document.getElementById("error-nomUsuario").innerHTML="El campo usuario no puede estar vacio"
  }else if(loginUsuario == null || loginUsuario.length == 0){
    document.getElementById("error-loginUsuario").innerHTML="El campo login no puede estar vacio"
  }else if(rolUsuario == null || rolUsuario == 0){
    document.getElementById("error-rolUsuario").innerHTML="Debes seleccionar un ROL para este usuario"
  }
  
  else{
    
    if(pass_1==pass_2){
      var form=new FormData($("#FEditUsuario")[0])

      $.ajax({
        type:"POST",
        url:"CUsuario/EditUsuario/"+id,
        data:form,
        cache:false,
        contentType:false,
        processData:false,
        success:function(data){
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
    }else{
      document.getElementById("error-password").innerHTML="Las contraseñas no coinciden"
    }
  }
}
/*===================================
Modal formulario ELIMINAR usuario
=====================================*/
function MEliminarUsuario(id){
  $("#modal-default").modal("show");

  var obj=""
  $.ajax({
    type:"POST",
    url:"CUsuario/FEliUsuario/"+id,
    data:obj,
    success:function(data){
      $("#content-default").html(data)
    }
  })
}
/*===================================
 ELIMINAR usuario
=====================================*/
function EliUsuario(id){
  var obj="";
  $.ajax({
    type:"POST",
    url:"CUsuario/EliUsuario/"+id,
    data:obj,
    cache:false,
    contentType:false,
    processData:false,
    success:function(data){
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