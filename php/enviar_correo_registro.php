<?php 
    include_once("../conexion.php");

    require "../phpMailer/Exception.php";
    require "../phpMailer/PHPMailer.php";
    require "../phpMailer/SMTP.php";
    require "../phpMailer/POP3.php";
    require "../phpMailer/OAuth.php";
    

    use phpMailer\phpMailer\PHPMailer;
    use phpMailer\phpMailer\Exception;

    $correo = $_POST["correo"];
    $nombrecompleto = $_POST["nombre"];
    $password = $_POST["password"];
    $urllogin = "https://institutocolombianodepsicometria.com/usa/index.html";
    $asunto = "Registro de Usuario";


    $contenido = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <title>Narrative Invitation Email</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <style type='text/css'>

    /* Take care of image borders and formatting */

    img {
        max-width: 600px;
        outline: none;
        text-decoration: none;
        -ms-interpolation-mode: bicubic;
    }

    a {
        border: 0;
        outline: none;
    }

    a img {
        border: none;
    }

    /* General styling */

    td, h1, h2, h3  {
        font-family: Helvetica, Arial, sans-serif;
        font-weight: 400;
    }

    td {
        font-size: 13px;
        line-height: 19px;
        text-align: left;
    }

    body {
        -webkit-font-smoothing:antialiased;
        -webkit-text-size-adjust:none;
        width: 100%;
        height: 100%;
        color: #37302d;
        background: #ffffff;
    }

    table {
        border-collapse: collapse !important;
    }


    h1, h2, h3, h4 {
        padding: 0;
        margin: 0;
        color: #444444;
        font-weight: 400;
        line-height: 110%;
    }

    h1 {
        font-size: 35px;
    }

    h2 {
        font-size: 30px;
    }

    h3 {
        font-size: 24px;
    }

    h4 {
        font-size: 18px;
        font-weight: normal;
    }

    .important-font {
        color: #21BEB4;
        font-weight: bold;
    }

    .hide {
        display: none !important;
    }

    .force-full-width {
        width: 100% !important;
    }

    </style>

    <style type='text/css' media='screen'>
        @media screen {
            @import url(http://fonts.googleapis.com/css?family=Open+Sans:400);

            /* Thanks Outlook 2013! */
            td, h1, h2, h3 {
            font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif !important;
            }
        }
    </style>

    <style type='text/css' media='only screen and (max-width: 600px)'>
        /* Mobile styles */
        @media only screen and (max-width: 600px) {

        table[class='w320'] {
            width: 320px !important;
        }

        table[class='w300'] {
            width: 300px !important;
        }

        table[class='w290'] {
            width: 290px !important;
        }

        td[class='w320'] {
            width: 320px !important;
        }

        td[class~='mobile-padding'] {
            padding-left: 14px !important;
            padding-right: 14px !important;
        }

        td[class*='mobile-padding-left'] {
            padding-left: 14px !important;
        }

        td[class*='mobile-padding-right'] {
            padding-right: 14px !important;
        }

        td[class*='mobile-padding-left-only'] {
            padding-left: 14px !important;
            padding-right: 0 !important;
        }

        td[class*='mobile-padding-right-only'] {
            padding-right: 14px !important;
            padding-left: 0 !important;
        }

        td[class*='mobile-block'] {
            display: block !important;
            width: 100% !important;
            text-align: left !important;
            padding-left: 0 !important;
            padding-right: 0 !important;
            padding-bottom: 15px !important;
        }

        td[class*='mobile-no-padding-bottom'] {
            padding-bottom: 0 !important;
        }

        td[class~='mobile-center'] {
            text-align: center !important;
        }

        table[class*='mobile-center-block'] {
            float: none !important;
            margin: 0 auto !important;
        }

        *[class*='mobile-hide'] {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
            line-height: 0 !important;
            font-size: 0 !important;
        }

        td[class*='mobile-border'] {
            border: 0 !important;
        }
        }
    </style>
    </head>
    <body class='body' style='padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none' bgcolor='#ffffff'>
    <div style='padding: 5%; text-align: center'>
    <img src='https://www.usergioarboleda.edu.co/wp-content/uploads/ultimatum/imagens/logo-mobile-UniversidadSergioArboleda.png' width = '400px' alt='Your Logo'/>
    </div>
    <div class='row' style='padding-top: 20px'>
    <div class='col-lg-9' style= 'padding-left: 10%; padding-right: 10%;border-right: 3px solid gray;border-left: 3px solid gray;'>
        <h3><b>Universidad Sergio Arboleda - Registro de usuario</b></h3>
        <br>
        <h4>Cordial saludo, $nombrecompleto </h4>
        <br>
        <h4 style='text-align: justify;'>Su nueva informaci??n pra iniciar sesi??n es: <br><br><br>
            <b>Su usuario es:</b> $correo <br><br>
            <b>Su clave es:</b> $password <br><br>
            <b>El enlace de inicio es:</b> $urllogin<br>
        </h4>
        <br>
        <br>
        <h4 style='text-align:justify;'>
        De antemano agradecemos la confianza depositada en nosotros.
        </h4>
        <br>
        <hr>
        <h5 style='text-align:justify; font-style: italic;'>
        Atentamente: <br> 
        Universidad Sergio Arboleda.<br>
        Correo: usa@usa.edu.co.<br> 
        Celular (Whatsapp): 3012990890.<br> 
    </h5>
    </div>
    </div>
    </body>
    </html>";

    $oMail = new PHPMailer();
    $oMail->isSMTP();
    $oMail->Host = "mail.institutocolombianodepsicometria.com";
    $oMail->Port = 465;
    $oMail->SMTPSecure = "ssl";
    $oMail->SMTPAuth = true;
    $oMail->CharSet = 'UTF-8';
    $oMail->Username = "_mainaccount@institutocolombianodepsicometria.com";
    $oMail->Password = "9*[Hmv*[7^k[+??";
    $oMail->setFrom("_mainaccount@institutocolombianodepsicometria.com","Universidad Sergio Arboleda");
    $oMail->addAddress($correo, $nombrecompleto);
    $oMail->Subject = $asunto;
    $oMail->msgHTML($contenido);

    
    if(!$oMail->send()){
        echo json_encode(array('success' => 0, 'mensaje' =>  $oMail->ErrorInfo));
    }else{
        echo json_encode(array('success' => 1, 'mensaje' => "Registro exitoso"));
    }
     
?>