<?php

class Segmentos extends Controller
{
    public function index()
    {
        $departametoModel = $this->model('Segmento');
        $departamentos = $departametoModel::BuscarTodosSegmentos();
        
        $this->view('funcionarios/listar_segmentos', $departamentos);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            $segmentoModel = $this->model("Segmento");
            $segmentoModel::AddorUpdate($id, $nome);

            header('Location: /segmentos');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
