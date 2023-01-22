<html>
<head>
    <title></title>

    <style>
        @page {
            margin: 100px 50px;
        }

        header {
            position: fixed;
            height: 50px;
            width: 100%;
            top: -60px;
            background-color: #752727;
            color: white;
            text-align: center;
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

        p {
            text-align: justify;
        }

        #color {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        Cabeçalho
{{--        <img src="{{ public_path('assets/images/logo.jpg') }}" id="logo" style="width: 100px; height: 100px">--}}
    </header>

    <footer>
        Rodapé
    </footer>

    <main>
        <p>ID: {{$legalProceeding->id}}</p>
        <p>Processo: {{$legalProceeding->lawsuit->name}}</p>
        <p>Tipo da ação: {{$legalProceeding->lawsuitType->name}}</p>
        <p>1º Endereçamento: {{$legalProceeding->legal_address_1}}</p>
        <p>2º Endereçamento: {{$legalProceeding->legal_address_2}}</p>
        <p>Estado: {{$legalProceeding->uf->name}}</p>
        <p>Qualificação das partes: {{$legalProceeding->lawsuit->name}}</p>

        <br><br>

        <p id="color">DOS FATOS</p>
        {!!$legalProceeding->fact_description!!}

        <p id="color">DO DIREITO</p>
        {!!$legalProceeding->right_description!!}

        <p id="color">AÇÃO</p>
        {!!$legalProceeding->lawsuit_description!!}

        <p id="color">RÉU</p>
        {!!$legalProceeding->defendant_description!!}

        <p id="color">PRELIMINAR</p>
        {!!$legalProceeding->preliminary_description!!}

        <p id="color">DOS PEDIDOS</p>
        {!!$legalProceeding->order_description!!}

        <p>{!!$money!!}</p>
    </main>

</body>
</html>

