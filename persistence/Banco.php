<?php

	class Banco{

		private $database;
		private $usuario;
		private $senha;
		private $url;
		private $conexao;

		function __construct(){
			$this->database='petshop';
			$this->usuario='root';
			$this->senha='';
			$this->url='localhost';
			$this->conexao=new mysqli($this->url,$this->usuario,$this->senha,$this->database);
		}

		public function executar($sql)
		{
			$resp=$this->conexao->query($sql);
			if($resp){
				return true;
			}else{
				return false;
			}
		}

		public function consultar($sql)
		{
			$consulta=$this->conexao->query($sql);
			if($consulta->num_rows>0){
				return $consulta;
			}else{
				return false;
			}
		}
	
	}

?>