<?php

require_once 'Banco.php';

class UsuarioPA{

	private $banco;

	function __construct(){
		$this->banco=new Banco();
	}

	public function cadastrar($usuario)
	{
		$sql="insert into usuario values(".
		$usuario->getId().",'".$usuario->getNome().
		"','".$usuario->getSenha()."',".
		$usuario->getTipo().")";
		$resp=$this->banco->executar($sql);
		if(!$resp){
			return false;
		}else{
			return true;
		}
	}

	public function logar($usuario,$senha);
	{
		
	}



}

?>