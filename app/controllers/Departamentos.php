<?php

class Departamentos extends Controller
{
    public function index()
    {
        $departametoModel = $this->model('Departamento');
        $departamentos = $departametoModel::BuscarTodosDepartamentos();

        $this->view('funcionarios/listar_departamentos', $departamentos);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            $departamentoModel = $this->model("Departamento");
            $departamentoModel::AddorUpdate($id, $nome);

            header('Location: /departamentos');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
