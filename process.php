<?php

use FormHandler;
require_once "classes/FormHandler.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $form = new FormHandler($firstname, $lastname, $phone, $address);
    $data = $form->getData();

    // Kirim ke result
    session_start();
    $_SESSION['data'] = $data;

    header("Location: result.php");
    exit();
}