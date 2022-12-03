$('#form_registro_practica').submit(function (ev) {
    var f = $(this);
    var formData = new FormData(document.getElementById("form_registro_practica"));
   
    var files = $('#excel_1_R')[0].files;
    var files2 = $('#excel_2_R')[0].files;
    var files3 = $('#proyecto')[0].files;
    // Check file selected or not
    if(files.length > 0 ){
        formData.append('excel_1',files[0]);
    }

    if(files2.length > 0 ){
        formData.append('excel_2',files2[0]);
    }

    if(files3.length > 0 ){
        formData.append('proyecto',files3[0]);
    }

    $.ajax({
        type: $('#form_registro_practica').attr('method'), 
        url: $('#form_registro_practica').attr('action'),
        data: formData ,
        processData: false,
        contentType: false,
        cache: false,
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
                if (result.dismiss === Swal.DismissReason.timer) {}
            });          
        }, 
        success: function (data) { 
            var jsonData = JSON.parse(data);
            if(jsonData.success == 1){
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

                document.getElementById("form_registro_practica").reset();
                setTimeout(()=>{
                    location.reload();
                },1500)
            }
        } 
    });

    ev.preventDefault();
});
  

$('#observaciones_practica').submit(function (ev) {

    var formData = new FormData(document.getElementById("observaciones_practica"));

    var files = $('#archivo_coregido')[0].files;
    if(files.length > 0 ){
        formData.append('archivo_coregido',files[0]);
    }

    $.ajax({
        type: $('#observaciones_practica').attr('method'), 
        url: $('#observaciones_practica').attr('action'),
        data: formData ,
        processData: false,
        contentType: false,
        cache: false,
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
                if (result.dismiss === Swal.DismissReason.timer) {}
            });          
        }, 
        success: function (data) { 
            $('#exampleModal').modal('toggle');
            var jsonData = JSON.parse(data);
            if(jsonData.success == 1){
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

                document.getElementById("observaciones_practica").reset();
                setTimeout(()=>{
                    location.reload();
                },1500)
            }
        } 
    });

    ev.preventDefault();
});

$('#editar_practica_form').submit(function (ev) {
    var f = $(this);
    var formData = new FormData(document.getElementById("editar_practica_form"));
   
    var files = $('#excel_1_e')[0].files;
    var files2 = $('#excel_2_e')[0].files;
    var files3 = $('#proyecto_e')[0].files;
    // Check file selected or not
    if(files.length > 0 ){
        formData.append('excel_1',files[0]);
    }

    if(files2.length > 0 ){
        formData.append('excel_2',files2[0]);
    }

    if(files3.length > 0 ){
        formData.append('proyecto',files3[0]);
    }


    $.ajax({
        type: $('#editar_practica_form').attr('method'), 
        url: $('#editar_practica_form').attr('action'),
        data: formData ,
        processData: false,
        contentType: false,
        cache: false,
        beforeSend: function(){
            let timerInterval
            Swal.fire({
                title: 'Guardando datos',
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
                if (result.dismiss === Swal.DismissReason.timer) {}
            });          
        }, 
        success: function (data) { 
            var jsonData = JSON.parse(data);
            if(jsonData.success == 1){
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

                document.getElementById("editar_practica_form").reset();
                setTimeout(()=>{
                    location.reload();
                },1500)
            }
        } 
    });

    ev.preventDefault();
});