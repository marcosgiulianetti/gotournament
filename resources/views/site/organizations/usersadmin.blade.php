<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="/images/gt-icon.png">

    <title>goTournament</title>

    @includeIf('main.partials.head')
    <link rel="stylesheet" type="text/css" href="css/table-team.css">
</head>

<body style="background-color: #56606B;">

    @includeIf('main.partials.newnav-begin')
    <div style="color: #fff;">
        <div style="text-align: center;">
            <h1 style="padding: 40px 0 10px 0;">USUÁRIOS</h1>
            <div style="margin-bottom: 20px;"></div>
            <section class="wrapper">
                @if($user != "")
                <main class="row title">
                    <ul>
                        <li>ID</li>
                        <li>Nome</li>
                        <li>E-mail</li>
                        <li>Senha</li>
                    </ul>
                </main>
                @endif
                <?php $number = 0; ?>
                @foreach($allusers as $var)
                <?php $number++; ?>
                <article class="row mlb">
                    <ul>
                        <li><a href="/editaccount?r={{$number}}">
                            {{$var->id}}
                            </a></li>
                        <li>
                            {{$var->username}}
                        </li>
                        <li>
                            {{$var->email}}
                        </li>
                        <li>
                            {{$var->password}}
                        </li>
                    </ul>
                </article>
                @endforeach
            </section>
        </div>
    </div>

    @includeIf('main.partials.newnav-end')

</body>

</html>