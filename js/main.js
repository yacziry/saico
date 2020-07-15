
jQuery(document).on('submit','#formlg', function(event){
    event.preventDefault();

    jQuery.ajax({
        url: '/AICO/sist/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function(){
            $('.botonlg').val('Validando...');

        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'aico2019'){
                location.href = '/AICO/sist/index2.php';
            } else if(respuesta.tipo == 'calidad'){
                location.href = 'asd';
                }

        }else{
            $('.error').slideDown('slow');
            setTimeout(function(){
                $('.error').slideUp('slow')
            },3000);
            $('.botonlg').val('Iniciar Sesion');

        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });
});

