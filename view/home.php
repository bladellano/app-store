<div class="container" ng-app="myModulos" ng-controller="modulos-controller">

	<p class="display-4 text-center">{{appName}}</p>

	<div class="row"  >

		<div class="col-md-3" ng-repeat="modulo in modulos">
			<div class="card-wrap-modulo">
				<div class="card-head">{{modulo.categoria}}</div>
				<div class="card-display" ng-style="{'background-color':modulo.bgcolor}">
					<i class="{{modulo.fontawesome}}"></i>
				</div>
				<div class="card-body">
					<h3>{{modulo.nome_modulo}}</h3>
					<p>{{modulo.frase_preco}}</p>
					<a ng-click="showModulo(modulo)" class="btn btn-success">{{modulo.btn_status}}</a>
				</div>
			</div>
		</div>

	</div> <!--row-->
</div>	<!--container-->

<script>
	var app = angular.module('myModulos', []);
	app.controller('modulos-controller', function($scope, $http, $window) {
		
		$scope.appName = "App Store";

		$scope.modulos = [];

		$http({
			method: 'GET',
			url   : 'modulos'
		}).then(function successCallback(response) {
			$scope.modulos = response.data;
		}, function errorCallback(response) {
			alert(response);
		});

		/* Avança para tela de módulo */
		$scope.showModulo = function(_modulo){
			$window.location.href = 'modulo-'+_modulo.cod_modulo;

		}

	});
</script>

