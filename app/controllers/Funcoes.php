<?php

class Funcoes extends Controller
{
    public function index()
    {
        $funcoesModel = $this->model('Funcao');
        $funcoes = $funcoesModel::BuscarTodasFuncoes();
        
        $this->view('funcionarios/listar_funcoes', $funcoes);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            $funcaoModel = $this->model("Funcao");
            $funcaoModel::AddorUpdate($id, $nome);

            header('Location: /funcoes');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
