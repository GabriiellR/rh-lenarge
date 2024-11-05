<?php

class QuestaoOpcao
{
    public static function BuscarDetalhesOpcoes($questao_id) {
        return Database::query("SELECT a.id,
                                              a.descricao,
                                              a.correto,
                                              a.questao_id
                                         FROM questao_opcoes a 
                                        WHERE questao_id = $questao_id");
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
