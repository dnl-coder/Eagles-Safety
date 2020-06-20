<?php

/*===========================================
CLASE: MODELO DE LA PAGINA WEB

    ALMACENA LAS FUNCIONES CORRESPONDIENTES
    A LA PAGINA WEB
===========================================*/

class Model_Web{
    
    private $_conexion;
    
    public function __construct() {
        $this->_conexion = new conexion();
    }
    
    /*=======================================================
        MOSTRAR MARCAS
    =======================================================*/
    public function mostrarMarcas(){
        $sql = "SELECT * FROM `marca`";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }
	
	/*=======================================================s
        CARGAR DATOS EMPRESA
    =======================================================*/
    public function cargarDatosEmpresa(){
        $sql = "SELECT * FROM `informacion`";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }

    /*=======================================================
        CARGAR DATOS NOSOTROS
    =======================================================*/
    public function cargarDatosNosotros(){
        $sql = "SELECT * FROM nosotros";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
    }

    /*=======================================================s
        CARGAR PRODUCTOS (TODOS)
    =======================================================*/
    public function cargarProductos($categoria){
        $sql = "SELECT P.* FROM producto P INNER JOIN categoria C ON P.CATCODIGO= C.CATCODIGO WHERE C.CATNOMBRE ='" . $categoria . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }

    /*=======================================================s
        CARGAR PRODUCTOS DESTACADOS
    =======================================================*/
    public function mostrarProductosDestacados(){
        $sql = "SELECT * FROM producto WHERE PRODDESTACADO = '1' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
    }

    /*=======================================================s
        INSERTAR MENSAJES CONTÁCTANOS
    =======================================================*/
    public function insertarMensajeContactanos($correo,$asunto,$mensaje){
        $sql = "INSERT INTO `contactanos` (`CONTACCODIGO`, `CONTACCORREO`, `CONTACASUNTO`, `CONTACMENSAJE`) VALUES (NULL, '".$correo."', '".$asunto."', '".$mensaje."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
    }	
}
?>