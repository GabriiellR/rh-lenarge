<?php

class Login extends Controller
{
    public function Autenticar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();

            $login = $_POST['usuario'];
            $senha = $_POST['senha'];

            $UserModel = $this->model("Usuario");

            $informacoesUser = $UserModel::BuscarPorLogin($login);

            if ($informacoesUser && password_verify($senha, $informacoesUser[0]['senha'])) {
                unset($informacoesUser[0]['senha']);
                $_SESSION['user'] = $informacoesUser[0];

                header('Location: /home');
                exit();
            } else {
                $_SESSION['erro_autenticacao'] = "Usuário ou senha incorretos.";
                header('Location: /Login');
            }
        } else {
            http_response_code(500);
            echo "Método não permitido";
        }
    }


    public function logoff()
    {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            session_destroy();
            return $this->view('login/index', []);
        }
    }

    public function index()
    {
        print_r($_SESSION);
        if (isset($_SESSION["user"])) {
            header('Location: home');
            return;
        }

        $this->view('login/index', []);
    }
}
