<?php

class Usuario
{

    public static function BuscarPorLogin($usuario)
    {
        return Database::query("SELECT id,
                                       senha, 
                                       nome,
                                       data_admissao
                                  FROM usuarios
                                 WHERE login = '$usuario'
                                   AND ativo = true");
    }

    public static function BuscarTodosUsuarios()
    {
        return Database::query("SELECT a.id,
                                       a.nome,
                                       a.login,
                                       DATE_FORMAT(a.data_admissao, '%d/%m/%Y') data_admissao,
                                       b.nome departamento,
                                       c.nome funcao,
                                       d.nome segmento,
                                       e.nome setor,
                                       f.nome gestor,
                                       a.administrador,
                                       a.redefinir_senha,
                                       a.ativo
                                  FROM usuarios a
                             LEFT JOIN departamentos b ON b.id = a.departamento_id
                             LEFT JOIN funcoes c ON c.id = a.funcao_id
                             LEFT JOIN segmentos d ON d.id = a.segmento_id
                             LEFT JOIN setores e ON e.id = a.setor_id
                             LEFT JOIN usuarios f ON f.id = a.gestor_id");
    }

    public static function AddorUpdate($id, $nome, $data_admissao, $departamento_id, $segmento_id, $setor_id, $subsetor_id, $funcao_id, $gestor_id, $ativo, $redefinir_senha)
    {
        if ($id) {
            return Database::query("UPDATE usuarios 
                                       SET nome='$nome',
                                           data_admissao='$data_admissao',
                                           departamento_id='$departamento_id',
                                           segmento_id='$segmento_id' ,
                                           setor_id='$setor_id',
                                           subsetor_id='$subsetor_id',
                                           funcao_id='$funcao_id',
                                           gestor_id='$gestor_id',
                                           ativo='$ativo',
                                           redefinir_senha='$redefinir_senha'
                                     WHERE id=$id");
        } else {
            return Database::query("INSERT INTO usuarios(nome, data_admissao, departamento_id, segmento_id, setor_id, subsetor_id, funcao_id, gestor_id, ativo, redefinir_senha)
                                                  VALUES('$nome', '$data_admissao', $departamento_id, $segmento_id, $setor_id, $subsetor_id, $funcao_id, $gestor_id, $ativo, $redefinir_senha)");
        }
    }
}
