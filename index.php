<?php

require 'inc/config.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

$app->get(
    '/',
    function () {
        require_once ("view/home.php");
    }
);

$app->get(
  '/modulo/:cod',
  function ($cod) {

    $sql = new Sql();
    $aModulo = $sql
        ->select("SELECT * FROM modulos WHERE cod_modulo = $cod");

        for($i = 0; $i < count($_SESSION['aModulos']) ; $i++){
          if($_SESSION['aModulos'][$i]['cod_modulo'] == $cod){
            $btn_ativar = $_SESSION['aModulos'][$i]['btn_status'];
          }
        }
      require_once ("view/modulo.php");
      
  }
);

$app->get(
    '/modulos',
    function () {

        unset($_SESSION['aModulos']);
        
        $sql = new Sql();
        $aModulos = $sql
            ->select("SELECT * FROM modulos");

        $aModulosAtivosUsuario = $sql
            ->select("SELECT * FROM modulos_ativos WHERE cod_cliente = 123");
 
        $arrayCodModulos = array();
        foreach ($aModulosAtivosUsuario as $ativosModulos) {/* Cria um array somente com cod_modulos ativos para o cliente */
            $arrayCodModulos[$ativosModulos['cod_modulo']] = array("status" => $ativosModulos['status']);
        }

        foreach ($aModulos as &$modulo) {/* Modifica o array com os módulos, adicionando status no botão */
            if($modulo['preco']== 0){
              $modulo['frase_preco'] = 'Gratuito';
            } else {              
              $modulo['frase_preco'] = "+ R$ ".$modulo['preco']." por colaborador por mês";
            }
            if (array_key_exists($modulo['cod_modulo'], $arrayCodModulos)) {
                $modulo['btn_status'] = $arrayCodModulos[$modulo['cod_modulo']]['status'] == 0 ? 'Ativar' : 'Desativar';
            } else {
                $modulo['btn_status'] = 'Contratar';
            }
        }
        $_SESSION['aModulos'] = $aModulos;
        
        echo json_encode($aModulos);
    }
);

$app->run();
