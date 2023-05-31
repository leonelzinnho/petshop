<?php
require_once 'cabecalho.php';
?>
<form action="/petshop/cadastrar/cliente" method="POST">
	<h1>Cadastro de Cliente</h1>
	<p>Cpf:<input type="text" name="cpf" size="11" maxlength="11" required></p>
	<p>Nome:<input type="text" name="nome" size="35" maxlength="35" required></p>
	<p>Nascimento:<input type="date" name="nascimento" min="1960-01-01" max="<?= date("Y-m-d") ?>" required></p>
	<p>Telefone:<input type="text" name="telefone" size="14" maxlength="14" placeholder="(42)99988-9999" required></p>
	<p>Rua:<input type="text" name="rua" size="40" maxlength="40" required></p>
	<p>Bairro:<input type="text" name="bairro" size="20" maxlength="20" required></p>
	<p>Cidade:<input type="text" name="cidade" size="25" maxlength="25" required></p>
	<p>Estado:<input type="text" name="estado" size="2" maxlength="2" required></p>
	<p>Email:<input type="email" name="email" required></p>
	<p><input type="submit" name="botao" value="Cadastrar"></p>
</form>
<?php
	if(isset($_POST['botao'])){
		require_once './model/Cliente.php';
		require_once './persistence/ClientePA.php';
		$cliente=new Cliente();
		$clientePA=new ClientePA();

		$cliente->setCpf($_POST['cpf']);
		$cliente->setNome($_POST['nome']);
		$cliente->setNascimento($_POST['nascimento']);
		$cliente->setTelefone($_POST['telefone']);
		$cliente->setRua($_POST['rua']);
		$cliente->setBairro($_POST['bairro']);
		$cliente->setCidade($_POST['cidade']); 
		$cliente->setEstado($_POST['estado']);
		$cliente->setEmail($_POST['email']);
		$id=$clientePA->retornaId();
		if (!$id) {
			$id=0;
		}
		$id++;
		$cliente->setId($id);
		$resp=$clientePA->cadastrar($cliente);
		if(!$resp){
			echo "<h2>Erro na tentativa de inserir!</h2>";
		}else{
			echo "<h2>Cliente cadastrado com sucesso!</h2>";
		}
	}
?>
</body>
</html>