<?php

class Emocionometro
{
    public static function AddorUpdate($setor_id, $emocao, $descricaoEmocao)
    {
        return Database::query("INSERT INTO emocionometro(setor_id, emocao, descricao_emocao, data_resposta) 
                                                         VALUES ($setor_id, $emocao, '$descricaoEmocao', NOW())");
    }

    public static function ListarEmocoes(){
        return Database::query("SELECT a.id,
                                       a.setor_id,
                                       a.emocao,
                                       a.descricao_emocao,
                                       b.nome setor,
                                       DATE_FORMAT(a.data_resposta, '%d/%m/%Y') data
                                  FROM emocionometro a
                             LEFT JOIN setores b ON a.setor_id = b.id");
    }
}
