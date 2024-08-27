<?php 
include "../models/Conexao.class.php";
include "../models/Manager.class.php";

$manager = new Manager();
var_dump($manager);

if(!empty($_POST)){
    $manager -> update_client($_POST);
    header("Location: ../index.php?cod=3");
}
?>