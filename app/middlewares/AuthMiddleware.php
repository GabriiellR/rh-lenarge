<?php
class AuthMiddleware{
    public static function VerificarSessaoUsuario()
    {
        if (!isset($_SESSION['user'])) {
            // Redireciona para a página de login
            header('Location: /login');
            exit();
        }
    }
}