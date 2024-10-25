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

    public static function AddorUpdate($id, $nome)
    {
        if ($id) {
            return Database::query("UPDATE usuarios SET nome='$nome' WHERE id=$id");
        } else {
            return Database::query("INSERT INTO usuarios(nome) VALUES('$nome')");
        }
    }
}
