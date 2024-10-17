<?php

class Departamento
{
    public static function BuscarTodosDepartamentos()
    {
        return Database::query("SELECT id, nome FROM departamentos");
    }

    public static function AddorUpdate($id, $nome)
    {
        if ($id) {
            return Database::query("UPDATE departamentos SET nome='$nome' WHERE id=$id");
        } else {
            return Database::query("INSERT INTO departamentos(nome) VALUES('$nome')");
        }
    }
}
