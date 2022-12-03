$('#form_cambio_pass').submit(function (ev) {
    $.ajax({
    type: $('#form_cambio_pass').attr('method'), 
    url: $('#form_cambio_pass').attr('action'),
    data: $('#form_cambio_pass').serialize(),
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
        }
    } 
    });
    ev.preventDefault();
  });