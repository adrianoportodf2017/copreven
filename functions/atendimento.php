<?php

include_once("../includes/autoload.php");

// Verifica se a requisição é POST e se os dados foram recebidos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['funcao']) && $_POST['funcao'] == 'alterar_status_atendimento') {
        // Verifica se os parâmetros esperados foram recebidos
        // Verifica se os parâmetros esperados foram recebidos
        if (isset($_POST['id']) && isset($_POST['status'])) {
            $id = $_POST['id'];
            $status = $_POST['status'];
            $consultorio = $_POST['consultorio'];

            // Consulta o status atual do atendimento
            $consultar_status = select('atendimento', 'status', "WHERE id=$id");

            // Verifica se a consulta foi bem sucedida
            if ($consultar_status['0'] !== false) {
                // Verifica se o status atual é diferente de 1 (em atendimento)
                if ($consultar_status['0']['status'] != '1') {
                    // Atualiza o status do atendimento
                    $tabela = 'atendimento'; // Substitua pelo nome da tabela do seu banco de dados
                    $valores = array('status' => $status, 'consultorio_atendimento' => $consultorio); // Array associativo com o campo e valor a serem atualizados
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
                    echo json_encode(array("message" => "O paciente já está em atendimento."));
                    exit();
                }
            } else {
                http_response_code(500);
                echo json_encode(array("message" => "Falha ao consultar o status do atendimento."));
                exit();
            }
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "Parâmetros inválidos."));
            exit();
        }
    } elseif (isset($_POST['funcao']) && $_POST['funcao'] == 'confirmar_atendimento') {
        // Verifica se os parâmetros esperados foram recebidos
        if (isset($_POST['consultorio']) && isset($_POST['id'])) {
            $id = $_POST['id'];
            $consultorio = $_POST['consultorio'];
            $consultar_status = select('atendimento', '*', "WHERE id=$id");
            $consultar_status = $consultar_status['0'];

            if ($consultar_status['status'] == '1' &&   $consultorio ==  $consultar_status['consultorio_atendimento']) {
                // Atualiza o status do atendimento
                $tabela = 'atendimento'; // Substitua pelo nome da tabela do seu banco de dados
                $valores = array($consultorio => 'O', 'status' => '0', 'consultorio_atendimento' => ''); // Array associativo com o campo e valor a serem atualizados
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
                echo json_encode(array("message" => "Paciente está com Atendimento em aberto em outra sala, por favor entre em contato com o Atendimento."));
                exit();
            }
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
