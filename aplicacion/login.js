$(document).ready( ()=>{

    $('.sidenav').sidenav();

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    setInterval(function() {
        $('.carousel').carousel('next');
    }, 4000);
    $('.modal').modal();


    function empty_password() {
        $('#password').val('');
    }

    /* form */
    $(document).on('submit', '#form_login', function(e){
        e.preventDefault();

        $.ajax({
            url:'',/* url del script php*/
            method:'post',
            dataType:'json',
            data:$(this).serialize(),
            beforeSend:()=>{

            }
        })
            .done(r=>{
                switch (r) {
                    case '':/* respuesta del servidor en un caso*/

                        break;
                    default:
                        M.toast({html:'Proceso terminado con posibles errores'});
                }
            })
            .fail(f=>{
                M.toast({html:'Hubo un error, contacte con soporte tecnico'});
                console.info(f);
            })
            .always(a=>{
                empty_password();
            })
    });


});