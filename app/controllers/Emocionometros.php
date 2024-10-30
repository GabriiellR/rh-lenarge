<?php

class Emocionometros extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $setorModel = $this->model("Setor");
        $setores = $setorModel->BuscarTodosSetores();

        $data = [
            "setores" => $setores
        ];

        $this->view('emocionometro/index', [$data]);
    }

    public function listar_emocoes(){

        $emocoesModel = $this->model('Emocionometro');
        $emocoes = $emocoesModel::ListarEmocoes();


        return $this->view('funcionarios/listar_emocoes', $emocoes);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            try {
                $setor = $_POST['setor'];
                $emocao = $_POST['emocao'];
                $descricaoEmocao = $_POST['descricaoEmocao'];

                $emocionometroModel = $this->model("Emocionometro");
                $emocionometroModel::AddorUpdate($setor, $emocao, $descricaoEmocao);

                header('Location: /emocionometro');
            } catch (Exception $error) {
                $data = ["message" => $error->getMessage()];
                echo json_encode($data);
                http_response_code(500);
            }
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
