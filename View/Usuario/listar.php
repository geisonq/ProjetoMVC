<h1>Lista Usuario</h1>

<table>
    <tr>
        <td>Id</td>
        <td>Usuario</td>
        <td>Email</td>
        <td></td>
    </tr>
    
 
<?php foreach ($usuarios as $usuario) : ?>
        
      <tr>
          <td><?php echo $usuario['ID'] ?></td>
          <td><?php echo $usuario['USERNAME'] ?></td>
          <td><?php echo $usuario['EMAIL'] ?></td>
          <td></td>
      </tr>

 <?php endforeach; ?>

</table>
<br>
<a href="index.php?controller=UsuarioController&action=inserir">Cadastrar Usuario</a>