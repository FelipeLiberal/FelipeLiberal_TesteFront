<?php
	include_once("config/conexao.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Cadastro de Corridas</title>  
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript" src="js/corrconfig.js"></script>  
</head>  
<body>  
<div class="col-md-12">
	<h3 align="center">Cadastro de Corridas</h3>
	<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">
		<div class="col-md-6">
		   	<label>Motorista</label>
            <select name="motorista" ng-model="motorista" class="form-control">
                <?php
					$result_motoristas = "SELECT nome FROM tb_motorista WHERE status = 'Ativo'";
					$resultado_motoristas = mysqli_query($conn, $result_motoristas);
					while($row_motoristas = mysqli_fetch_assoc($resultado_motoristas)){ ?>
                    	<option value="<?php echo $row_motoristas['nome']; ?>"><?php echo $row_motoristas['nome']; ?>
                        </option><?php 
					}?>
            </select>
            <br/>
            <label>Passageiro</label>
            <select name="passageiro" ng-model="passageiro" class="form-control">
                <?php
					$result_passageiros = "SELECT nome FROM tb_passageiro";
					$resultado_passageiros = mysqli_query($conn, $result_passageiros);
					while($row_passageiros = mysqli_fetch_assoc($resultado_passageiros)){ ?>
                    	<option value="<?php echo $row_passageiros['nome']; ?>"><?php echo $row_passageiros['nome']; ?>
                        </option><?php 
					}?>
            </select>
            <br/>
            <label>Valor da Corrida</label>
            <input type="text" name="vlcorrida" placeholder="Informe o valor, separando com vírgula os centavos" ng-model="vlcorrida" class="form-control">
            <br/>
            <input type="hidden" ng-model="id">
            <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
		</div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Motorista</th>
                    <th>Passageiro</th>
                    <th>Valor da Corrida</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
                <tr ng-repeat="x in names">
                    <td>{{x.id}}</td>
                    <td>{{x.motorista}}</td>
                    <td>{{x.passageiro}}</td>
                    <td>{{x.vlcorrida}}</td>
                    <td>
                        <button class="btn btn-success btn-xs" ng-click="update_data(x.id, x.motorista, x.passageiro, x.vlcorrida)">
                            <span class="glyphicon glyphicon-edit"></span> Editar
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger btn-xs" ng-click="delete_data(x.id )">
                            <span class="glyphicon glyphicon-trash"></span> Deletar
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>  
</html>  