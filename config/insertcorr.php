<?php
$conn = mysqli_connect("localhost", "root", "root", "felipesilva");
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
    $motorista  = mysqli_real_escape_string($conn, $info->motorista);
    $passageiro = mysqli_real_escape_string($conn, $info->passageiro);
    $vlcorrida  = mysqli_real_escape_string($conn, $info->vlcorrida);
	$vlcorrida = str_replace(",",".",$vlcorrida); //"Converte" um valor por outro
    $btn_name = $info->btnName;
    if ($btn_name == "Cadastrar") {
        $query = "INSERT INTO tb_corrida(motorista, passageiro, vlcorrida) VALUES ('$motorista', '$passageiro', '$vlcorrida')";
        if (mysqli_query($conn, $query)) {
            echo "Corrida cadastrada com sucesso!";
        } else {
            echo 'Falha ao cadastrar corrida...';
        }
    }
    if ($btn_name == 'Atualizar') {
        $id    = $info->id;
        $query = "UPDATE tb_corrida SET motorista = '$motorista', passageiro = '$passageiro', vlcorrida = '$vlcorrida' WHERE id = '$id'";
        if (mysqli_query($conn, $query)) {
            echo 'Corrida atualizada com sucesso!';
        } else {
            echo 'Falha ao atualizar corrida...';
        }
    }
}
?>