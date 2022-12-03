$('#form_init').submit(function (ev) {
  var email = document.getElementById("correo").value;
  if(verificarEmail(email) == 0){
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: "Debe utilizar el correo institucional.",
    });
  }else{
    $.ajax({
      type: $('#form_init').attr('method'), 
      url: $('#form_init').attr('action'),
      data: $('#form_init').serialize(),
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
           enviar_correo(jsonData.pass);
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

function enviar_correo(password){

  var correo = document.getElementById("correo").value;
  var nombre = document.getElementById("nombre").value;

  var formData = new FormData();
  formData.append('correo', correo);
  formData.append('nombre', nombre);
  formData.append('password', password);

  $.ajax({
    type: "post", 
    url: "../php/enviar_correo_registro.php",
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
          text: jsonData.mensaje+", su contraseña es: "+password,
        });
        document.getElementById("form_init").reset();
      }
    } 
  });
}

function verificarEmail(email){
  var email_separado = email.split("@");

  if(email_separado[1] == "usa.edu.co"){
    return 1;
  }else{
    return 1;
  }
}