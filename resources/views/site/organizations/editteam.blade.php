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
            <h1 style="padding: 40px 0 10px 0; text-align: center;">EDITAR TIME</h1>
            <main class="form-signin">
                <div id="event-create-container">
                    <form action="/editteam" method="POST">
                        @csrf
                        <?php 
                        $url = $_SERVER['REQUEST_URI'];
                        $components = parse_url($url);
                        parse_str($components['query'], $aux);
                        $aux = intval($aux['r'])-1;
                        ?>
                        <div style="display:none;">
                            <input type="number" id="id" name="id" value="@if(isset($id)){{$id}}@endif">
                            <input type="number" id="uri" name="uri" value="{{app('request')->input('r')}}">
                            <input type="number" id="idTt" name="idTt" value="{{$team[$aux]->id}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Nome do time:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$team[$aux]->name}}" required>
                        </div><br>
                        <div class="form-group">
                            <label for="title">Jogador 1:</label>
                            <input type="text" class="form-control" id="playera" name="playera" value="{{$team[$aux]->playerA}}" required>
                        </div><br>
                        <div class="form-group">
                            <label for="title">Jogador 2:</label>
                            <input type="text" class="form-control" id="playerb" name="playerb" value="{{$team[$aux]->playerB}}" required>
                        </div><br>
                        <div class="form-group">
                            <label for="title">Jogador 3:</label>
                            <input type="text" class="form-control" id="playerc" name="playerc" value="{{$team[$aux]->playerC}}" required>
                        </div><br>
                        <div class="form-group">
                            <label for="title">Jogador 4:</label>
                            <input type="text" class="form-control" id="playerd" name="playerd" value="{{$team[$aux]->playerD}}" required>
                        </div><br>
                        <div class="form-group">
                            <label for="title">Jogador 5:</label>
                            <input type="text" class="form-control" id="playere" name="playere" value="{{$team[$aux]->playerE}}" required>
                        </div>
                        <br><br><input id="edit" name="edit" type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-warning w-100" value="Editar"><br><br>
                        <input type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-danger w-100" id="remove" name="remove" value="Excluir">
                    </form>
                </div>
            </main>
        </div>
    </div>

    @includeIf('main.partials.newnav-end')

</body>

</html>