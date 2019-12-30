<?php

require 'inc/config.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
        require_once ("view/_header.php");
        require_once ("view/home.php");
        require_once ("view/_footer.php");
    }
);

$app->post(
    '/modulo',
    function () {

     $data = json_decode(file_get_contents("php://input"), true);   

     $data['success'] = false; /* Redireciona para página principal */

     $sql = new Sql();
     
     $existModuloAtivo = $sql->select("SELECT * FROM modulos_ativos WHERE cod_modulo = {$data['cod_modulo']} AND cod_cliente = {$data['cod_cliente']}");
     if(count($existModuloAtivo) == 0 ){
        $sql->insert("INSERT INTO modulos_ativos (cod_modulo,cod_cliente,status) VALUES ({$data['cod_modulo']},{$data['cod_cliente']},1)");
        $data['success'] = true; 
    } else {
        $status  =  $data['status'] == 0 ? 1 : 0;
        $sql->update("UPDATE modulos_ativos SET status = $status WHERE cod_cliente = {$data['cod_cliente']} AND cod_modulo = {$data['cod_modulo']}");
        $data['success'] = true; 
    }

    echo json_encode($data);   
}
);


$app->get('/mod',function(){

    $sql = new Sql();

    $array = $sql->select("SELECT * FROM modulos_ativos WHERE cod_cliente = 123 ");

    echo json_encode($array[0]);

});

$app->get(
  '/modulo-:cod',
  function ($cod) {

    $sql = new Sql();
    $aModulo = $sql->select("SELECT * FROM modulos WHERE cod_modulo = $cod");

    for($i = 0; $i < count($_SESSION['aModulos']) ; $i++){
      if($_SESSION['aModulos'][$i]['cod_modulo'] == $cod){
        $currentModulo = $_SESSION['aModulos'][$i];
    }
}

require_once ("view/_header.php");
require_once ("view/modulo.php");
require_once ("view/_footer.php");

}
);

$app->get(
    '/modulos',
    function () {

        unset($_SESSION['aModulos']);
        
        $cod_cliente = 123; /* Cod cliente para teste. */

        $sql = new Sql();
        $aModulos = $sql->select("SELECT * FROM modulos");

        $aModulosAtivosUsuario = $sql->select("SELECT * FROM modulos_ativos WHERE cod_cliente = $cod_cliente");

        $arrayCodModulos = array();
        foreach ($aModulosAtivosUsuario as $ativosModulos) {/* Cria um array somente com cod_modulos ativos para o cliente */
            $arrayCodModulos[$ativosModulos['cod_modulo']] = array("status" => $ativosModulos['status']);
        }

        foreach ($aModulos as &$modulo) {/* Modifica o array, acrescenta mais chaves com informações */

          $modulo['cod_cliente'] = $cod_cliente;

          if($modulo['preco']== 0){
              $modulo['frase_preco'] = 'Gratuito';
          } else {              
              $modulo['frase_preco'] = "+ R$ ".$modulo['preco']." por colaborador por mês";
          }
          if (array_key_exists($modulo['cod_modulo'], $arrayCodModulos)) {
            $modulo['btn_status'] = $arrayCodModulos[$modulo['cod_modulo']]['status'] == 0 ? 'Ativar' : 'Desativar';
            $modulo['status']     = $arrayCodModulos[$modulo['cod_modulo']]['status'];
        } else {
            $modulo['btn_status'] = 'Contratar';
            $modulo['status']     = '';
        }
    }
    $_SESSION['aModulos'] = $aModulos;/* Seta uma sessão */

    echo json_encode($aModulos);
}
);

$app->run();
