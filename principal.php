<?php
  session_start();
  if(!isset ($_SESSION['usuario'])){
    echo'   
        <script>
           alert(" Por favor debes iniciar sesion");
            window.location = "index.php"
           </script>

    ';
    //header ("location: index.php");
    die();
    session__destroy();
    die();
  }
 // session__destroy(); ///para colocarle segur a la pagina principal y no ingresar por la barra de busqueda

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSPORT&GPS</title>
    <link rel="stylesheet" href="assets/css/menu.css">

</head>
<body>
<header>
        <div class="header__superior">
            <div class="logo">
                <img src="/assets/images/gps.png" alt="">
            </div>
            <div class="search">
                
                <input type="search" placeholder="¿Qué deseas buscar?">
            </div>
        </div>

        <div class="container__menu">
             
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="#" id="selected"></a></li>
                        <li><a  href="#">Servicios</a>
                            <ul>
                                <li><a href="#">localizacion</a></li>
                                <li><a href="#">transporte publico</a></li>
                                <li><a href="#">informacion de buses</a></li>
                                
                                
                            </ul>
                        </li>
                        <li><a   href="#">Empresas de las rutas </a></li>
                            <!-- <ul>
                                <li><a href="#">trans pubenza</a></li>
                                <li><a href="#">trans libertad</a></li>
                                <li><a href="#">sotracauca</a></li>
                                <li><a href="#">trans tambo</a></li>
                                
                            </ul> -->
                        <li><a  href="#">¿Quienes somos?</a></li>
                            <!-- <ul>
                                <li><a href="#">Jessica Vanesa A</a></li>
                                <li><a href="#">Sebastian Alvarado</a></li>
                                <li><a href="#">Daniel Cajas</a></li>
                                <li><a href="#">Yenifer Gomez</a></li>
                            </ul> -->
                        
                        <li><a href="#">contactanos</a></li>

                        <li><a href="php/cerrar_sesion.php">cerrar sesion </a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>

    <!-- <a href="php/cerrar_sesion.php">cerrar sesion</a> -->


    <main>
        <article>
            <h1>TRANSPORT&GPS</h1>
            <h4>“Tu búsqueda ayuda, te ayuda, coopera y prospera”</h4>
             
            <p>Este sistema de información nace a partir de la necesidad de las personas nuevas en la ciudad o demás lugares que aún no identifican cómo funciona el transporte público en la ciudad. Con base a esta problemática se planteó un aplicativo móvil y web con el cual el usuario obtendrá información y ubicación de los buses para fácil acceso al transporte.</p>
            <br>
            <h2>MISIÓN</h2>
            <br>
            <p>Se busca orientar a las personas nuevas en la ciudad, que no tienen suficiente  conocimiento sobre las rutas en la localidad y así conseguir el máximo aprovechamiento del transporte público.</p>
            <br>
            <h2>VISIÓN</h2>
            <br>
            <p>Se plantea que para el año  2024, se busca crear un software innovador que sea accesible al público en general, el cual pueda brindarle información sobre las rutas al usuario en la ciudad.</p>
        
        </article>


    </main>
    
</body>
</html>