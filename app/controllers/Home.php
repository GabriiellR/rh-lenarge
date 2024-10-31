<?php
class Home extends Controller
{

    public function index()
    {

        $this->view('home/index', []);
    }

    public function Listar_avaliacoes_cadastradas()
    {

        $avaliacaoModel = $this->model("Avaliacao");
        $avaliacoes = $avaliacaoModel::BuscarTodasAvaliacoes();

        $this->view('home/listar_avaliacoes_cadastradas', $avaliacoes);
    }

    public function Detalhes_avaliacao($avaliacao_id = null)
    {

        if ($avaliacao_id) {
            $avaliacaoModel = $this->model("Avaliacao");
            $detalhes_avaliacao = $avaliacaoModel::BuscarDetalhesAvaliacao($avaliacao_id);
        }

        $this->view('home/detalhes_avaliacao', $detalhes_avaliacao);
    }
}
