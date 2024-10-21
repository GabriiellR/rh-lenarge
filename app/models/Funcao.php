<?php 
class Funcao {
    public static function BuscarTodasFuncoes(){
        return Database::query("SELECT id, nome FROM funcoes");
    }

    public static function AddorUpdate($id, $nome)
    {
        if ($id) {
            return Database::query("UPDATE funcoes SET nome='$nome' WHERE id=$id");
        } else {
            return Database::query("INSERT INTO funcoes(nome) VALUES('$nome')");
        }
    }
}