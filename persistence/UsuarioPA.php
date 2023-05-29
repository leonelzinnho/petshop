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

	public function logar($usuario,$senha)
	{
		$sql="select nome,senha from usuario";
		$consulta=$this->banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			while ($linha=$consulta->fetch_assoc()) {
				if($usuario==$linha['nome']){
					if($senha==$linha['senha']){
						return true;
					}else{
						return false;
					}
				}else{
					return false;
				}
			}
		}

	}

	public function retornaTipo($usuario)
	{
		$sql="select tipo from usuario where nome='$usuario'";
		$consulta=$this->banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$tipo=$linha['tipo'];
			}
			return $tipo;
		}
	}
}

?>