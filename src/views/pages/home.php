<?php $render('headerInicial'); ?>

<a href="<?=$base;?>/sortear">Novo Jogo</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>JOGOS</th>
        <th>TIPO DE JOGO</th>
        <th>AÇÕES</th>
    </tr>

    <?php foreach($jogos as $item): ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['sorteio']; ?></td>
            <td><?= $item['tipo']; ?></td>
            <td>
                <a href="<?=$base;?>/jogo/<?=$item['id'];?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                    <img width="20" src="<?=$base;?>/assets/images/excluir.png" alt="">
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>