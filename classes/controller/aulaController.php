<?php
	namespace controller;
	use Painel;
	use \views\mainView;

	class aulaController
	{
        public function index($arg){
            //Validação de Segurança
            if(isset($_SESSION['login_aluno']) == false) {
                \Painel::alertJS("Não está logado!");
                \Painel::redirect(INCLUDE_PATH);
            }else if(\models\homeModel::hasCursoById($_SESSION['id_aluno']) == false){
                \Painel::alertJS("Não tem o curso!");
                \Painel::redirect(INCLUDE_PATH);
            }
            $idAula = $arg[2];
            $aula = \MySql::conectar()->prepare("SELECT * FROM `tb_admin.aulas` WHERE id = ?");
            $aula->execute(array($idAula));

            if($aula->rowCount() == 0)
            {
                \Painel::alertJS("A aula não existe");
                \Painel::redirect(INCLUDE_PATH);
            }
            else{
                $aula = $aula->fetch();
                mainView::render('aula_single.php', $aula);
            }
            
        }
	}
?>