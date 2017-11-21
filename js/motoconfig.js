// JavaScript Document
var app = angular.module("sa_app", []);
app.controller("controller", function($scope, $http) {
    $scope.btnName = "Cadastrar";
    $scope.insert = function() {
        if ($scope.nome == null) {
            alert("Informe o nome");
        } else if ($scope.datanasc == null) {
            alert("Informe a data de nascimento");
        } else if ($scope.cpf == null) {
            alert("Informe o cpf");
        } else if ($scope.mcar == null) {
            alert("Informe o modelo do carro");
        } else if ($scope.status == null) {
            alert("Informe o status");
        } else if ($scope.sexo == null) {
            alert("Informe o sexo");
        } else {
            $http.post(
                "config/insertmoto.php", {
                    'nome': $scope.nome,
                    'datanasc': $scope.datanasc,
                    'cpf': $scope.cpf,
					'mcar': $scope.mcar,
					'status': $scope.status,
					'sexo': $scope.sexo,
                    'btnName': $scope.btnName,
                    'id': $scope.id
                }
            ).success(function(data) {
                alert(data);
                $scope.nome = null;
                $scope.datanasc = null;
                $scope.cpf = null;
				$scope.mcar = null;
				$scope.status = null;
				$scope.sexo = null;
                $scope.btnName = "Cadastrar";
                $scope.show_data();
            });
        }
    }
    $scope.show_data = function() {
        $http.get("config/displaymoto.php")
            .success(function(data) {
                $scope.names = data;
            });
    }
    $scope.update_data = function(id, nome, datanasc, cpf, mcar, status, sexo) {
        $scope.id = id;
        $scope.nome = nome;
        $scope.datanasc = datanasc;
        $scope.cpf = cpf;
		$scope.mcar = mcar;
		$scope.status = status;
		$scope.sexo = sexo;
        $scope.btnName = "Atualizar";
    }
    $scope.delete_data = function(id) {
        if (confirm("Deseja realmente deletar?")) {
            $http.post("config/deletemoto.php", {
                    'id': id
                })
                .success(function(data) {
                    alert(data);
                    $scope.show_data();
                });
        } else {
            return false;
        }
    }
});