// JavaScript Document
var app = angular.module("sa_app", []);
app.controller("controller", function($scope, $http) {
    $scope.btnName = "Cadastrar";
    $scope.insert = function() {
        if ($scope.motorista == null) {
            alert("Informe o motorista");
        } else if ($scope.passageiro == null) {
            alert("Informe o passageiro");
        } else if ($scope.vlcorrida == null) {
            alert("Informe o valor da corrida");
        } else {
            $http.post(
                "config/insertcorr.php", {
                    'motorista': $scope.motorista,
                    'passageiro': $scope.passageiro,
                    'vlcorrida': $scope.vlcorrida,
                    'btnName': $scope.btnName,
                    'id': $scope.id
                }
            ).success(function(data) {
                alert(data);
                $scope.motorista = null;
                $scope.passageiro = null;
                $scope.vlcorrida = null;
                $scope.btnName = "Cadastrar";
                $scope.show_data();
            });
        }
    }
    $scope.show_data = function() {
        $http.get("config/displaycorr.php")
            .success(function(data) {
                $scope.names = data;
            });
    }
    $scope.update_data = function(id, motorista, passageiro, vlcorrida) {
        $scope.id = id;
        $scope.motorista = motorista;
        $scope.passageiro = passageiro;
        $scope.vlcorrida = vlcorrida;
        $scope.btnName = "Atualizar";
    }
    $scope.delete_data = function(id) {
        if (confirm("Deseja realmente deletar?")) {
            $http.post("config/deletecorr.php", {
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