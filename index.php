<?php

    session_start();

    require_once("libs/utilities.php");

    $pageRequest = "home";
    $modo = "INS";


    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }

    if(isset($_GET["modo"])){
      $modo =$_GET["modo"];
    }

    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    require_once("controllers/site.mw.php");
    require_once("controllers/verificar.mw.php");

    //Este switch se encarga de todo el enrutamiento

    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
        case "login":
            require_once("controllers/login.control.php");
            break;
        case "registro":
            require_once("controllers/registro.control.php");
            break;
        case "categorias":
            //llamar al controlador
            require_once("controllers/categorias.control.php");
            break;
        case "productos":
            //llamar al controlador
            require_once("controllers/productos.control.php");
            break;
        //para agregar una nueva pagina
        // agregar otro case
        default:
            require_once("controllers/error.control.php");

    }


?>
