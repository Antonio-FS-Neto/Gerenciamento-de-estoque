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

        <h1>Detalhes do produto: <?= $p->nome ?></h1>

        <table class="table table-dark table-bordered table-hover">
            <ul>
                <li> <b>Valor:</b> R$ <?= $p->valor ?> </li>
                <li> <b>Quantidade em estoque:</b> <?= $p->quantidade ?> </li>
                <li> <b>Descrição do produto:</b> <?= $p->descricao ?> </li>
            </ul>
        </table>

        
    </div>
        

</body>

</html>