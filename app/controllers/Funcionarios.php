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

            $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
            $nome = $_POST['nome'];
            $data_admissao = $_POST['data_admissao'];
            $departamento = $_POST['departamento'];
            $segmento = $_POST['segmento'];
            $setor = $_POST['setor'];
            $subsetor = $_POST['subsetor'];
            $funcao = $_POST['funcao'];
            $gestor = $_POST['gestor'];
            $ativo = $_POST['ativo'];
            $redefinir_senha = $_POST['redefinir_senha'];

            //TODO: SE TIVER DEFINICAO DE ID, VERIFICAR SENHA SE NAO APENAS SALVAR NOVO USUARIO

            if ($gestor == $_SESSION['user']['id']) throw new Error("O usuário não pode ser gestor de si mesmo");


            $usuarioModel = $this->model("Usuario");
            $usuarioModel::AddorUpdate($id, $nome, $data_admissao, $departamento, $segmento, $setor, $subsetor, $funcao, $gestor, $ativo, $redefinir_senha);

            header('Location: /funcionarios/listar_funcionarios');
        } else {
            http_response_code(405);
            echo "Método não permitido";
        }
    }
}
