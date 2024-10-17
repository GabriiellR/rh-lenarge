<?php 

class Setor {

    public static function BuscarTodosSetores(){
        return Database::query("SELECT id, nome FROM setores");
    }
}