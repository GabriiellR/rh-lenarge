<?php

class AvaliacaoQuestao
{

    public static function BuscarDetalhesQuestoes($avaliacao_id) {
        return Database::query("SELECT b.id,
                                              b.pergunta
                                         FROM avaliacao_questoes a 
                                    LEFT JOIN questoes b ON a.questao_id = b.id
                                        WHERE avaliacao_id = $avaliacao_id");
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
