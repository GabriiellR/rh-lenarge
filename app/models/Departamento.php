<?php

class Departamento
{
    public static function BuscarTodosDepartamentos()
    {
        return Database::query("SELECT id, nome FROM departamentos");
    }
}
