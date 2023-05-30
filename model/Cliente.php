<?php

class Cliente{

	private $id;
	private $cpf;
	private $nome;
	private $nascimento;
	private $telefone;
	private $rua;
	private $bairro;
	private $cidade; 
	private $estado;
	private $email;

	public function setId($id)
	{
		$this->id=$id;
	}

	public function getId(){
		return $this->id;
	}

	public function setCpf($cpf)
	{
		$this->cpf=$cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setNome($nome)
	{
		$this->nome=$nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNascimento($nascimento)
	{
		$this->nascimento=$nascimento;
	}

	public function getNascimento(){
		return $this->nascimento;
	}

	public function setTelefone($telefone)
	{
		$this->telefone=$telefone;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setRua($rua)
	{
		$this->rua=$rua;
	}

	public function getRua(){
		return $this->rua;
	}

	public function setBairro($bairro)
	{
		$this->bairro=$bairro;
	}

	public function getBairro(){
		return $this->bairro;
	}

	public function setCidade($cidade)
	{
		$this->cidade=$cidade;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setEstado($estado)
	{
		$this->estado=$estado;
	}

	public function getEstado(){
		return $this->estado;
	}

	public function setEmail($email)
	{
		$this->email=$email;
	}

	public function getEmail(){
		return $this->email;
	}

}

?>