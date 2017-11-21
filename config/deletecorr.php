<?php
$conn = mysqli_connect("localhost", "root", "root", "felipesilva");
$data    = json_decode(file_get_contents("php://input"));
if (count($data) > 0) {
    $id    = $data->id;
    $query = "DELETE FROM tb_corrida WHERE id='$id'";
    if (mysqli_query($conn, $query)) {
        echo 'Corrida deletada com sucesso!';
    } else {
        echo 'Falha ao deletar corrida...';
    }
}
?>