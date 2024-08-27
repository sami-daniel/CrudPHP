<?php
    include '../models/Conexao.class.php';
    include '../models/Manager.class.php';
    $manager = new Manager();
    $id = $_POST['id'];
    if (isset($id) && !empty($id)) {
        $manager->delete_client($id);
        header("Location: ../index.php?cod=2");
    }
?>