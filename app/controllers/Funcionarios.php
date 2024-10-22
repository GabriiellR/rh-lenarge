<?php

class Funcionarios extends Controller
{

    public function index()
    {
        $this->view('funcionarios/index', []);
    }

    public function listar_funcionarios()
    {
        $userModel = $this->model("Usuario");
        $usuarios = $userModel::BuscarTodosUsuarios();

        $departametoModel = $this->model('Departamento');
        $departamentos = $departametoModel::BuscarTodosDepartamentos();

        $segmentoModel = $this->model('Segmento');
        $segmentos = $segmentoModel::BuscarTodosSegmentos();

        $setorModel = $this->model('Setor');
        $setores = $setorModel::BuscarTodosSetores();

        $subsetorModel = $this->model('SubSetor');
        $subsetores = $subsetorModel::BuscarTodosSubSetores();

        $funcaoModel = $this->model('Funcao');
        $funcoes = $funcaoModel::BuscarTodasFuncoes();


        $data = [
            'usuarios' => $usuarios,
            'departamentos' => $departamentos,
            'segmentos' => $segmentos,
            'setores' => $setores,
            'subsetores' => $subsetores,
            "funcoes" => $funcoes,
        ];

        $this->view("funcionarios/listar_funcionarios", $data);
    }

    public function AddorUpdate()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = $_POST['id'];
            $nome = $_POST['nome'];

            $funcaoModel = $this->model("Usuario");
            $funcaoModel::AddorUpdate($id, $nome);

            header('Location: /funcionarios');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }


}
