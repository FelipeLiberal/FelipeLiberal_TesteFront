<!doctype html>
<html>
<head>
<meta charset="UTF-8"> 
<title>Cadastro de Motoristas</title>  
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript" src="js/motoconfig.js"></script>
</head>  
<body>  
<div class="col-md-12">
	<h3 align="center">Cadastro de Motoristas</h3>
	<div ng-app="sa_app" ng-controller="controller" ng-init="show_data()">
		<div class="col-md-6">
		   	<label>Nome</label>
            <input type="text" name="nome" ng-model="nome" class="form-control">
            <br/>
            <label>Data de Nascimento</label>
            <input type="text" name="datanasc" id="datanasc" placeholder="dd/mm/aaaa" ng-model="datanasc" class="form-control">
            <br/>
            <label>CPF</label>
            <input type="text" name="cpf" id="cpf" ng-model="cpf" class="form-control">
            <br/>
			<label>Modelo do Carro</label>
            <input type="text" name="mcar" ng-model="mcar" class="form-control">
            <br/>
			<label>Status</label>
            <select name="status" ng-model="status" class="form-control">
            	<option value="Ativo">Ativo</option>
    			<option value="Inativo">Inativo</option>
            </select>
            <br/>
			<label>Sexo</label><br>
			<input type="radio" name="sexo" value="Masculino" ng-model="sexo" checked> Masculino<br>
			<input type="radio" name="sexo" value="Feminino" ng-model="sexo"> Feminino<br>
			<input type="radio" name="sexo" value="Outro" ng-model="sexo"> Outro<br><br>
            <br/>
            <input type="hidden" ng-model="id">
            <input type="submit" name="insert" class="btn btn-primary" ng-click="insert()" value="{{btnName}}">
		</div>
        <div class="col-md-6">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>CPF</th>
					<th>Modelo do Carro</th>
					<th>Status</th>
					<th>Sexo</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
                <tr ng-repeat="x in names">
                    <td>{{x.id}}</td>
                    <td>{{x.nome}}</td>
                    <td>{{x.datanasc}}</td>
                    <td>{{x.cpf}}</td>
					<td>{{x.mcar}}</td>
					<td>{{x.status}}</td>
					<td>{{x.sexo}}</td>
                    <td>
                        <button class="btn btn-success btn-xs" ng-click="update_data(x.id, x.nome, x.datanasc, x.cpf, x.mcar, x.status, x.sexo)">
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
 