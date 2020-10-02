<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>dedletar produto</title>
</head>

<body>

<h3>Tem certeza que deseja excluir esse produto ?</h3>

    <form action="/deletar/<?= $p->produto_id ?>" method="get">
   
        <div class="card-body">

            <div class="container-fluid">
               
                <div class="col-lg-1">

                    <button type="submit" class="btn btn-info btn-block">Sim</button>

                    <button type="submit" class="btn btn-info btn-block">Não</button>
                </div>
            </div>
</body>

</html>