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
            <h1 style="padding: 40px 0 10px 0;">TIMES</h1>
            <div style="margin-bottom: 20px;"></div>
            <a href="/createteam">
                <button class="btn btn-primary" style="margin-bottom: 20px;">Criar time</button>
            </a>
            <section class="wrapper">

                @if($team != "")
                    <main class="row title">
                        <ul>
                            <li>Sigla</li>
                            <li>Time</li>
                            <li>Torneio</li>
                            <li>Capitao</li>
                        </ul>
                    </main>
                @endif
                <?php $number = 0; ?>
                @foreach($team as $var)
                <?php $number++; ?>
                <article class="row mlb">
                    <ul>
                        <li><a href="/editteam?r={{$number}}">
                            @php
                                $a = $var->name;
                                if(strlen($var->name) > 2){
                                    echo strtoupper($a[0].$a[1].$a[2]);
                                }else{
                                    echo strtoupper($var->name);
                                }
                            @endphp
                        </a></li>
                        <li>{{$var->name}}</li>
                        <li>
                            @php
                                $a = $var->tournament_id;
                                foreach($data as $x){
                                    if($a == $x->id){
                                        echo $x->name;
                                    }
                                }
                            @endphp
                        </li>
                        <li>{{$var->playerA}}</li>
                    </ul>
                </article>
                @endforeach
            </section>
        </div>
    </div>

    @includeIf('main.partials.newnav-end')

</body>

</html>