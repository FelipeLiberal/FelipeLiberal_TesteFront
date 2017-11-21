<?php
$conn = mysqli_connect("localhost", "root", "root", "felipesilva");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $nome     = mysqli_real_escape_string($conn, $info->nome);
    $datanasc = mysqli_real_escape_string($conn, $info->datanasc);
	$datanasc = date("d-m-Y",strtotime(str_replace('/','-',$datanasc))); //"Converte" um valor por outro
    $cpf      = mysqli_real_escape_string($conn, $info->cpf);
	$sexo     = mysqli_real_escape_string($conn, $info->sexo);
    $btn_name = $info->btnName;
    if ($btn_name == "Cadastrar") {
        $query = "INSERT INTO tb_passageiro(nome, datanasc, cpf, sexo) VALUES ('$nome', '$datanasc', '$cpf', '$sexo')";
        if (mysqli_query($conn, $query)) {
            echo "Passageiro cadastrado com sucesso!";
        } else {
            echo 'Falha ao cadastrar passageiro...';
        }
    }
    if ($btn_name == 'Atualizar') {
        $id    = $info->id;
        $query = "UPDATE tb_passageiro SET nome = '$nome', datanasc = '$datanasc', cpf = '$cpf', sexo = '$sexo' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Passageiro atualizado com sucesso!';
        } else {
            echo 'Falha ao atualizar passageiro...';
        }
    }
}
?>