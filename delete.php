<?php

session_start();

require 'vendor/autoload.php';

$_SESSION['mensagem'] = "Deletado com sucesso";
header('Location: index.php');