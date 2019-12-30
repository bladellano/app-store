<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>App Store</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

	<link rel="stylesheet" href="assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

</head>

<body>

	<div class="container">

		<p class="display-4 text-center">App Store</p>

		<div class="row" ng-app="myModulos" ng-controller="modulos-controller">

			<div class="col-md-3" ng-repeat="modulo in modulos">
				<div class="card-wrap-modulo">
					<div class="card-head">{{modulo.categoria}}</div>
					<div class="card-display" style="background-color:{{modulo.bgcolor}}">
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

	<script src="assets/js/main.js"></script>

	<script>
		var app = angular.module('myModulos', []);
		app.controller('modulos-controller', function($scope, $http,$location,$window) {
			$scope.modulos = [];

			$http({
				method: 'GET',
				url   : 'modulos'
			}).then(function successCallback(response) {
				$scope.modulos = response.data;
			}, function errorCallback(response) {
				alert(response);
			});

			$scope.showModulo = function(_modulo){
			$window.location.href = 'modulo/'+_modulo.cod_modulo;

			}

		});
	</script>

</body>
</html>
