<?php
require_once 'cabecalho.php';

require_once './persistence/UsuarioPA.php';
$usuarioPA=new UsuarioPA();
$tipo=$usuarioPA->retornaTipo($_COOKIE['usuario']);
if (!$tipo) {
	echo "<h2>Tente logar novamente!</h2>";
	echo "<a href='/login'>Login</a>";
}else{
	if ($tipo==1) {
?>
	<div id="topo">
		<div id="logo">
			<img src="../img/logo.jpg">
		</div>
		<div id="menu">
			<ul class="nav">
				<li>Cadastrar
					<ol>
						<li><a href="/cadastrar/cliente" target="janela">Cliente</a></li>
						<li><a href="/cadastrar/pet" target="janela">Pet</a></li>
						<li><a href="/usuario/cadastrar" target="janela">Usuário</a></li>
						<li><a href="/cadastrar/servico" target="janela">Serviço</a></li>
					</ol>
				</li>
				<li>Listar
					




<?php
	}

}

?>
</body>
</html>