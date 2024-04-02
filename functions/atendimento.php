<?php

include_once("../includes/autoload.php");

// Verifica se a requisição é POST e se os dados foram recebidos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['funcao']) && $_POST['funcao'] == 'alterar_status_atendimento') {
        // Verifica se os parâmetros esperados foram recebidos
        if (isset($_POST['id']) && isset($_POST['status'])) {
            $id = $_POST['id'];
            $status = $_POST['status'];

            // Atualiza o status do atendimento
            $tabela = 'atendimento'; // Substitua pelo nome da tabela do seu banco de dados
            $valores = array('status' => $status); // Array associativo com o campo e valor a serem atualizados
            $where = "id = $id"; // Condição WHERE para identificar o registro a ser atualizado

            // Chama a função update para realizar a atualização
            if (update($tabela, $valores, $where)) {
                http_response_code(200);
                echo json_encode(array("message" => "Status do atendimento atualizado com sucesso!"));
            } else {
                http_response_code(500);
                echo json_encode(array("message" => "Falha ao atualizar o status do atendimento."));
            }
            exit(); // Termina o script após enviar a resposta
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Parâmetros inválidos."));
            exit();
        }
    } elseif (isset($_POST['funcao']) && $_POST['funcao'] == 'confirmar_atendimento') {
        // Verifica se os parâmetros esperados foram recebidos
        if (isset($_POST['coluna']) && isset($_POST['id'])) {
            $id = $_POST['id'];
            $coluna = $_POST['coluna'];

            // Atualiza o status do atendimento
            $tabela = 'atendimento'; // Substitua pelo nome da tabela do seu banco de dados
            $valores = array($coluna => 'O', 'status' => '0'); // Array associativo com o campo e valor a serem atualizados
            $where = "id = $id"; // Condição WHERE para identificar o registro a ser atualizado

            // Chama a função update para realizar a atualização
            if (update($tabela, $valores, $where)) {
                http_response_code(200);
                echo json_encode(array("message" => "Status do atendimento atualizado com sucesso!"));
            } else {
                http_response_code(500);
                echo json_encode(array("message" => "Falha ao atualizar o status do atendimento."));
            }
            exit(); // Termina o script após enviar a resposta
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Parâmetros inválidos."));
            exit();
        }
    } else {
        http_response_code(400);
        echo json_encode(array("message" => "Função desconhecida."));
        exit();
    }
} else {
    http_response_code(405);
    echo json_encode(array("message" => "Método de requisição inválido."));
    exit();
}

?>