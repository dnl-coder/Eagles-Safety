<?php

/*==========================================================

CLASE CONEXION
>>conexion{}

1) Se declaran las variables generales de conexion a la Base de Datos

2) Se realiza la conexion por medio de mysqli

3) Se crean las funciones generales de consulta a la Base de datos

==========================================================*/

class conexion {

	private $_conexion;
	private $_base_datos;
	private $_sql;
	private $_result;

	/*=====================================
	       FUNCION CONSTRUCTOR
	 ====================================*/
    
	public function __construct () {

		$host = 'sql103.epizy.com';              //DIRECCION DEL HOST DONDE ESTARA ALOJADA LA BD
		$user = 'epiz_25125041';                   //USUARIO DE INGRESO A LA BD
		$password = 'ePV0eJjLhZikyqnh';                   //CONTRASEÑA DE INGRESO A LA BD
		$database_name = 'epiz_25125041_es';     //NOMBRE DE LA BD
        
        //$host = 'localhost';              //DIRECCION DEL HOST DONDE ESTARA ALOJADA LA BD
		//$user = 'root';                   //USUARIO DE INGRESO A LA BD
		//$password = '';                   //CONTRASEÑA DE INGRESO A LA BD
		//$database_name = 'epiz_21089143_ES';     //NOMBRE DE LA BD
        
		$this->_conexion=mysqli_connect($host, $user, $password, $database_name);
        
        //ERROR A MOSTRAR SI LA CONSULTA ES FALLIDA
        if(mysqli_connect_errno()){
            
            echo "Fallo al conectar con la Base de Datos. Verificar conexión.";
            exit();
            
        }
        
        mysqli_select_db($this->_conexion,$database_name) or die ("No se encuentra la Base de Datos. Verificar conexión.");
        
        mysqli_set_charset($this->_conexion, "utf8");  //Codificacion general de la Base de Datos
	
	}
    
    /*=====================================
	       FUNCION EJECUTAR CONSULTAS SQL
	 ====================================*/
    
    public function ejecutar_sentencia ($sql) {
		$this->_sql = $sql;
		return ($this->_result = mysqli_query($this->_conexion , $this->_sql));
	}
    
    /*=====================================
	       FUNCION RETORNAR RESULTADOS DE CONSULTAS (1 solo resultado)
	 ====================================*/
    
    public function retornar_array() {
		return mysqli_fetch_array($this->_result, MYSQLI_ASSOC);
	}
    
    /*=====================================
	       FUNCION RETORNAR RESULTADOS EN UN ARRAY (2 + resultados)
	 ====================================*/

    public function retornar_select(){
        $test = array(); $i = 0;
        while($fila = mysqli_fetch_assoc($this->_result)){
            $test[$i] = $fila;
            $i++;
        }
        return $test;       
    }
    
    /*=====================================
	       FUNCION INSERT REGISTRO
	 ====================================*/
    
    public function insert_registro() {
        return ($this->_result ="REGISTRO EXITOSO");
	}
}
    
?>