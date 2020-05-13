<?php

//
//LLAMADA A LOS ARCHIVOS DE CONEXION A LA BD Y EL MODELO CORRESPONDIENTE AL CONTROLADOR
//
//METODO POST

require_once(__DIR__."/../../Modelo/ConexionBD.php");
require_once(__DIR__."/../../Modelo/Modelo_CMS.php");

$Model_CMS = new Model_CMS();

if(isset($_POST['_username']) && isset($_POST['_password'])){
    
    $username = $_POST['_username'];
    $password = $_POST['_password'];
    
    if($Model_CMS->login($username,$password)){
        
        $data = array(
            "response" => 1,
            "message" => "Ingreso correcto"                      
            ); 
        
    }else{
        
        $data = array(
            "response" => 0,
            "message" => "Ingrese correctamente los datos"                      
            );  
    }
}else{
    
    $data = array(
            "response" => 0,
            "message" => "Parametros no encontrados"                      
            );
}


header('Content-type: application/json; charset=utf-8');

echo json_encode($data);         

?>