<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Edição de produtos</title>
</head>

<body>
  <form action="/update/<?= $p->produto_id ?>" method="post">

    <input type="hidden" name="_token" value="<?= csrf_token() ?>" />

    <input type="hidden" name="_method" value="put" />

    <div class="form-group">
      <label for="nome">Nome do produto</label>
      <input type="text" value="<?= $p->nome ?>" class="form-control" placeholder="Novo nome do produto." name="nome" id="nome">
    </div>

    <div>
      <label for="descrição">Nova descrição</label>
      <input type="text" value="<?= $p->descricao ?>" class="form-control" placeholder="Nova descrição do produto." name="descricao" id="descrição">
    </div>

    <div class="form-group">
      <label for="valor">valor do produto</label>
      <input type="number" value="<?= $p->valor ?>" class="form-control" placeholder="Novo valor do produto." name="valor" id="valor">
    </div>

    <div class="form-group">
      <label for="quantidade">Quantidade em estoque</label>
      <input type="number" value="<?= $p->quantidade ?>" class="form-control" placeholder="Novo valor do produto." name="quantidade" id="quantidade">
    </div>

    <button type="submit" class="btn btn-info btn-block">Editar</button>
  </form>
</body>

</html>