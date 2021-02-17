$(document).ready( ()=>{


   /* var path_drako = 'http://localhost/login-webfenix/drakopublic/';
    var templates = new Array(
        'baterias.php', 'fenix.php',
        'drakopart.php', 'drakoinfo.php',
        'bosch.php', 'roshfrans.php'
    );*/

    /*function enlaceAleatorio(){
       let aleat = Math.random() * templates.length
             aleat = Math.floor(aleat);
       let url1=String(path_drako+templates[aleat]);
        $.post(url1,data =>{
            $("#htmlext").html(data);
        });
    }


    var totalTime = 0;
    function updateClock() {
        document.getElementById('countdown').innerHTML = totalTime;
        if (totalTime==14){
            scroll(0, 100);
        }
        if(totalTime==0){
            $(".content").fadeOut(1500);
            $(".content2").fadeIn(2500);
            scroll(0, 100);
            console.log('Final');
        }else{
            totalTime-=1;
            var update = updateClock();
            setTimeout("update",1000);
        }
    }
    document.getElementById('internet_gratis').addEventListener('click',function(e){
        if(totalTime==0){
            totalTime = 15;
            updateClock();
            $(".content").fadeIn(1500);
            $(".content2").fadeOut(50);
        }
        totalTime = 15;

        enlaceAleatorio();
        //$("#htmlext").load('public2.php');

    });*/




    /* function sleep() {
         var star = new Date().getTime();
         for (var i = 0; i < 1e7; i++){
             if (new Date().getTime(star) - 1000){
                 break;
             }
         }
     }*/


    /*$('#modal_anuncios').modal({
      onCloseStart:function () {
          clearInterval(tiempo_corriendo);
      }
  })*/
    /*function updateClock() {
        let totalTime = 15;
        $('#countdown').text(totalTime);
        if (totalTime == 14){
            scroll(0, 100);
        }
        if(totalTime == 0){
            $(".content").fadeOut(1500);
            $(".content2").fadeIn(2500);
            scroll(0, 100);
            console.log('Final');
        }else{
            totalTime-=1;
            setTimeout("updateClock()",1000);
        }
    }*/


    /*function cronometro(){
        let tiempo = $('#countdown').text();
        let rest_tiempo = parseInt(tiempo) - 1;
        var tiempo_corriendo = setInterval(function(){
                tiempo--;
                $('#countdown').text(tiempo);
                console.info(tiempo);
                if (tiempo == 0){
                    $('#countdown').css({display:'none'});
                    $('#countdown').text(15);
                    $('.content').fadeOut('100');
                    $('.content2').fadeIn();
                    clearInterval(tiempo_corriendo);
                }else{
                    $('#countdown').css({display:'none'});
                    $('#countdown').text(15);
                    $('.content').css({display:'none'});
                    $('.content2').fadeIn();
                }
            }, 1000);

        $.ajax({
            ulr:'infraestructura/count.php',
            method:'post',
        })
            .done(r => {
                clearInterval(tiempo_corriendo);
            })
    }*/



    /* Boto abrir anuncios en modal */
   /* $(document).on('click', '#internet_gratis', () =>{

        cronometro();
        $(".content").fadeIn(1500);
        $(".content2").fadeOut(50);
        enlaceAleatorio();
    });*/



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