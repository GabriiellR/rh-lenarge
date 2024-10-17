<?php 

class SubSetor {

    public static function BuscarTodosSubSetores(){
        return Database::query("SELECT id, nome FROM subsetores");
    }
}