<?php 
session_start();
if (empty($_SESSION['name']) || empty($_SESSION['id'])){
    header("Location: views/page_login.php?cod=1");
}
