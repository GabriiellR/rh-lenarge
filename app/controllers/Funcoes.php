<?php

class Funcoes extends Controller
{
    public function index()
    {
        $funcoesModel = $this->model('Funcao');
        $funcoe = $funcoesModel::BuscarTodasFuncoes();
        
        $this->view('funcionarios/listar_funcoes', $funcoe);
    }
}
