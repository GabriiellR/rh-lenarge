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

      

        $data = [
            'usuarios' => $usuarios,
            'departamentos' => $departamentos
        ];

        $this->view("funcionarios/listar_funcionarios", $data);
    }
}
