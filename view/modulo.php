<?php

extract($currentModulo);

$status = empty($currentModulo['status']) && $currentModulo['status'] != '0' ? 'NULL': $currentModulo['status']; 

?>
<p class="display-4 text-center">Contratar Módulo</p>
<div class="container">
    <div class="jumbotron">
        <div class="row" ng-app="myModulos" ng-controller="modulos-controller">
            <div class="col-md-12">
                <div class="custom-card">
                    <div class="card-head"><?=$categoria?></div>
                    <div class="card-body" style="background:<?=$bgcolor?>">
                        <i class="<?=$fontawesome?>"></i>
                    </div>
                </div>
                <div class="card-modulo-info">
                    <h4><?=$nome_modulo?></h4>
                    <p><?=$frase_preco?></p>
                    <a ng-click="changeStatusModuloCliente(<?=$cod_modulo?>,<?=$status?>,<?=$cod_cliente?>)" class="btn btn-success">
                        <?php echo ($btn_status == 'Contratar') ? 'Contratar e ativar o módulo': $btn_status; ?>
                    </a>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->
        <div class="row">
         <div class="col-md-12">
             <p></p>
             <h5>Sobre o módulo</h5>
             <p><?=utf8_decode($descricao)?></p>
         </div>
     </div>
 </div>
</div><!--container-->

<script>
    var app = angular.module('myModulos', []);
    app.controller('modulos-controller', function($scope, $http, $window) {

        $scope.changeStatusModuloCliente = function(_cod_modulo,_status,_cod_cliente){

            $http({
                method: 'POST',
                url   : 'modulo',
                data:JSON.stringify({
                    cod_modulo:_cod_modulo,
                    status:_status,
                    cod_cliente:_cod_cliente
                })
            }).then(function successCallback(response) {
             
                if(response.data.success == true){
                    $window.location.href = "./";
                }

            }, function errorCallback(response) {
                alert(response);
            });

        }

    });
</script>

