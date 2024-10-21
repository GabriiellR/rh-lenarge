<?php

class Subsetores extends Controller
{
    public function index()
    {
        $subsetoresModel = $this->model('SubSetor');
        $subsetores = $subsetoresModel::BuscarTodosSubSetores();
        
        $this->view('funcionarios/listar_subsetores', $subsetores);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            $subsetorModel = $this->model("Subsetor");
            $subsetorModel::AddorUpdate($id, $nome);

            header('Location: /subsetores');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
