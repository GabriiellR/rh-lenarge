<?php

class Setores extends Controller
{
    public function index()
    {
        $setoresModel = $this->model('Setor');
        $setores = $setoresModel::BuscarTodosSetores();
        
        $this->view('funcionarios/listar_setores', $setores);
    }
}
