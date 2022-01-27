<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teste Básico - Desenvolvimento WEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color: gray;">


    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <!--Classe para alteração da cor "Cadastro de Usuários" -->
            <width="30" height="30" class="d-inline-block align-top" alt="">
                Cadastro de Usuários
        </a>
    </nav>
        <!-------------- Formulário -------------->
<div class="container">
        <form name="formcadastro" action="" method="post" class="">
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email_cliente" id="email" required />
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" name="nome_cliente" id="nome" required />
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Telefone</label>
                <input type="text" name="telefone_cliente" id="telefone" onkeypress="mascaraTel()" placeholder="Digite um número de telefone" class="form-control"/>
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Senha</label>
                <input class="form-control" type="password" name="senha_cliente" id="senha" required />
            </div>
            <div class="form-group col-md-4">
                <label for="nome">Data de Nascimento</label>
                <input class="form-control" type="date" name="data_nasc_cliente" id="nascimento" required />
            </div>
            <button class="btn btn-success" type="submit" id="submit">Cadastrar</button>
        </form>
    </div>
</div>

    <!-------------- Mascaras -------------->
    <script>
        function mascaraTel() {

            var telefoneM = document.getElementById("telefone").value

            document.getElementById("telefone").maxLength = "13"

            if (telefoneM[0] != "(") {
                if (telefoneM[0] != undefined) {
                    document.getElementById("telefone").value = "(" + telefoneM[0]
                }
            }

            if (telefoneM[3] != ")") {
                if (telefoneM[3] != undefined) {
                    document.getElementById("telefone").value = telefoneM.slice(0, 3) + ")" + telefoneM[3]
                }
            }

            if (telefoneM[8] != "-") {
                if (telefoneM[8] != undefined) {
                    document.getElementById("telefone").value = telefoneM.slice(0, 8) + "-" + telefoneM[8]
                }
            }
        }
    </script>

</body>

</html>