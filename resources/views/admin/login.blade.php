<!DOCTYPE html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>goTournament | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/boostrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="d-flex h-100 text-white bg-home">

    <div class="d-flex w-100 h-100 p-3 mx-auto flex-column bg-grey-op">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0"> <img src="../images/gt-icon.png" class="icon-top-size" alt="icon"> goTournament</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link" href="http://127.0.0.1:8000/">Início</a>
                    <a class="nav-link" href="#">Contato</a>
                    <a class="nav-link" href="#">Descubra</a><div style="width:30px;"></div>
                </nav>
            </div>
        </header>

        <main class="form-signin text-center">
            <form method="POST" action="{{ route('admin.login.do')}}">
                <img class="mb-4" src="../images/gt-icon.png" alt="" width="72" height="72">
                <h1 class="h3 mb-3 fw-normal">Login Administrativo</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="marcos.giulianetti@hotmail.com">
                    <label for="floatingInput" style="color: #060E35;">Endereço de email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword" style="color: #060E35;">Senha</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Lembrar usuário
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                <button class="w-100 btn btn-lg btn-warning" type="submit" style="margin-top: 10px;">Criar conta</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
            </form>
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