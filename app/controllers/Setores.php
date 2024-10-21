<?php

class Setores extends Controller
{
    public function index()
    {
        $setoresModel = $this->model('Setor');
        $setores = $setoresModel::BuscarTodosSetores();
        
        $this->view('funcionarios/listar_setores', $setores);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            $setorModel = $this->model("Setor");
            $setorModel::AddorUpdate($id, $nome);

            header('Location: /setores');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
