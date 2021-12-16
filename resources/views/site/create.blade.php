<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="/images/gt-icon.png">
    <title>goTournament | Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="d-flex h-100 text-white bg-home">
    <div class="d-flex w-100 p-3 mx-auto flex-column bg-grey-op">
        @includeIf('main.partials.login-header')

        <main class="form-signin">
            <div id="event-create-container">
                <form action="/createaccount" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nome de usuário:</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Nome de usuário" required>
                    </div>
                    <div class="form-group" style="position: relative; top: 15px;">
                        <label for="title">Senha:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                    </div>
                    <div class="form-group" style="position: relative; top: 20px;">
                        <label for="title">Email:</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Endereço de e-mail" required>
                    </div>
                    <br><br><input type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-primary w-100" value="Cadastrar">
                </form>
                <button class="w-100 btn btn-warning" type="submit" style="margin-top: 10px;" onclick="window.location.href = '/login'">Já possuo cadastro</button>
            </div>
        </main>

        <footer class="mt-auto text-white-50 text-center">
            <p>Feito por <a class="text-white">Marcos Rafael</a>.</p>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2021</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>