<?php

class Emocionometro
{
    public static function AddorUpdate($setor_id, $emocao, $descricaoEmocao)
    {
        return Database::query("INSERT INTO emocionometro(setor_id, emocao, descricao_emocao, data_resposta) 
                                                         VALUES ($setor_id, $emocao, '$descricaoEmocao', NOW())");
    }
}
