<?php

class Segmentos extends Controller
{
    public function index()
    {
        $departametoModel = $this->model('Segmento');
        $departamentos = $departametoModel::BuscarTodosSegmentos();
        
        $this->view('funcionarios/listar_segmentos', $departamentos);
    }
}
