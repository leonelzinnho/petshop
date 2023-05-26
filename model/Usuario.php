<?php

	class Usuario{

		private $id;
		private $nome;
		private $senha;
		private $tipo;

		public function setId($id)
		{
			$this->id=$id;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setNome($nome)
		{
			$this->nome=$nome;
		}

		public function getNome()
		{
			return $this->nome;
		}

		public function setSenha($senha)
		{
			$this->senha=$senha;
		}

		public function getSenha()
		{
			return $this->senha;
		}

		public function setTipo($tipo)
		{
			$this->tipo=$tipo;
		}

		public function getTipo()
		{
			return $this->tipo;
		}

		public function logar($usuario)
		{
			setcookie("usuario",$usuario->getNome(),time()+172800);
		}

		public function deslogar()
		{
			setcookie("usuario","");
		}



	}

?>