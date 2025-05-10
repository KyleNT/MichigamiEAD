<div class="box-content">
	<h2><i class="fa fa-pencil"></i> Adicionar Aluno</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
			
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                if($nome == '' || $email == '' || $senha == ''){
                    Painel::alert('erro','Você precisa preencher todos os campos!');
                } else {
                     $sql = \MySql::conectar()->prepare("INSERT INTO `tb_admin.alunos` VALUES (null,?,?,?)");
                     $sql->execute(array($nome, $email, $senha));
                       Painel::alert('sucesso','O aluno foi realizado com sucesso!');

                       //ALTER TABLE tablename AUTO_INCREMENT = 1
                }
			}
		?>

		<div class="form-group">
			<label>Nome do Aluno:</label>
			<input type="text" name="nome">
		</div><!--form-group-->

		<div class="form-group">
			<label>Senha:</label>
			<input type="password" name="senha">
		</div><!--form-group-->

		<div class="form-group">
			<label>E-mail: </label>
			<input type="text" name="email">
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="order_id" value="0">
			<input type="hidden" name="nome_tabela" value="tb_admin.alunos" />
			<input type="submit" name="acao" value="Cadastrar Aluno!">
		</div><!--form-group-->

	</form>



</div><!--box-content-->