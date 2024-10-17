<?php

class Segmento
{
    public static function BuscarTodosSegmentos()
    {
        return Database::query("SELECT id, nome FROM segmentos");
    }

    public static function AddorUpdate($id, $nome)
    {
        if ($id) {
            return Database::query("UPDATE segmentos SET nome='$nome' WHERE id=$id");
        } else {
            return Database::query("INSERT INTO segmentos(nome) VALUES('$nome')");
        }
    }
    
}
