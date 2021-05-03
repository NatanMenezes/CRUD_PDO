<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once "header.php" ?>
    <title>Produtos</title>
</head>

<body>
    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Produtos</h3>
            <hr>
            <table class="striped #757575 grey lighten-2">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once "tbody.php";?>
                </tbody>
            </table>

            <br><a href="create.php" class="btn">NOVO PRODUTO</a>
        </div>
    </div>
    
<?php

if(isset($_POST['btn-deletar'])){
    $crud->delete($_POST['id']);?>
    <script>window.location.replace("delete.php")</script>
<?php }

include_once "footer.php" ?>