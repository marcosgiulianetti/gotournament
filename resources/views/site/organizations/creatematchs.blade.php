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
            <h1 style="padding: 40px 0 10px 0; text-align: center;">CADASTRAR CONFRONTO</h1>
            <main class="form-signin">
                <div id="event-create-container">
                    <form action="/ccreatematch" method="POST">
                        @csrf
                        <div style="display:none;">
                            <input type="number" id="id" name="id" value="@if(isset($id)){{$id}}@endif">
                            <input type="number" id="tournament" name="tournament" value="@if(isset($y)){{$y}}@endif">
                        </div>
                        <div class="form-group" style="position: relative; top: 15px;">
                            <label for="title">Time A:</label>
                            <select class="form-control" name="teama" id="teama" required>
                                @foreach($team as $x)
                                <option value="{{$x->id}}">{{$x->name}}</option>
                                @endforeach
                            </select><br>
                        </div>
                        <div class="form-group" style="position: relative; top: 15px;">
                            <label for="title">Time B:</label>
                            <select class="form-control" name="teamb" id="teamb" required>
                                @foreach($team as $x)
                                <option value="{{$x->id}}">{{$x->name}}</option>
                                @endforeach
                            </select><br>
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