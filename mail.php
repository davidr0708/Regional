<?php 

if (isset($_POST['prueba']) && $_POST['prueba'] == "prueba") {
    $to = "o.roblesp07@gmail.com";
    $subject = "Asunto del email";
    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= 'From: Demo <kevin@macfriend.com.co>' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

    $message = "
    <html>
    <head>
    <title>HTML</title>
    </head>
    <body>
    <h1>Esto es un H1</h1>
    <p>Esto es un párrafo en HTML</p>
    </body>
    </html>";

    mail($to, $subject, $message, $headers);
}

?>
<html>
<body>
    <form method="post">
        <input type="text" name="prueba" value="prueba">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>