<?php
session_start();

$user = $_POST["login"] ?? null;
$senha = $_POST["senha"] ?? null;

if ($user === null || $senha === null) {
    echo "401";
    return exit;
}

if ($user === "admin" && $senha === "1234") {
    $_SESSION["user"]["id"] = 1;
    $_SESSION["user"]["name"] = "admin";
    echo "200";
} else {
    echo "401";
    session_destroy();
}