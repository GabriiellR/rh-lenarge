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

        if (!$usuarios) {
            throw new Exception("Erro ao buscar os dados dos usuário.");
        }

        $this->view("funcionarios/listar_funcionarios", $usuarios);
    }
}
