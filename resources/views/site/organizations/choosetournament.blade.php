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
            <h1 style="padding: 40px 0 10px 0; text-align: center;">CRIAR PARTIDA</h1>
            <main class="form-signin">
                <div id="event-create-container">
                    <form action="/creatematchs" method="POST">
                        @csrf
                        <div style="display:none;">
                            <input type="number" id="id" name="id" value="@if(isset($id)){{$id}}@endif">
                        </div>
                        <div class="form-group" style="position: relative; top: 15px;">
                            <label for="title">Escolha o torneio:</label>
                            <select class="form-control" name="tournament" id="tournament" required>
                                @foreach($t as $x)
                                <option value="{{$x->id}}">{{$x->name}}</option>
                                @endforeach
                            </select><br>
                        </div>
                        <br><br><br><input type="submit" style="position: relative; height: 50px;" name="cad" class="btn btn-primary w-100" value="Próximo">
                    </form>
                </div>
            </main>
        </div>
    </div>

    @includeIf('main.partials.newnav-end')

</body>

</html>