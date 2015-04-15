<h1>Cadastro de Usuario</h1>

<?php echo ($msg) ? $msg : ''; ?>

<form action="index.php?controller=UsuarioController&action=inserir" method="POST">
    Username<input type="text" name="username"><br>
    Senha<input type="password" name="senha"><br>
    Email<input type="email" name="email"><br>
    <input type="submit" value="SALVAR"> 
</form>
<br>
<a href="index.php?controller=UsuarioController&action=listar">Voltar para listagem de usuario</a>
