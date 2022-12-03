$('#registro_usuario_form').submit(function (ev) {
    var email = document.getElementById("correo_u").value;
    var opcion = document.getElementById("opcion").value;
    if(verificarEmail2(email) == 0){
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: "Debe utilizar el correo institucional.",
      });
    }else{
      $('#modalRegistro').modal('toggle');
      $.ajax({
        type: $('#registro_usuario_form').attr('method'), 
        url: $('#registro_usuario_form').attr('action'),
        data: $('#registro_usuario_form').serialize(),
        beforeSend: function(){
          let timerInterval
          Swal.fire({
            title: 'Validando datos',
            html: 'Espere un momento...',
            timer: 400000,
            timerProgressBar: true,
            allowOutsideClick: false,
            didOpen: () => {
              Swal.showLoading()
              const b = Swal.getHtmlContainer().querySelector('b')
              timerInterval = setInterval(() => {
               
              }, 100)
            },
            willClose: () => {
              clearInterval(timerInterval)
            }
          }).then((result) => {
            if (result.dismiss === Swal.DismissReason.timer) {
            }
          });          
        }, 
        success: function (data) { 
          var jsonData = JSON.parse(data);
          if(jsonData.success == 1){
            if(opcion == "guardar"){
              enviar_correo2(jsonData.pass);
            }else{
              setTimeout(()=>{
                  location.reload();
              },1500)
            }
          }else{
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: jsonData.mensaje,
            });
          }
        } 
      });
    }  
    ev.preventDefault();
});

$('#editar_usuario_form').submit(function (ev) {
  var email = document.getElementById("correo_u").value;
  var opcion = document.getElementById("opcion").value;
  if(verificarEmail2(email) == 0){
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: "Debe utilizar el correo institucional.",
    });
  }else{
    $('#modal_edit').modal('toggle');
    $.ajax({
      type: $('#editar_usuario_form').attr('method'), 
      url: $('#editar_usuario_form').attr('action'),
      data: $('#editar_usuario_form').serialize(),
      beforeSend: function(){
        let timerInterval
        Swal.fire({
          title: 'Validando datos',
          html: 'Espere un momento...',
          timer: 400000,
          timerProgressBar: true,
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
             
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          if (result.dismiss === Swal.DismissReason.timer) {
          }
        });          
      }, 
      success: function (data) { 
        var jsonData = JSON.parse(data);
        if(jsonData.success == 1){
          setTimeout(()=>{
            location.reload();
          },1500)    
        }else{
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: jsonData.mensaje,
          });
        }
      } 
    });
  }  
  ev.preventDefault();
});

function verificarEmail2(email){
    var email_separado = email.split("@");

    if(email_separado[1] == "usa.edu.co"){
        return 1;
    }else{
        return 1;
    }
}

function enviar_correo2(password){

    var correo = document.getElementById("correo_u").value;
    var nombre = document.getElementById("nombre_u").value;
  
    var formData = new FormData();
    formData.append('correo', correo);
    formData.append('nombre', nombre);
    formData.append('password', password);
  
    $.ajax({
      type: "post", 
      url: "../../php/enviar_correo_registro.php",
      data: formData,
      processData: false,
      contentType: false,
      cache: false,
      beforeSend: function(){
        let timerInterval
        Swal.fire({
          title: 'Enviando Correo de Confirmación',
          html: 'Espere un momento...',
          timer: 400000,
          timerProgressBar: true,
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
             
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          if (result.dismiss === Swal.DismissReason.timer) {
          }
        });          
      }, 
      success: function (data) { 
        var jsonData = JSON.parse(data);
        if(jsonData.success == 0){
          Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: jsonData.mensaje,
          });
        }else{
          Swal.fire({
            icon: 'success',
            title: 'Correcto...',
            text: jsonData.mensaje,
          });
          setTimeout(()=>{
            location.reload();
          },1500)
        }
      } 
    });
}