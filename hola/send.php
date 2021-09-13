<?php 

if (isset($_POST['email'])) {

    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Demo <kevin@macfriend.com.co>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    $nombre = $_POST['name'];
    $to = $_POST['email'];
    $intereses = $_POST['exportar_cafe'] . " - " . $_POST['certificar_finca'] . " - " . $_POST['otro'];
    $mensaje = $_POST['message'];
    $subject = "Contacto desde la página Web";

    $message = "
    <html>
    <head>
        <title>HTML</title>
    </head>
        <body>
            <h1>Mensaje de ". $nombre . " </h1>
            <p>" . $mensaje . "</p>
            <p>" . $intereses . "</p>
            <p>.Atentamente: " . $nombre . "</p>
        </body>
    </html>";

    mail($to, $subject, $message, $headers);

    echo "<script>alert('Correo enviado exitosamente')</script>";
    //echo "<script>setTimeout(\"location.href='../hola/index.htm'"\",1000)</script>";
}

?>