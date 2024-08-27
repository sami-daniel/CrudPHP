<?php
    include "./Conexao.class.php";
    
    class Manager extends Conexao {
        public function insert_client($data) 
        {
            $pdo = parent::get_instance();
            
            $sql = "INSERT INTO
                        client
                    VALUES
                    (DEFAULT, :name, :email, :cpf, :birth, :phone, :address);";
            
            $statement = $pdo->prepare($sql);

            foreach ($data as $key => $value) 
            {
                $statement->bindValue(":$key", $value);
            }

            $statement->execute();
        }

        public function list_client(){
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM client ORDER BY id ASC";
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();
        }

        public function delete_client($id)
        {
            $pdo = parent::get_instance();
            $sql = "DELETE FROM client WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
        }

        public function list_client_by_id($id){
            $pdo = parent::get_instance();
            $sql = "SELECT * FROM client WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
            
            return $statement->fetchAll();
        }

        public function update_client ($data){
            $pdo = parent::get_instance();

            $sql = "UPDATE client
                    SET
                    name = :name,
                    email = :email,
                    cpf = :cpf,
                    birth = :birth,
                    phone = :phone,
                    address = :address
                    WHERE id = :id";
            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }  

            $statement->execute();

        }
    }
?>