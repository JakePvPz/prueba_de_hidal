<?php 
//llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
echo $nombre."Ha dicho:<br/>.$mensaje"
if(mail('hidalsoft@gmail.com', $email, $mensaje)){
echo "Email enviado";
}else{
    echo "Email no enviado";
}
        
?>
