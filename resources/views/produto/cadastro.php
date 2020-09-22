<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Caastro de produto</title>
</head>

<body>

    <h1>Cadastro de novos produtos</h1>

    <form method="get">

        <div class="card-body">

            <div class="container-fluid">

                <div class="col-lg-2 form-group">
                    <label for="nome">Nome do produto</label> <br>
                    <input type="text" class="form-control" name="nome" id="nome" require>
                </div>

                <div class="col-lg-3 form-group">
                    <label for="desc">Descrição do produto</label> <br>
                    <input type="text" class="form-control" name="descricao" id="descricao" require>
                </div>

                <div class="col-lg-1 form-group">
                    <label for="nome">Valor</label> <br>
                    <input type="text" class="form-control" name="valor" id="valor" require>
                </div>

                <div class="col-lg-1 form-group">
                    <label for="nome">Quantidade</label> <br>
                    <input type="text" class="form-control" name="quantidade" id="quantidade" require>
                </div>

                <div class="col-lg-1 mt-n">
                    <button type="submit" class="btn btn-info btn-block">Cadastrar</button>
                </div>
    </form>

    </div>

    </div>
</body>

</html>