<?php

class Departamentos extends Controller
{
    public function index()
    {
        $departametoModel = $this->model('Departamento');
        $departamentos = $departametoModel::BuscarTodosDepartamentos();
        
        $this->view('funcionarios/listar_departamentos', $departamentos);
    }
}
