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
            <h1 style="padding: 40px 0 10px 0; text-align: center;">CRIAR TIME</h1>
            <main class="form-signin">
                <div id="event-create-container">
                    <form action="/createteam" method="POST">
                        @csrf
                        <div style="display:none;">
                            <input type="number" id="userid" name="userid" value="@if(isset($id)){{$id}}@endif">
                        </div>
                        <div class="form-group">
                            <label for="title">Logo do time:</label>
                            <input type="file" class="form-control" id="logo" name="logo" placeholder="Logo" required>
                        </div><br>
                        <div class="form-group">
                            <label for="title">Nome do time:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do torneio" required>
                        </div><br>
                        <div class="form-group">
                            <label for="title">Torneio:</label>
                            <select class="form-control" name="id" id="id" required>
                                @foreach($t as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                @endforeach
                            </select>
                        </div><br>
                        @for($i = 1; $i < 6; $i++)
                            <div class="form-group">
                                <label for="title">Jogador {{$i}}:</label>
                                <input type="text" class="form-control" id="player{{$i}}" name="player{{$i}}" placeholder="username" required>
                            </div><br>
                        @endfor
                        <br><br><br><input type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-primary w-100" value="Cadastrar">
                    </form>
                </div>
            </main>
        </div>
    </div>

    @includeIf('main.partials.newnav-end')

</body>

</html>