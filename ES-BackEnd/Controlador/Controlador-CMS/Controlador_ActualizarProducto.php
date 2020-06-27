<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_codigo']) && isset($_POST['_nombre']) && isset($_POST['_imagen']) && isset($_POST['_descripcion']) && 
   isset($_POST['_descripcionEspecifica']) && isset($_POST['_codcategoria']) && isset($_POST['_destacado'])){
    
    $codigo = $_POST['_codigo'];
    $nombre = $_POST['_nombre'];
    $rutaFoto = $_POST['_imagen'];
    $descripcion = $_POST['_descripcion'];
    $descripcionespecifica = $_POST['_descripcionEspecifica'];
    $categoria = $_POST['_codcategoria'];
    $destacado = $_POST['_destacado'];
    
    //MENSAJE A MOSTRAR SI ENCUENTRA RESULTADOS

    if($Model_CMS->actualizarProducto($codigo,$nombre,$rutaFoto,$descripcion,$descripcionespecifica,$categoria,$destacado)){                        
        $msg = array(
            "response" => 1,
            "message" => "Registro correcto"                      
            );        
    }
    else{                        
        $msg = array(
            "response" => 0,
            "message" => "Ingrese correctamente los datos"                    
            );                        
    }
}else{    
   $msg = array(
            "response" => 0,
            "message" => "Parametros no encontrados"                      
            );    
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($msg);  
?>