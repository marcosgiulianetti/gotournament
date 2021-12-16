<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="../images/gt-icon.png">

    <title>goTournament</title>

    @includeIf('main.partials.head')
    <link rel="stylesheet" type="text/css" href="css/table-team.css">
</head>

<body style="background-color: #56606B;">

    @includeIf('main.partials.newnav-begin')

    <div style="color: #fff;">
        <div>
            <h1 style="padding: 40px 0 10px 0; text-align: center;">CRIAR TORNEIO</h1>
            <main class="form-signin">
                <div id="event-create-container">
                    <form action="/createtournament" method="POST">
                        @csrf
                        <div style="display:none;">
                            <input type="number" id="id" name="id" value="@if(isset($id)){{$id}}@endif">
                        </div>
                        <div class="form-group">
                            <label for="title">Nome do torneio:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do torneio" required>
                        </div>
                        <div class="form-group" style="position: relative; top: 15px;">
                            <label for="title">Jogo:</label>
                            <select class="form-control" name="game" id="game" required>
                                <option value="lol">League of Legends</option>
                                <option value="csgo">Counter Strike: Global Offensive</option>
                            </select><br>
                        </div>
                        <div class="form-group" style="position: relative; top: 20px;">
                            <label for="title">Descrição:</label>
                            <textarea placeholder="Descreva aqui seu torneio" class="form-control" name="description" id="description" rows="4" required></textarea>
                        </div>
                        <div class="form-group" style="position: relative; top: 30px;">
                            <label for="title">Início:</label>
                            <input type="date" class="form-control" id="start" name="start" placeholder="Início" required>
                        </div>
                        <div class="form-group" style="position: relative; top: 40px;">
                            <label for="title">Fim:</label>
                            <input type="date" class="form-control" id="end" name="end" placeholder="Fim" required>
                        </div>
                        <br><br><br><input type="submit" style="position: relative; top: 5px; height: 50px;" name="cad" class="btn btn-primary w-100" value="Cadastrar">
                    </form>
                </div>
            </main>
        </div>
    </div>

    @includeIf('main.partials.newnav-end')

</body>

</html>