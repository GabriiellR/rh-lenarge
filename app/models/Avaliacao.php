<?php

class Avaliacao
{
    public static function BuscarTodasAvaliacoes()
    {
        return Database::query("SELECT id, titulo FROM avaliacoes");
    }

    public static function BuscarDetalhesAvaliacao($avaliacao_id) {
        return Database::query("SELECT * FROM avaliacoes WHERE id = $avaliacao_id");
    }

    public static function AddorUpdate($id, $nome)
    {
        // if ($id) {
        //     return Database::query("UPDATE departamentos SET nome='$nome' WHERE id=$id");
        // } else {
        //     return Database::query("INSERT INTO departamentos(nome) VALUES('$nome')");
        // }
    }
}
