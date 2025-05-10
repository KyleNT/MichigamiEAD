<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Adicionar Aula</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
                $nome = $_POST['nome'];
				$modulo_id = $_POST['modulo_id'];
				$link = $_POST['link_aula'];

                if($nome == '' || $link == ''){
                    Painel::alert('erro','Você precisa preencher todos os campos!');
                } else {
                     $sql = \MySql::conectar()->prepare("INSERT INTO `tb_admin.aulas` VALUES (null,?,?,?)");
                     $sql->execute(array($nome, $modulo_id, $link));
                       Painel::alert('sucesso','A aula foi cadastrada com sucesso!');

                       //ALTER TABLE tablename AUTO_INCREMENT = 1
                }
			}
		?>

		<div class="form-group">
			<label>Nome da Aula:</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<label> Selecione o módulo: </label>
			<select name="modulo_id">
				<?php
					$modulos = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.modulos`");
					$modulos->execute();
					$modulos = $modulos->fetchAll();
					foreach ($modulos as $key => $value) {
						# code...
				?>
					<option value="<?php echo $value['id'] ?>"><?php echo $value['nome'] ?></option>
				<?php
					}
				?>
			</select>
		</div><!--form-group-->

		<div class="form-group">
			<label> Link da Aula para o iframe: </label>
			<input type="text" name="link_aula">
		</div>

		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value="tb_admin.aulas" />
			<input type="submit" name="acao" value="Cadastrar Aula!">
		</div><!--form-group-->

	</form>

</div><!--box-content-->