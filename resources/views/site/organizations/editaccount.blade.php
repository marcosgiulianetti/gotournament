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
            <h1 style="padding: 40px 0 10px 0; text-align: center;">EDITAR CONTA</h1>
            <main class="form-signin">
                <div id="event-create-container">
                    <form action="/editaccount" method="POST">
                        @csrf
                        <?php
                        $url = $_SERVER['REQUEST_URI'];
                        $components = parse_url($url);
                        parse_str($components['query'], $aux);
                        $aux = intval($aux['r']) - 1;
                        ?>
                        <div style="display:none;">
                            <input type="number" id="uri" name="uri" value="{{app('request')->input('r')}}">
                            <input type="number" id="idTt" name="idTt" value="{{$userdetail[$aux]->id}}">
                            <input type="number" id="id" name="id" value="{{$userdetail[$aux]->id}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Nome de usuário:</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nome de usuário" value="{{$userdetail[$aux]->username}}" required><br>
                        </div>
                        <div class="form-group">
                            <label for="title">Senha:</label>
                            <input type="text" class="form-control" id="password" name="password" placeholder="Senha" value="{{$userdetail[$aux]->password}}" required><br>
                        </div>
                        <div class="form-group">
                            <label for="title">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$userdetail[$aux]->email}}" placeholder="Endereço de e-mail" required>
                        </div>
                        <br><br><input id="edit" name="edit" type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-warning w-100" value="Editar"><br><br>
                        <input type="submit" style="position: relative; top: 5px; height: 50px;" class="btn btn-danger w-100" id="remove" name="remove" value="Excluir">
                    </form>
                </div>
            </main>
        </div>
    </div>

    <script type="text/javascript">
        var a = document.getElementById('rresult');
        if (a.value == '0') {
            document.getElementById('empate').selected = 'selected';
        } else if (a.value == '1') {
            document.getElementById('vitoriaa').selected = 'selected';
        } else if (a.value == '2') {
            document.getElementById('vitoriab').selected = 'selected';
        } else {
            document.getElementById('nothing').selected = 'selected';
        }
    </script>

    @includeIf('main.partials.newnav-end')

</body>

</html>