<!DOCTYPE html>
<html lang="pt-br">
<?php require "/wamp64/www/cursophp.com/CRUD_PDO/vendor/autoload.php"; ?>

<head>
    <?php include_once "header.php" ?>
    <?php

    $id = $_GET['id'];
    $produto_DAO = new \App\Model\Produto_DAO();
    $res = $produto_DAO->find($id);
    $res = $res[0];
    

    if (isset($_POST['btn-editar'])) {
        $produto = new \App\Model\Produto();
        $produto->setId($_POST['id']);
        $produto->setNome($_POST['nome']);
        $produto->setDescricao($_POST['descricao']);

        $produto_DAO = new \App\Model\Produto_DAO();
        $produto_DAO->update($produto);

        $_SESSION['mensagem'] = "Editado com sucesso";
        header('Location: index.php');
    }

    ?>
    <title>Editar Produto</title>
</head>

<body>


    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="light">Novo Produto</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                <div class="input col s12">
                    <label for="nome" style="font-size:large;">Produto</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $res['nome'] ?>">
                </div>
                <div class="input col s12">
                    <label for="descricao" style="font-size:large;">Descrição</label>
                    <input type="text" name="descricao" id="descricao" value="<?php echo $res['descricao'] ?>">
                </div>
                <button type="submit" name="btn-editar" class="btn">EDITAR</button>
                <a href="index.php" class="btn green">LISTA DE PRODUTOS</a>
            </form>
        </div>
    </div>

    <?php include_once "footer.php" ?>