<?php
class AuthMiddleware
{
    public static function VerificarSessaoUsuario()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit();
        }
    }
}
