<?php $render('header'); ?>

    <div class="container">

        <div class="megaSena">
            <h1>Mega Sena</h1>
            <?php
                foreach($megaSena as $number){
                    echo "<input type='text' id='valor' value='$number'>";
                }
                
            ?>
            <form action="<?=$base;?>/novo" method="post">

            <?php
                echo "<input type='text' name='salvarMega' class='ocultoMega' value='" . implode(',', $megaSena) . "'>";
            ?>

            <input type="submit" name="salvar" class="btnSalvar" value="Salvar">
            </form>
        </div>
        <br/>

        <div class="lotoFacil">
        <h1>Lotofácil</h1>
            <?php
                foreach($loto as $number){
                    echo "<input type='text' id='valor' value='$number'>";
                }
                
            ?>
            <form action="<?=$base;?>/novo" method="post">

            <?php
                echo "<input type='text' name='salvarLoto' class='ocultoMega' value='" . implode(',', $loto) . "'>";
   
            ?>

            <input type="submit" name="salvar" class="btnSalvar" value="Salvar">
            </form>
        </div>
        <br/>

        <div class="Quina">
        <h1>Quina</h1>
            <?php
                foreach($quina as $number){
                    echo "<input type='text' id='valor' value='$number'>";
                }
                
            ?>
            <form action="<?=$base;?>/novo" method="post">

            <?php
                echo "<input type='text' name='salvarQuina' class='ocultoMega' value='" . implode(',', $quina) . "'>";
 
            ?>

            <input type="submit" name="salvar" class="btnSalvar" value="Salvar">
            </form>
        </div>

        <br/>

        <div class="lotoMania">
        <h1>Lotomania</h1>
            <?php
                foreach($lotomania as $number){
                    echo "<input type='text' id='valor' value='$number'>";
                }
                
            ?>
            <form action="<?=$base;?>/novo" method="post">

            <?php
                echo "<input type='text' name='salvarMania' class='ocultoMega' value='" . implode(',', $lotomania) . "'>";
            ?>

            <input type="submit" name="salvar" class="btnSalvar" value="Salvar">
            </form>

        </div>
        <br/><br/>
    </div>

    <div class="container">
        <a href="<?=$base;?>/sortear"><input type="submit" name="sortear" class="sortear" value="Sortear"></a>
        <a href="<?=$base;?>/"><input type="submit" name="listar" class="sortear" value="Listar Jogos"></a>

    </div>

<?php $render('footer'); ?>