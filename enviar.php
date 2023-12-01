<?php
 $nombre=$_POST['nombre'];

 $telefono=$_POST['telefono'];
 $asunto=$_POST['asunto'];
 $comentario=$_POST['comentarios'];

 $subject='Formulario de contacto';
 $para='correoprueba3006@gmail.com';
 echo"<script language='javascript'>
 alert('hola');
 </script>";
 $header = 'From: ' .$nombre;
 $msjCorreo = "Nombre: $nombre\n Telefono:\n $telefono Asunto:\n $asunto Comentario:\n $comentario " ;
 echo "<script language='javascript'>
 alert('hola2');
 </script>"; 
if ($_POST['submit']) 
{
     echo "<script language='javascript'>
 alert('hola3');
 </script>";
 if (mail($para, $subject, $msjCorreo, $header)) 
 {
 echo "<script language='javascript'>
 alert('Mensaje enviado, muchas gracias.');
 </script>";
 } 
 else 
 {
echo "<script language='javascript'>
 alert('fallado');
 </script>";
}
} 
?>