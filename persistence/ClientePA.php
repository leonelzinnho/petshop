<?php

require_once 'Banco.php';

class ClientePA{

	private $banco;

	function __construct()
	{
		$this->banco=new Banco();
	}

	public function cadastrar($cliente)
	{
		$sql="insert into cliente values(".
		$cliente->getId().",'".
		$cliente->getCpf()."','".
		$cliente->getNome()."','".
		$cliente->getNascimento()."','".
		$cliente->getTelefone()."','".
		$cliente->getRua()."','".
		$cliente->getBairro()."','".
		$cliente->getCidade()."','".
		$cliente->getEstado()."','".
		$cliente->getEmail()."')";
		$resp=$this->banco->executar($sql);
		if(!$resp){
			return false;
		}else{
			return true;
		}
	}

	public function retornaId()
	{
		$sql="select max(id) from cliente";
		$consulta=$this->banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			while($linha=$consulta->fetch_assoc()){
				$id=$linha['max(id)'];
			}
			return $id;
		}
	}

	public function listar($inicio,$fim)
	{
		$sql="select * from cliente where id between $inicio and $fim";
		$consulta=$this->banco->consultar($sql);
		if(!$consulta){
			return false;
		}else{
			return $consulta;
		}
	}

}

?>