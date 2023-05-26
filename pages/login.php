<?php
require_once 'cabecalho.php';
?>
<form action="/login" method="POST" class="login">
	<h1>Login</h1>
	<p>Digite o nome de usuário:</p>
	<p><input type="text" name="nome" size="30" maxlength="30" pattern="[a-zA-Z_\s0-9]{1,30}" required></p>
	<p>Senha:</p>
	<p><input type="password" name="senha" size="10" maxlength="10" pattern="[a-zA-Z0-9_]{1,10}" required></p>
	<p><input type="submit" name="botao" value="Logar">	
</form>

</body>
</html>