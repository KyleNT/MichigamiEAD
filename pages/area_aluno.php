<div class="box container">
<h3>Seja bem vindo! <?php echo $_SESSION['nome_aluno'] ?></h3>

<?php
    
    if(\models\homeModel::hasCursoById($_SESSION['id_aluno'])){
    ?>
    <!--<h3 class="deseja-estudar">Escolha o que estudar hoje: </h3>-->

    <?php
        $modulos = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.modulos`");
		$modulos->execute();
        $modulos = $modulos->fetchAll();
        foreach ($modulos as $key => $value) {
            # code...
    ?>
        <p class="nome_modulo"><i class="fa fa-eye"></i> <?php echo $value['nome']; ?></p>

        <?php
            $aulas = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE modulo_id = ?");
            $aulas->execute([$value['id']]);
            $aulas = $aulas->fetchAll();
            foreach ($aulas as $key => $aula) {
                echo '<p class="nome_aula"><a href="'.INCLUDE_PATH.'aula/'.$aula['id'].'"><i class="fa fa-play"></i> '.$aula['nome'].'</a></p>';
            }
        ?>
    <?php
            }
    ?>
    <?php
    } else {
    ?>
    <h3>Você não é aluno, conheça como é o curso a partir do hino da Suécia: </h3>
    <div class="apresentacao">
            <iframe src="https://www.youtube.com/embed/j7ZYM3HzeR4?autoplay=1&showinfo=0&controls=0&rel=0"></iframe>
    </div>
    <a class="btn-chamada" href="<?php echo INCLUDE_PATH; ?>?addCurso">Comprar o curso</a>
    <?php
    }
?>
</div> <!-- Box -->