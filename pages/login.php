<?php
require_once 'cabecalho.php';
?>
<form action="/petshop/login" method="POST" class="login">
	<h1>Login</h1>
	<p>Digite o nome de usuário:</p>
	<p><input type="text" name="nome" size="30" maxlength="30" pattern="[a-zA-Z_\s0-9]{1,30}" required></p>
	<p>Senha:</p>
	<p><input type="password" name="senha" size="10" maxlength="10" pattern="[a-zA-Z0-9_]{1,10}" required></p>
	<p><input type="submit" name="botao" value="Logar">	
</form>
<?php
	if(isset($_POST['botao'])){
		require_once './model/Usuario.php';
		require_once './persistence/UsuarioPA.php';
		$usuario=new Usuario();
		$usuarioPA=new UsuarioPA();
		$usuario->setNome($_POST['nome']);
		$usuario->setSenha(md5($_POST['senha']));
		$resp=$usuarioPA->logar($usuario->getNome(),$usuario->getSenha());
		if ($resp) {
			$usuario->logar($usuario);
			echo "<h2>Login com sucesso!</h2>";
			echo "<a href='/petshop/'>Entrar</a>";
		}else{
			echo "<h2>Login ou senha incorretos!</h2>";
		}
	}
?>
</body>
</html>