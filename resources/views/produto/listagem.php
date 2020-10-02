<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Produtos em estoque</title>
</head>

<body>

    <?php if (empty($produtos)) { ?>

        <div class="alert alert-danger"> Você não tem nenhum produto cadastrado. </div>

    <?php } else { ?>
       
        <div class="container">

        <h1>Controle de produtos</h1>
        
        <a href="http://stock.test/novo"><button style="background: #069cc2; border-radius: 6px; padding: 15px; cursor: pointer; color: #fff; border: none; font-size: 16px;">Novo produto</button></a>

            <table class="table table-dark table-bordered table-hover">

                <?php foreach ($produtos as $p) : ?>

                    <tr class="<?php $p->quantidade <= 1 ? 'danger' : '' ?>">
                        <td><?= $p->nome ?></td>
                        <td><?= $p->valor ?></td>
                        <td><?= $p->quantidade ?></td>
                        <td>
                            <a href="http://stock.test/descricao/ <?=$p->produto_id ?>">Descrição</a>
                        </td>
                        <td>
                            <a href="/apagar">Deletar</a>
                        </td>
                        <td>
                            <a href="/editar/<?= $p->produto_id ?>">Editar</a>
                        </td>
                    </tr>

                <?php endforeach ?>

            </table>

            <?=$produtos->links()?>

        </div>

    <?php  } ?>



    <?php if (old('nome')) { ?>
        <div class="alert alert-success">

            <strong>Sucesso!</strong> O produto <?= old('nome') ?> foi adicionado.

        </div>
    <?php } ?>

</body>

</html>