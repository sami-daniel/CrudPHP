<?php
    include '../models/Conexao.class.php';
    include '../models/Manager.class.php';
    $manager = new Manager();
    if(!empty($_POST)) {
        $manager->insert_client($_POST);
        header("Location: ../index.php?cod=1");
    }
?>