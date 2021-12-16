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
            <h1 style="padding: 40px 0 10px 0; text-align: center;">EDITAR TORNEIO</h1>
            <main class="form-signin">
                <div id="event-create-container">
                    <form action="/edittournament" method="POST">
                        @csrf
                        <div style="display:none;">
                            <input type="number" id="id" name="id" value="@if(isset($id)){{$id}}@endif">
                            <input type="number" id="uri" name="uri" value="{{app('request')->input('r')}}">
                            <input type="number" id="idTt" name="idTt" value="{{$t[app('request')->input('r')-1]->id}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Nome do torneio:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$t[app('request')->input('r')-1]->name}}" required>
                        </div>
                        <div class="form-group" style="position: relative; top: 15px;">
                            <label for="title">Jogo:</label>
                            <input style="display: none;" type="text" id="gameName" value="@php if($t[app('request')->input('r')-1]->game == '1'){echo "League of Legends";}else{echo "Counter Strike: Global Offensive";}@endphp">
                            <select class="form-control" name="game" id="game" required>
                                <option id="lol" value="lol">League of Legends</option>
                                <option id="csgo" value="csgo">Counter Strike: Global Offensive</option>
                            </select><br>
                        </div>
                        <div class="form-group" style="position: relative; top: 20px;">
                            <label for="title">Descrição:</label>
                            <textarea placeholder="Descreva aqui seu torneio" class="form-control" name="description" id="description" rows="4" required>{{$t[app('request')->input('r')-1]->description}}</textarea>
                        </div>
                        <div class="form-group" style="position: relative; top: 30px;">
                            <label for="title">Início:</label>
                            <input type="date" class="form-control" id="start" name="start" placeholder="Início" value="{{$t[app('request')->input('r')-1]->startDate}}" required>
                        </div>
                        <div class="form-group" style="position: relative; top: 40px;">
                            <label for="title">Fim:</label>
                            <input type="date" class="form-control" id="end" name="end" placeholder="Fim" value="{{$t[app('request')->input('r')-1]->endDate}}" required>
                        </div>
                        <br><br><br><input id="edit" name="edit" type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-warning w-100" value="Editar"><br><br>
                        <input type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-danger w-100" id="remove" name="remove" value="Excluir">
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script type="text/javascript">
        var a = document.getElementById('gameName');
        if (a.value == 'League of Legends') {
            document.getElementById('lol').selected = 'selected';
        } else {
            document.getElementById('csgo').selected = 'selected';
        }
    </script>

    @includeIf('main.partials.newnav-end')

</body>

</html>