<?php
class User extends Conexao{
    public function login(string $username, string $password){
        $pdo = parent::get_instance();

        $query = "SELECT * FROM user WHERE name = :uname AND pwd = :pwd";
        $statement = $pdo->prepare($query);
        $statement->bindValue(":pwd", sha1($password));
        $statement->bindValue(":uname", $username);

        $statement->execute();
        return $statement->fetch();
    }
}
?>