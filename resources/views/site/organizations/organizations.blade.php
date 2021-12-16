<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="/images/gt-icon.png">

    <title>goTournament</title>

    @includeIf('main.partials.head')

</head>

<body style="background-color: #56606B;">

    @includeIf('main.partials.newnav-begin')

    <main class="cards">
        <section class="card contact">
            <div class="icon">
                <img src="/images/csgologo.png" style="width: 110px; height:128px;" alt="Contact us.">
            </div>
            <h3>Counter Strike: Global Offensive</h3>
            <span>O Counter-Strike: Global Offensive (CS:GO) melhora a jogabilidade de...</span>
            <a href="/aboutcsgo">
                <button>Sobre</button>
            </a>
        </section>
        <section class="card contact">
            <div class="icon">
                <img src="images/lollogo.png" alt="Contact us.">
            </div>
            <h3>League of Legends</h3>
            <span>League of Legends é um jogo de estratégia em que duas equipes de...</span>
            <a href="/aboutlol">
                <button>Sobre</button>
            </a>
        </section>
    </main>

    @includeIf('main.partials.newnav-end')

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>