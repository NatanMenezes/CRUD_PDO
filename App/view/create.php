<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once "header.php" ?>
    <title>Novo Produto</title>
</head>
<body>


<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo Produto</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="input col s12">
                <label for="nome" style="font-size:large;">Produto</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input col s12">
                <label for="descricao" style="font-size:large;">Descrição</label>
                <input type="text" name="descricao" id="descricao">
            </div>
            <button type="submit" name="btn-criar" class="btn">CADASTRAR</button>
            <a href="index.php" class="btn green">LISTA DE PRODUTOS</a>
        </form>
    </div>
</div>

<?php

session_start();

if(isset($_POST['btn-criar'])){

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);

    $produto = new \App\Model\Produto();
    $produto->setNome($nome);
    $produto->setDescricao($descricao);
    
    $produto_DAO = new \App\Model\Produto_DAO();
    $produto_DAO->create($produto);

    $_SESSION['mensagem'] = "Cadastrado com sucesso";
    header('Location: index.php');

}

?>

<?php include_once "footer.php" ?>