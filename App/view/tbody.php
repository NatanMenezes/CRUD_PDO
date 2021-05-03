<?php

require "/wamp64/www/cursophp.com/CRUD_PDO/vendor/autoload.php";

$crud = new \App\Model\Produto_DAO();

foreach ($crud->read() as $produto) { ?>

    <tr>
        <td><?php echo $produto['nome']; ?></td>
        <td><?php echo $produto['descricao']; ?></td>
        <td><a href="edit.php?id=<?php echo $produto['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

        <td><a href="#modal<?php echo $produto['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

        <div id="modal<?php echo $produto['id']; ?>" class="modal">
            <div class="modal-content">
                <h4>Tem certeza?</h4>
                <p>Esta ação não poderá ser desfeita</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                    <button type="submit" name="btn-deletar" class="btn red">Sim, quero deletar</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                </form>

            </div>
        </div>

    </tr>
    
<?php }



?>