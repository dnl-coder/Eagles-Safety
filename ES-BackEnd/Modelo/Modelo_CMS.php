<?php

/*===========================================
CLASE: MODELO DEL CONTROLADOR CMS

    ALMACENA LAS FUNCIONES CORRESPONDIENTES
    AL CMS DE LA PAGINA WEB
===========================================*/

class Model_CMS{
    
    private $_conexion;
    
    public function __construct() {
        $this->_conexion = new conexion();
    }

    /*=======================================================
        LOGIN DEL CMS DE LA PAGINA WEB
    =======================================================*/
    public function login($username, $password) {
        $sql = "SELECT * FROM usuario WHERE USUAUSER='" . $username . "' AND USUAPASSWORD='" . $password . "' ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
    }
    
    /*===========================================
        CONSULTA: MOSTRAR DATOS DE LA EMPRESA
    ===========================================*/
    
    public function mostrarDatosEmpresa() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM informacion";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    } 
    
    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DE LA EMPRESA
    ===========================================*/
    
    public function actualizarDatosEmpresa($titulo,$correo,$telefono1,$telefono2,$redSocial1,$redSocial2,$direccion,$distrito,$provincia,$pais,$rutaFotoIcon,$rutaFotoLogo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `informacion` SET `INFEMPTITULO_PAGINA` = '".$titulo."', `INFEMPICONO` = '".$rutaFotoIcon."', `INFEMPLOGO` = '".$rutaFotoLogo."', `INFEMPCORREO` = '".$correo."', `INFEMPTELEFONO1` = '".$telefono1."', `INFEMPTELEFONO2` = '".$telefono2."', `INFEMPRED_SOCIAL1` = '".$redSocial1."', `INFEMPRED_SOCIAL2` = '".$redSocial2."', `INFEMPDOMICILIO` = '".$direccion."', `INFEMPDISTRITO` = '".$distrito."', `INFEMPPROVINCIA` = '".$provincia."', `INFEMPPAIS` = '".$pais."', `REGCODIGO` = '1' WHERE `INFEMPCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: MOSTRAR DATOS DEL BANNER
    ===========================================*/
    
    public function mostrarDatosBanner($tipo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM banner WHERE BANNTIPO = '".$tipo."'";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    } 
    
    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DEL BANNER 1
    ===========================================*/
    
    public function actualizarBanner1($titulo,$descripcion,$tipo,$rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `banner` SET `BANNTITULO` = '".$titulo."', `BANNTIPO` = '".$tipo."', `BANNDESCRIPCION` = '".$descripcion."', `BANNIMAGEN` = '".$rutaFoto."'  WHERE `BANNCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DEL BANNER 2
    ===========================================*/
    
    public function actualizarBanner2($titulo,$descripcion,$tipo,$rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `banner` SET `BANNTITULO` = '".$titulo."', `BANNTIPO` = '".$tipo."', `BANNDESCRIPCION` = '".$descripcion."', `BANNIMAGEN` = '".$rutaFoto."'  WHERE `BANNCODIGO` = 2;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: MOSTRAR SLIDER DE LA EMPRESA
    ===========================================*/
    
    public function mostrarSliders() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM slider";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
        
    }
    
    /*===========================================
        CONSULTA: MOSTRAR SLIDER DE LA EMPRESA
    ===========================================*/
    
    public function eliminarSlider($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `slider` WHERE `SLDRCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }
    
    /*===========================================
        CONSULTA: MOSTRAR SLIDER DE LA EMPRESA
    ===========================================*/
    
    public function agregarSlider($titulo,$descripcion,$rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `slider` (`SLDRCODIGO`, `SLDRNOMBRE`, `SLDRDESCRIPCION`, `SLDRIMAGEN`) VALUES (NULL, '".$titulo."', '".$descripcion."', '".$rutaFoto."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: MOSTRAR REGISTRO DE CONTACTANOS
    ===========================================*/
    
    public function mostrarRegistroContactanos() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT CONTACCORREO, CONTACASUNTO, CONTACMENSAJE FROM contactanos";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_array();
        
    }

    /*===========================================
        CONSULTA: AGREGAR CATEGORÍA GENERAL
    ===========================================*/
    
    public function agregarCategoria($nombre) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `categoria` (`CATCODIGO`, `CATNOMBRE`) VALUES (NULL, '".$nombre."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: MOSTRAR CATEGORÍA GENERAL
    ===========================================*/
    
    public function mostrarCategoria() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT CATCODIGO, CATNOMBRE FROM categoria";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
        
    }

    /*===========================================
        CONSULTA: ELIMINAR CATEGORIA GENERAL
    ===========================================*/
    
    public function eliminarCategoria($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `categoria` WHERE `CATCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: ACTUALIZAR DATOS DE CATEGORÍA GENERAL
    ===========================================*/
    
    public function actualizarCategoria($codigo,$nombre) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `categoria` SET `CATNOMBRE` = '".$nombre."'  WHERE `CATCODIGO` = '".$codigo."';";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: AGREGAR PRODUCTO
    ===========================================*/
    
    public function agregarProducto($nombre, $rutaFoto,$descripcion,$descripcionespecifica,$categoria,$destacado) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `producto` (`PRODCODIGO`, `PRODNOMBRE`, `PRODIMAGEN`, `PRODDESCRIPCION`, `PRODDESCRIPCION_ESPECIFICA`, `CATCODIGO`, `PRODDESTACADO`) VALUES (NULL, '".$nombre."', '".$rutaFoto."', '".$descripcion."', '".$descripcionespecifica."', '".$categoria."', '".$destacado."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: ELIMINAR PRODUCTO
    ===========================================*/
    
    public function eliminarProducto($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `producto` WHERE `PRODCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }  

    /*===========================================
        CONSULTA: ACTUALIZAR PRODUCTO
    ===========================================*/
    
    public function actualizarProducto($codigo,$nombre,$rutaFoto,$descripcion,$descripcionespecifica,$categoria,$destacado) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `producto` SET `PRODNOMBRE` = '".$nombre."', `PRODIMAGEN` = '".$rutaFoto."', `PRODDESCRIPCION` = '".$descripcion."', `PRODDESCRIPCION_ESPECIFICA` = '".$descripcionespecifica."', `CATCODIGO` = '".$categoria."', `PRODDESTACADO` = '".$destacado."'  WHERE `CATCODIGO` = '".$codigo."';";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }  

    /*===========================================
        CONSULTA: ELIMINAR MARCA
    ===========================================*/
    
    public function eliminarMarca($codigo) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "DELETE FROM `marca` WHERE `MARCCODIGO` = ".$codigo." ";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: MOSTRAR REGISTRO DE MARCA
    ===========================================*/
    
    public function mostrarRegistrosMarca() {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "SELECT * FROM marca";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->retornar_select();
        
    }

    /*===========================================
        CONSULTA: AGREGAR MARCA
    ===========================================*/
    
    public function agregarMarca($nombre, $rutaFoto) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "INSERT INTO `marca` (`MARCCODIGO`, `MARCNOMBRE`, `MARCIMAGEN`) VALUES (NULL, '".$nombre."', '".$rutaFoto."');";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }

    /*===========================================
        CONSULTA: ACTUALIZAR NOSOTROS
    ===========================================*/
    
    public function actualizarNosotros($descripcion,$vision,$rutaFotoVision,$mision,$rutaFotoMision) {
        
        //FUNCION CON LA CONSULTA A REALIZAR
        $sql = "UPDATE `nosotros` SET `NOSTDESCRIPCION` = '".$descripcion."', `NOSTVISION` = '".$vision."', `NOSTVISION_IMAGEN` = '".$rutaFotoVision."', `NOSTMISION` = '".$mision."', `NOSTMISION_IMAGEN` = '".$rutaFotoMision."' WHERE `NOSTCODIGO` = 1;";
        $this->_conexion->ejecutar_sentencia($sql);
        return $this->_conexion->insert_registro();
        
    }  
    
}

?>