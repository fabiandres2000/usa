$('#isesion').submit(function (ev) {
    $.ajax({
      type: $('#isesion').attr('method'), 
      url: $('#isesion').attr('action'),
      data: $('#isesion').serialize(),
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
            location.href = jsonData.ruta;
        }else{
          Swal.fire({
            position: 'center',
            icon: "error",
            title: jsonData.mensaje,
            showConfirmButton: false,
            timer: 2500
          });
        }
      } 
    });
    ev.preventDefault();
});