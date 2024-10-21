<?php 

class Setor {

    public static function BuscarTodosSetores(){
        return Database::query("SELECT id, nome FROM setores");
    }

    public static function AddorUpdate($id, $nome)
    {
        if ($id) {
            return Database::query("UPDATE setores SET nome='$nome' WHERE id=$id");
        } else {
            return Database::query("INSERT INTO setores(nome) VALUES('$nome')");
        }
    }
}