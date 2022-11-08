<?php

    session_start();
    include 'conexion_bd.php';

     $correo =$_POST['correo'];
     $clave =$_POST['clave'];
     $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and clave='$clave'");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario']=$correo;  //colocarle segurity a la paginish
        header ("location: ../principal.php");
        exit();

    }else{
        echo'
        <script>
         alert("el usuario no existe, verifica los datos ingresados");
         window.location ="../index.php";
        </script>
        ';
        exit();
    }

?>