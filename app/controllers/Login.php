<?php

class Login extends Controller
{
    public function Logar($usuario, $senha)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {


            $usuario = $this->model("Usuario");
            $informacoesUser = $usuario::Autenticar($usuario, $senha);

            if ($informacoesUser) {
                $_SESSION['user'] = $informacoesUser;
                header('Location: /inicio');
                exit();
            } else {
                $_SESSION['erro_autenticacao'] = "Usuário ou senha incorretos.";
            }
        }
    }

    public function index()
    {
        $this->view('login/index', []);
    }
}
