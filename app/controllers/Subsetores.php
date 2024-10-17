<?php

class Subsetores extends Controller
{
    public function index()
    {
        $subsetoresModel = $this->model('SubSetor');
        $subsetores = $subsetoresModel::BuscarTodosSubSetores();
        
        $this->view('funcionarios/listar_subsetores', $subsetores);
    }
}
