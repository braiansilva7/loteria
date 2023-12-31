<?php $render('headerInicial'); ?>

<a href="<?=$base;?>/sortear" class="novo_jogo">Novo Jogo</a>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>JOGOS</th>
            <th>TIPO DE JOGO</th>
            <th>AÇÕES</th>
        </tr>
        <?php if(!empty($jogos)): ?>
            <?php foreach($jogos as $item): ?>
                <tr>
                    <td><?= $item['id']; ?></td>
                    <td><?= $item['sorteio']; ?></td>
                    <td><?= $item['tipo']; ?></td>
                    <td>
                    <a href="#" onclick="confirmDelete('<?=$item['id'];?>'); return false;">
                        <img width="20" src="<?=$base;?>/assets/images/excluir.png" alt="Excluir">
                    </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="nCadastrado">Nenhum jogo cadastrado!</td>
            </tr>
        <?php endif; ?>
    </table>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Tem certeza?',
            text: 'Tem certeza que deseja excluir?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, excluir!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '<?=$base;?>/jogo/' + id + '/excluir';
            }
        });
    }
</script>

<?php $render('footer'); ?>