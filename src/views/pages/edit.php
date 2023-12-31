<?php $render('header'); ?>

<h2>Editar Novo Usuario</h2>

<form action="<?=$base?>/jogo/<?=$usuario['id'];?>/editar" method="POST">
        <label>
            Nome:<br/>
            <input type="text" name="nome" value="<?= $usuario['nome'] ?>">
        </label><br/><br/>

        <label>
            E-mail:<br/>
            <input type="text" name="email" value="<?= $usuario['email'] ?>">
        </label><br/><br/>
    <input type="submit" value="Salvar">

</form>

<?php $render('footer'); ?>