<?php
class Login extends Controller
{
    public function Autenticar()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
                header('Location: /login');
                exit(); 
            }
        } else {
            http_response_code(405); 
            echo "Método não permitido";
        }
    }

    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION["user"])) {
            header('Location: /home');
            exit(); 
        }

        $this->view('login/index', []);
    }

    public function logoff()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
        }

        header('Location: /login');
        exit();
    }
}
