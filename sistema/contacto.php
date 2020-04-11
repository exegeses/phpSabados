<?php
    require 'config/config.php';

    ###################################
    ##### capturamos detos enviados por el form

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentarios = $_POST['comentarios'];

    ### configuramos datos de email a enviar
    $destinatario = 'ACA PONE TU EMAIL';
    $asunto = 'Email enviado desde mi sitio';
    $cuerpo = '<div style="background-color:#d8d8d8; width: 550px; margin:auto">';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Comentarios: '.$comentarios;
    $cuerpo .= '</div>';

    $headers = 'From: satan@hell.com' . "\r\n";
    $headers .='Reply-To: webmaster@example.com' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8';

    ####### enviamos el email

    mail( $destinatario, $asunto, $cuerpo, $headers );



	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Contacto</h1>

        <div class="alert alert-info">
            Gracias <?= $nombre ?> por contactarnos.
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>


bbdd: id13241109_catalogo
usr : id13241109_catalogophp


catalogophp:tMGvcT?u04stY_YT