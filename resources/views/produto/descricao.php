<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Controle de estoque</title>

</head>

<body>

    <div class="container">

        <div class="col-lg-2 mt-n">
            <a href="http://stock.test/listagem"><button type="submit" class="btn btn-info btn-block">Listagem</button></a>
        </div>

        <table class="table table-dark table-bordered table-hover">
            <ul class="list-group">
                <li class="list-group-item active">Detalhes do produto:<b> <?= $p->nome ?> </b> </li>
                <li class="list-group-item"> <b>Valor:</b> R$ <?= $p->valor ?> </li>
                <li class="list-group-item"> <b>Quantidade em estoque:</b> <?= $p->quantidade ?> </li>
                <li class="list-group-item"> <b>Descrição do produto:</b> <?= $p->descricao ?> </li>
            </ul>
        </table>

    </div>

</body>

</html>