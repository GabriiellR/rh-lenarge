<?php

class Usuario {

    // Call to the database
    public function Autenticar($usuario, $senha) {
        return Database::query("SELECT testAttribute1, testAttribute2 FROM test");
    }
}

?>