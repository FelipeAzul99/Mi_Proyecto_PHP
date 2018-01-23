<?php 
	
	/**
	* 
	*/
	class ClassMetodos {

		public $_nombre;
		public $_edad;
		public $_email;

		public function setNombre($nombre){
			$this->_nombre = $nombre;
		}

		public function getNombre(){
			return $this->_nombre;
		}
		
		
	}
	
 ?>