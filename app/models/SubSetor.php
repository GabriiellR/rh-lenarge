<?php 

class SubSetor {

    public static function BuscarTodosSubSetores(){
        return Database::query("SELECT id, nome FROM subsetores");
    }

    public static function AddorUpdate($id, $nome)
    {
        if ($id) {
            return Database::query("UPDATE subsetores SET nome='$nome' WHERE id=$id");
        } else {
            return Database::query("INSERT INTO subsetores(nome) VALUES('$nome')");
        }
    }
}