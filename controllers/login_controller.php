<?php
    include '../models/Conexao.class.php';
    include '../models/User.class.php';
    
    $user = new User();
    if (!empty($_POST['name']) && !empty($_POST['pwd'])) {
        session_start();

        $data = $user->login($_POST['name'], $_POST['pwd']);
        if (!empty($data['name']) && !empty($data['pwd']) && !empty($data['id'])){
            $_SESSION['name'] = $data['name'];
            $_SESSION['id'] = $data['id'];
            var_dump($_SESSION);
            header("Location: ../index.php?cod=5");
        }
        else{
            header("Location: ../index.php?cod=4");
        }
    }
