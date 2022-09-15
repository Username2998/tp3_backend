<?php
$usuario = $_POST [ "login_txt" ]; 
$contraseña = $_POST [ "password_txt" ];

$ckusr = "admin";
$ckpaz = "12";



if ($usuario == $ckusr && $contraseña == $ckpaz) { 
    echo '<script>
    /* var jsuser = $usuario2; */
    window.location.href="succes.html";
    alert("                                         LETS CELEBRATE ADMIN" );
   
    </script>';
    /* header ("location:https://youtu.be/3GwjfUFyY6M?t=33");  */
}
else {
    echo '<script>alert("NOT ADMIN = NO CELEBRATION :(")
    window.location.href="404.html";
    </script>';
    
}

?>
