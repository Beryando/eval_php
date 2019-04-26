<?php

session_start();


$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['luckyNumber'] = $_POST['luckyNumber'];

header('Location: /connect.php');