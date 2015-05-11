<h1>Atualizar Usuario</h1>

<?php echo ($msg) ? $msg : ''; ?>

<form action="" method="POST">
    Username<input type="text" value="<?php echo $usuario['USERNAME'] ?>" name="username"><br>
    Senha<input type="password" value="<?php echo $usuario['SENHA'] ?>" name="senha"><br>
    Email<input type="email" value="<?php echo $usuario['EMAIL'] ?>" name="email"><br>
    <input type="submit" value="Atualizar"> 
</form>
<br>
<a href="index.php?controller=UsuarioController&action=listar">Voltar para listagem</a>