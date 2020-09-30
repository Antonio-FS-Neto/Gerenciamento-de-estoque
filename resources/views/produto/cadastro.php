<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Novo produto</title>
</head>

<body>

    <h1>Cadastro de novos produtos</h1>

    <form action="/adiciona" method="POST">

        <div class="card-body">

            <div class="container-fluid">

                <input type="hidden" name="_token" value="<?= csrf_token() ?>" />

                <div class="form-group">
                    <label for="nome">Nome do produto</label>
                    <input type="text" class="form-control" placeholder="Novo nome do produto." name="nome" id="nome">
                </div>

                <div class="form-group">
                    <label for="descrição">Nova descrição</label>
                    <input type="text" class="form-control" placeholder="Nova descrição do produto." name="descricao" id="descrição">
                </div>

                <div class="form-group">
                    <label for="valor">valor do produto</label>
                    <input type="number" class="form-control" placeholder="Novo valor do produto." name="valor" id="valor">
                </div>

                <div class="form-group">
                    <label for="quantidade">Quantidade em estoque</label>
                    <input type="number" class="form-control" placeholder="Novo valor do produto." name="quantidade" id="quantidade">
                </div>

            <button type="submit" class="btn btn-info btn-block">Cadastrar</button>
    </form>

    </div>

    </div>
</body>

</html>