<?php

 
 include 'conexion_bd.php';

 $nombre_completo =$_POST['nombre_completo'];
 $correo =$_POST['correo'];
 $usuario =$_POST['usuario'];
 $clave =$_POST['clave'];

 $query = "INSERT INTO usuarios(nombre_completo,correo, usuario, clave)
  VALUES ('$nombre_completo','$correo','$usuario','$clave')";


// verificar que el correo no se repita en la base de datoss
//   $verificar_correo= mysqli_query($conexion,"SELECT*FROM usuarios WHERE correo='$correo');
//    if(mysqli_num_rows($verificar_correo)>0){
//      echo'
//         <script>
//            alert (" hola ","");

//           window.location ="../index.php";
     
//         </script> 
//      ';
//      exit();
//    }


  $ejecutar =  mysqli_query($conexion, $query);

if($ejecutar){
    echo'
     <script>
        alert("usuario almacenado correctamente");
         window.location ="../index.php";
        </script>
        ';

}

mysqli_close($conexion);


?>