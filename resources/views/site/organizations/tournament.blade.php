<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="imagem/png" href="/images/gt-icon.png">

    <title>goTournament</title>

    @includeIf('main.partials.head')
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>

<body style="background-color: #56606B;">

    @includeIf('main.partials.newnav-begin')

    <div style="color: #fff;">
        <div style="text-align: center;">
            <h1 style="padding: 40px 0 10px 0;">TORNEIOS</h1>
            <div style="margin-bottom: 20px;"></div>
            <a href="/createtournament">
                <button class="btn btn-primary" style="margin-bottom: 20px;">Criar torneio</button>
            </a>
            <!--
            <div style="position: relative; max-width: 1000px; margin: 0px auto 20px auto; text-align: left;">
                <button class="btn btn-warning"><i class='bx bx-search-alt-2'></i></button>
                <input type="text" class="form-control" style="width: auto; display:inline;">
            </div>
            -->
            <section class="wrapper">

                @if($data != "")
                    <main class="row title">
                        <ul>
                            <li>Sigla</li>
                            <li>Nome</li>
                            <li>Jogo</li>
                        </ul>
                    </main>
                @endif
                <?php $number = 0; ?>
                @foreach($data as $var)
                <?php $number++; ?>
                <article class="row mlb">
                    <ul>
                        <li><a href="/edittournament?r={{$number}}">
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
                                $a = $var->game;
                                if($a == 1){
                                    echo "League of Legends";
                                }else{
                                    echo "CSGO";
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