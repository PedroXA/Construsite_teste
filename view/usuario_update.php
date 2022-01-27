<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teste Básico - Desenvolvimento WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body style="background-color: gray;">



         <!-------------- Navbar -------------->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <!--Classe para alteração da cor "Update de Usuários" -->
            <width="30" height="30" class="d-inline-block align-top" alt="">
                Update de Usuários
        </a>
    </nav>


        <!-------------- Formulário -------------->
    <div class="container">
        <form action="" method="post">

            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email_cliente" value="<?=$usuario->email_cliente?>" required/>
            </div>

            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome_cliente" value="<?=$usuario->nome_cliente?>" required/>
            </div>

            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input class="form-control" type="text" name="telefone_cliente" value="<?=$usuario->telefone_cliente?>" required/>
            </div>

            <div class="form-group col-md-4">
                <label for="Senha">Senha</label>
                <input class="form-control" type="text" name="senha_cliente" value="<?=$usuario->senha_cliente?>" required/>
            </div>

            <div class="form-group col-md-4">
                <label for="nascimento">Data de Nascimento</label>
                <input class="form-control" type="date" name="data_nasc_cliente" value="<?=$usuario->data_nasc_cliente?>" required/>
            </div>

            <button class="btn btn-warning" type="submit">Alterar</button>

        </form>

    </div>

</body>

</html>