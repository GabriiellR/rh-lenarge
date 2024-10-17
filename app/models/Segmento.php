<?php

class Segmento
{
    public static function BuscarTodosSegmentos()
    {
        return Database::query("SELECT id, nome FROM segmentos");
    }
}
