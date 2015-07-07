<?php
require_once("libs/dao.php");
function obtenerCategorias(){
  $arregloCategorias = array();
  $query= "SELECT * FROM categorias;";
  $arregloCategorias= obtenerRegistros($query);

  return $arregloCategorias;
}

function ingresarCategoria($ctgdsc,$ctgest){
  $query="INSERT INTO categorias (`ctgcod`, `ctgdsc`, `ctgest`) VALUES (NULL,'$ctgdsc','$ctgest'  );";

  return ejecutarNonQuery($query);
}

function eliminarCategoria($ctgcod){
  $query="DELETE FROM categorias  WHERE `categorias`.`ctgcod` = $ctgcod;";

  return ejecutarNonQuery($query);
}

function actualizarCategoria($ctgcod,$ctgdsc,$ctgest){


  $query = "UPDATE `categorias` SET `ctgdsc` = '$ctgdsc', `ctgest` = '$ctgest' WHERE `categorias`.`ctgcod` = $ctgcod;";
  return ejecutarNonQuery($query);
}

function obtenerCategoria($ctgcod){
  $query = "SELECT * FROM categorias WHERE ctgcod='$ctgcod';";
  return obtenerUnRegistro($query);
}

 ?>
