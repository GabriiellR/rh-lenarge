<?php 
class Funcao {
    public static function BuscarTodasFuncoes(){
        return Database::query("SELECT id, nome FROM funcoes");
    }
}