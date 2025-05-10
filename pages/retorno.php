<?php
/** TO DO:
 * 1 - Criar o produto da hotmart
 * 2 - Vá no botão gerenciar, e irá ter a referência do curso
 * 3 - Quando a compra é confirmada, é feita a conexão
 * 4 - Vá em API e notificações
 * 5 - Hotmart vai gerar um token, isso tem que ser usado onde que vai ter retorno da hotmart
 * 6 - Hotmart tem uma API com documentação, e o mais importante são hottok, prod e email. também tem status da compra
 * 7 - Vá em no localhost, e crie um arquivo chamado retorno.php
 * 8 - Escreva:
 * 
 * <? php
 *      $tokenHotmart = '1231234'; //Seu id
 *      //Substituir pelo post da hotmart
 *      $hotmartPost = '1231234'; //O ID da hotmart
 *      if(isset($hotmartPost)){
 *          if($tokenHotmart == $hotmartPost){
 *              //O post é da Hotmart
 *              $email = 'alicemargatroid@magic.com'; //Email do Comprador
 *              $status = 'approved'; //Status da hotmart
 *              if($status == 'approved'){
 *                    //Inserrir no banco o acesso ao curso
 *                    //Está em tabela tb_admin.curso_controle
 *              }
 *          }
 *      }
 */

?>