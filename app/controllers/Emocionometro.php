<?php

class Emocionometro extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $this->view('emocionometro/index', []);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            $departamentoModel = $this->model("Emocionometro");
            $departamentoModel::AddorUpdate($id, $nome);

            header('Location: /emocionometro');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
