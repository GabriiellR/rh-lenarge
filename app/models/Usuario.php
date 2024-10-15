<?php

class Usuario {

    public static function BuscarPorLogin($usuario) {
        return Database::query("SELECT id,
                                       senha, 
                                       nome,
                                       data_admissao
                                  FROM usuarios
                                 WHERE login = '$usuario'");
    }
}

?>