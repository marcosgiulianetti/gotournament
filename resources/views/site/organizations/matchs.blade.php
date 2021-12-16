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
            <h1 style="padding: 40px 0 10px 0;">PARTIDAS</h1>
            <div style="margin-bottom: 20px;"></div>
            <a href="/choosetournament">
                <button class="btn btn-primary" style="margin-bottom: 20px;">Criar partida</button>
            </a>
            <section class="wrapper">

                @if($matchs != "")
                <main class="row title">
                    <ul>
                        <li>Torneio</li>
                        <li>Time A</li>
                        <li>Time B</li>
                        <li>Resultado</li>
                    </ul>
                </main>
                @endif
                <?php $number = 0; ?>
                @foreach($matchs as $var)
                <?php $number++; ?>
                <article class="row mlb">
                    <ul>
                        <li><a href="/editmatchs?r={{$number}}">
                                @php
                                foreach($t as $x){
                                    $a = $x->name;
                                    if($x->id == $var->team_tournament_id){
                                        if(strlen($x->name) > 2){
                                        echo strtoupper($a[0].$a[1].$a[2]);
                                        }else{
                                        echo strtoupper($x->name);
                                        }
                                    }
                                }
                                @endphp
                            </a></li>
                        <li>
                            @php
                            foreach($team as $x){
                            if($x->id == $var->team_id_A){
                            echo $x->name;
                            }
                            }
                            @endphp
                        </li>
                        <li>
                            @php
                            foreach($team as $x){
                            if($x->id == $var->team_id_B){
                            echo $x->name;
                            }
                            }
                            @endphp
                        </li>
                        <li>
                            @php
                            if($var->result == 0){
                            echo "Empate";
                            }elseif($var->result == 1){
                            echo "Vitória A";
                            }elseif($var->result == 2){
                            echo "Vitória B";
                            }else{
                            echo "Indefinido";
                            }
                            @endphp
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