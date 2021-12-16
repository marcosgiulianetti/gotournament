<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="/images/gt-icon.png">
    <title>goTournament | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/boostrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="d-flex h-100 text-white bg-home">

    <div class="d-flex w-100 h-100 p-3 mx-auto flex-column bg-grey-op">
        @includeIf('main.partials.login-header', ['first'=>'Primeiro','last'=>'Ultimo'])

        <main class="form-signin text-center">
            <form method="post" action="{{route('site.login')}}">
                @csrf
                <img class="mb-4" src="images/gt-icon.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                @if (isset($erro))
                <div class="alert alert-danger">
                    <span>{{ $erro }}</span>
                </div>
                @endif
                <div class="form-floating" style="margin-bottom: 5px;">
                    <input type="text" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="">
                    <label for="floatingInput" style="color: #060E35;">Endereço de email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword" style="color: #060E35;">Senha</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar usuário
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            </form>
            <button class="w-100 btn btn-lg btn-warning" type="submit" style="margin-top: 10px;" onclick="window.location.href = '/create'">Criar conta</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </main>

        <footer class="mt-auto text-white-50 text-center">
            <p>Feito por <a class="text-white">Marcos Rafael</a>.</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>