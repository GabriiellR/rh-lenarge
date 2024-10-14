<?php

class Login extends Controller
{
    public function Logar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $usuario = $this->model("Usuario");

            // Validação das credenciais
            $user = $usuario::Autenticar($username, $password);

            if ($user) {

                $_SESSION['user'] = $user;

                header('Location: /inicio');
                exit();
            } else {
                echo "Usuário ou senha incorretos.";
            }
        }
    }

    public function index(){
        $this->view('login/index', []);
    }
}
