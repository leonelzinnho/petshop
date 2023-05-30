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


