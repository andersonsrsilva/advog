<html>
<head>
    <title></title>

    <style>
        @page {
            margin: 100px 25px;
        }

        header {
            position: fixed;
            height: 50px;
            width: 100%;
            top: -60px;
            background-color: #752727;
            color: white;
            line-height: 35px;
        }

        footer {
            position: fixed;
            height: 50px;
            width: 100%;
            bottom: -60px;
            background-color: #752727;
            color: white;
            text-align: center;
            line-height: 35px;
        }

        #logo {
            position: relative;
            top: 10px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="{{$logo}}" id="logo" alt="">
        Cabeçalho
    </header>
    <main>
        <p>Vara: {{$legalProceeding->local_lawsuit}}</p>
        <p>Processo: {{$legalProceeding->lawsuit->name}}</p>
    </main>
    <footer>
        Rodapé
    </footer>
</body>
</html>

