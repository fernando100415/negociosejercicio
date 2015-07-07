<?php
/* Listado de categorias Controller
 * Fecha 2015-07-01
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  //Agregar requires de modelos aqui
  //ej require_once("models/tabla.model.php")
  require_once("models/categorias.model.php");


  //========================



  function run(){
    //Agregar codigo aqui
    $categorias= array();

    if(isset($_POST["btnIngresar"])){
      $ctgdsc = $_POST["txtCtgDsc"];
      $ctgest = $_POST["cmbCtgEst"];

      ingresarCategoria($ctgdsc,$ctgest);
    }elseif (isset($_POST["btnActualizar"])) {
      $ctgdsc = $_POST["txtCtgDsc"];
      $ctgest = $_POST["cmbCtgEst"];
      $ctgcod = $_GET["cod"];
      actualizarCategoria($ctgcod,$ctgdsc,$ctgest);
    }elseif (isset($_POST["btnEliminar"])) {

      $ctgcod = $_GET["cod"];
      eliminarCategoria($ctgcod);
    }

    if(isset($_GET["modo"])){

      $modo= $_GET["modo"];

      switch($modo){
          case 'ACT':
            $categoria = obtenerCategoria($_GET["cod"]);

            $datos = array(
              "actualizar"=> 'ACT',
              "ctgcod" =>$categoria["ctgcod"],
              "ctgdsc" =>$categoria["ctgdsc"],
              "ctgest" => ($categoria["ctgest"] == "INA")? "ACT": NULL
              );

            break;

          case 'INS':

          $datos = array(
            "ingresar"=> 'INS'
            );
            break;

          case 'ELI':
          $categoria = obtenerCategoria($_GET["cod"]);
          $datos = array(
            "eliminar"=> 'ELI',
            "ctgcod" =>$categoria["ctgcod"],
            "ctgdsc" =>$categoria["ctgdsc"],
            "ctgest" => ($categoria["ctgest"] == "INA")? "ACT": NULL
            );
          break;
      }
      renderizar("formularioCategorias",$datos);

    }else {
      $categorias = obtenerCategorias();
      renderizar("categorias",array("categorias"=>$categorias));
    }

                                //areglo de arreglos

    //debe existir un archivo en vistas

  }


  run();
?>
