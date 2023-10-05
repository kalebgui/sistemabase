<?php

require_once 'conexao/conexao.php';

class LoginDAO {

    public $pdo = null;

    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }

    public function login($usuario,$senha) {
        try {
            $sql = "select u.login,u.idusuario,p.descricao from tb_usuario u
                    inner join tb_perfil p on p.idperfil=u.tb_perfil_idperfil
                    where login=? and senha=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuario);
            $stmt->bindValue(2, $senha);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

}

?>
