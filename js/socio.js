$('#form_registro_socio').submit(function (ev) {
    var f = $(this);
    var formData = new FormData(document.getElementById("form_registro_socio"));

    var personas_estudia_array = '';   
    var item = 0; 
    $(':checkbox[name=personas_estudia]').each(function(){
        if (this.checked) {
            if(item == 0){
                personas_estudia_array += $(this).val();
            }else{
                personas_estudia_array += ', '+$(this).val();
            }
            item++;
        }
    }); 
    formData.append('personas_estudia_array',personas_estudia_array);

    var actividades_array = '';   
    item = 0; 
    $(':checkbox[name=actividades]').each(function(){
        if (this.checked) {
            if(item == 0){
                actividades_array += $(this).val();
            }else{
                actividades_array += ', '+$(this).val();
            }
            item++;
        }
    }); 
    formData.append('actividades_array',actividades_array);

    var comidas_array = '';   
    item = 0; 
    $(':checkbox[name=comidas]').each(function(){
        if (this.checked) {
            if(item == 0){
                comidas_array += $(this).val();
            }else{
                comidas_array += ', '+$(this).val();
            }
            item++;
        }
    }); 
    formData.append('comidas_array',comidas_array);

    $.ajax({
        type: $('#form_registro_socio').attr('method'), 
        url: $('#form_registro_socio').attr('action'),
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

                document.getElementById("form_registro_socio").reset();
                setTimeout(()=>{
                    location.reload();
                },1500)
            }
        } 
    });

    ev.preventDefault();
});