<?php
$to      = 'info@flogicortargentina.com.ar';
$subject = 'Nuevo mensaje desde pagina web';
$message = $_POST['message'] . ' /n Telefono: ' . $_POST['tel'];
$headers = 'From:' . $_POST['email'] . "\r\n" .
    'Reply-To:' . $_POST['email'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
header("Location: http://flogicortargentina.com.ar/");
die();
?>