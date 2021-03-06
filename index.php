<?php
    if (isset($_POST['mac'])){
        $mac=$_POST['mac'];
    }
    if (isset($_POST['ip'])){
        $ip=$_POST['ip'];
    }
    if (isset($_POST['username'])){
        $username=$_POST['username'];
    }
    if (isset($_POST['link-login'])){
        $linklogin=$_POST['link-login'];
    }
    if (isset($_POST['link-orig'])){
        $linkorig=$_POST['link-orig'];
    }
    if (isset($_POST['error'])){
        $error=$_POST['error'];
    }
    if (isset($_POST['trial'])){
        $trial=$_POST['trial'];
    }
    if (isset($_POST['login-by'])){
        $loginby=$_POST['login-by'];
    }
    if (isset($_POST['chap-id'])){
        $chapid=$_POST['chap-id'];
    }
    if (isset($_POST['chap-challenge'])){
        $chapchallenge=$_POST['chap-challenge'];
    }
    if (isset($_POST['link-login-only'])){
        $linkloginonly=$_POST['link-login-only'];
    }
    if (isset($_POST['link-orig-esc'])){
        $linkorigesc=$_POST['link-orig-esc'];
    }
    if (isset($_POST['link-orig-esc'])){
        $linkorigesc=$_POST['link-orig-esc'];
    }
    if (isset($_POST['mac-esc'])){
        $macesc=$_POST['mac-esc'];
    }
    if (isset($_POST['identity'])){
        $identity=$_POST['identity'];
    }
    if (isset($_POST['bytes-in-nice'])){
        $bytesinnice=$_POST['bytes-in-nice'];
    }
    if (isset($_POST['bytes-out-nice'])){
        $bytesoutnice=$_POST['bytes-out-nice'];
    }
    if (isset($_POST['session-time-left'])){
        $sessiontimeleft=$_POST['session-time-left'];
    }
    if (isset($_POST['uptime'])){
        $uptime=$_POST['uptime'];
    }
    if (isset($_POST['refresh-timeout'])){
        $refreshtimeout=$_POST['refresh-timeout'];
    }
    if (isset($_POST['link-status'])){
        $linkstatus=$_POST['link-status'];
    }
?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login | Drako</title>

    <link rel="apple-touch-icon" sizes="76x76" href="dominio/imagenes/logo-drako.png">
    <link rel="icon" type="image/png" href="dominio/imagenes/logo-drako.png">

    <link rel="stylesheet" href="node_modules/materialize-css/dist/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="librerias/fontawesome_pro/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="dominio/login.css">

</head>
<body>

    <!-- navbar -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo logo-navbar"><img class="logo-nav" src="dominio/imagenes/logo-drako.png" alt="logo drako navegacion"></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#OnderSoft">Login</a></li>
                    <li><a href="#OnderSoft">Status</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#OnderSoft">Login</a></li>
        <li><a href="#OnderSoft">Status</a></li>
    </ul>
    <!-- end navbar -->

    <!--  formulario -->
    <div class="content-all">
        <div class="row content_divs">
            <div class="content_formulario">
                <form id="form_login" method="post">
                    <div class="row">
                        <div class="col s12">
                            <div class="center">
                                <div class="content_img_logo">
                                    <img class="logo-form" src="dominio/imagenes/logo-drako.png" alt="logo drako auto partes">
                                </div>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="center">
                                <p class="textos-informs">Obtenga 1 Hora gratis <a id="internet_gratis" href="#modal_anuncios" class="modal-trigger waves-effect waves-light btn btn-primario">Aqui</a></p>
                                <p class="textos-informs">Compra tu PIN <a href="#!">Aqui</a></p>
                            </div>
                        </div>
                        <div class="input-field col s12 inline">
                            <i class="fad fa-user-tie prefix"></i>
                            <input autocomplete="off" required name="usuario" id="usuario" type="text" class="validate">
                            <label for="usuario">Usuario</label>
                            <span class="helper-text" data-error="✘" data-success="✔">Obligatorio</span>
                        </div>
                        <div class="input-field col s12 inline">
                            <i class="fad fa-lock-alt prefix"></i>
                            <input required name="password" id="password" type="password" class="validate">
                            <label for="password">Contraseña</label>
                            <span class="helper-text" data-error="✘" data-success="✔">Obligatorio</span>
                        </div>
                        <div class="col s12">
                            <div class="center">
                                <p class="textos-informs">Olvide mi contraseña, recuperala <a href="#!">Aqui</a></p>
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="center">
                                <button class="btn btn-large btn-primario waves-effect waves-light" type="submit">Login
                                    <i class="fad fa-key"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="content_image">

                <div class="carousel carousel-slider center">
                    <div class="carousel-fixed-item center">
                        <a href="#modal_anuncios" class="modal-trigger waves-effect waves-light btn btn-primario">Drako</a>
                    </div>
                    <div class="carousel-item  white-text" href="#one!" style="background-image: url('https://scontent.fclo8-1.fna.fbcdn.net/v/t1.0-9/56169809_2193695624056055_3876397431352459264_n.jpg?_nc_cat=108&ccb=3&_nc_sid=09cbfe&_nc_ohc=lxbyTu9NNi4AX-XAx_g&_nc_ht=scontent.fclo8-1.fna&oh=559c4cb03ad4339d2ac9d980254be10c&oe=604FE065')">

                    </div>
                    <div class="carousel-item  white-text" href="#two!" style="background-image: url('https://scontent.fclo8-1.fna.fbcdn.net/v/t1.0-9/55244623_2188390301253254_5303608445268656128_o.jpg?_nc_cat=102&ccb=3&_nc_sid=174925&_nc_ohc=K0N6OUbOZH8AX_gVr27&_nc_ht=scontent.fclo8-1.fna&oh=20d49cde4403eccbfd1524f89a8077ff&oe=604FA07E')">

                    </div>
                    <div class="carousel-item  white-text" href="#three!" style="background-image: url('https://scontent.fclo8-1.fna.fbcdn.net/v/t1.0-9/117368150_3261824290576511_2539092437340107693_n.jpg?_nc_cat=106&ccb=3&_nc_sid=8bfeb9&_nc_ohc=Ia02VKQ4TikAX_lU1aP&_nc_ht=scontent.fclo8-1.fna&oh=26bb3dea5046cd573f6097315176ab42&oe=60507914')">

                    </div>
                    <div class="carousel-item  white-text" href="#four!" style="background-image: url('https://scontent.fclo8-1.fna.fbcdn.net/v/t1.0-9/127908895_3596890547069882_5582011572866278784_o.jpg?_nc_cat=110&ccb=3&_nc_sid=8bfeb9&_nc_ohc=eYRgARtUJ8wAX-hE-rn&_nc_ht=scontent.fclo8-1.fna&oh=3d095b4b1dbf6f56e9efbfea43d5c0b6&oe=604FC0CE')">

                    </div>
                    <div class="carousel-item  white-text" href="#five!" style="background-image: url('https://scontent.fclo8-1.fna.fbcdn.net/v/t1.0-9/39278299_1869244593167828_5796123533490782208_n.jpg?_nc_cat=104&ccb=3&_nc_sid=174925&_nc_ohc=ccZnMPqwS6IAX_fakDG&_nc_ht=scontent.fclo8-1.fna&oh=1cc01c29af82d4e110a920f21d7fd874&oe=60502840')">

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  formulario end -->




    <!-- modal anuncio -->
    <div id="modal_anuncios" class="modal">
        <button type="button" class="button-close-modal modal-close"><i class=" fad fa-window-close"></i></button>
        <div class="content_close"></div>
        <div class="modal-content">

            <div id="htmlext" class="recargar"></div>
            <div align="center" class="content">
                <div class="textopu">
                    <h1>ESPERE --><span id="countdown">15</span></h1>
                </div>
            </div>

            <div align="center" class="content2">
                <div class="row">
                    <?php if($trial === 'yes') : ?>
                        <div class="alert alert-info">
                            Pruebalo, <a  class="btn btn-warning" href="<?php echo $linkloginonly; ?>?dst=<?php echo $linkorigesc; ?>&amp;username=T-<?php echo $macesc; ?>">Gratis YA!</a>.
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger">Espere 30 min y obtenga Gratis nuevamente</div>
                    <?php endif; ?>
                    <?php if($error) : ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>



    <!-- script -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script src="librerias/fontawesome_pro/js/all.min.js"></script>
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <!-- script formulario -->
    <script type="text/javascript">
        var direcciones = new Array( 'baterias.php', 'fenix.php', 'drakopart.php',
            'drakoinfo.php', 'bosch.php', 'roshfrans.php');
            function enlaceAleatorio(){
                aleat = Math.random() * direcciones.length
                aleat = Math.floor(aleat)

                $("#htmlext").load('http://drakopartes.duckdns.org/drakopublic/'+direcciones[aleat]);

            }
    </script>
    <script type="text/javascript">
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
                setTimeout("updateClock()",1000);
            }
        }
    </script>
    <script type="text/javascript">
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

        });
    </script>
    <script src="aplicacion/login.js"></script>
</body>
</html>