<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        #botao-carrinho-detalhes {
            --bs-btn-color: #000;
            --bs-btn-bg: #f8f9fa;
            --bs-btn-border-color: rgb(255, 85, 23);
            --bs-btn-hover-color: #f8f9fa;
            --bs-btn-hover-bg: rgb(255 101 45);
            --bs-btn-hover-border-color: #000;
            --bs-btn-focus-shadow-rgb: rgb(49, 132, 253);
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: rgb(255 68 0);
            --bs-btn-active-border-color: #000;
        }

        #botao-carrinho-deletar {
            --bs-btn-color: #000;
            --bs-btn-border-color: #000;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #000;
            --bs-btn-hover-border-color: #000;
            --bs-btn-focus-shadow-rgb: 13, 110, 253;
            --bs-btn-active-color: rgb(255, 85, 23);
            --bs-btn-active-bg: #000;
            --bs-btn-active-border-color: #000
        }

        #botao-sidebar {
            --bs-btn-color: #000000;
            --bs-btn-hover-color: #000000;
            --bs-btn-bg: #d44713;
            --bs-btn-hover-bg: rgb(255, 85, 23);
        }

        .pagination {
            --bs-pagination-bg: #000000;
            --bs-pagination-color: #ffff;
            --bs-pagination-active-bg: #ff5517;
            --bs-pagination-hover-color: #ffff;
            --bs-pagination-hover-bg: #ff5517;
            --bs-pagination-focus-bg: #d44713;
            --bs-pagination-focus-color: #ffff;
            --bs-pagination-focus-box-shadow: #ff551769;
            --bs-pagination-active-border-color: #000;
            --bs-pagination-font-size: 1.699em;

        }

        #conteudo {
            background-color: white;
        }

        #limite {
            width: 97%;
            margin: 0 auto;
        }

        body {
            background: #000000
        }

        input[type="search"]:focus {

            border-width: 2px;
            box-shadow: none;
            border-color: #ff5517;
        }

        #link-laranja a {
            color: white
        }

        #link-laranja a:hover {
            color: rgb(255, 85, 23)
        }

        #link-laranja ul li a:hover {
            color: rgb(255, 85, 23);
        }

        #link-laranja .list-group:hover {
            color: rgb(255, 85, 23);
        }

        #link-laranja ul li a {
            color: white
        }

        #link-laranja ul li a:hover {
            color: rgb(255, 85, 23);
        }

        #link-laranja ul li a {
            color: white
        }

        .border-bottom {
            border-color: rgb(255, 85, 23) !important
        }

        .list-group-item {
            border-color: rgb(255, 85, 23) !important
        }

        #botao-comprar {
            background-color: black;
            border: none
        }

        #botao-comprar:hover {
            background-color: rgb(255, 85, 23)
        }

        #rodape {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
    </style>
</head>

<body>
    <!--SIDEBAR-->
    @include('components.sidebar')

    <!--CABEÇALHO-->
    @include('components.header')


    <!--CONTEÚDO-->
    <div id="conteudo" class="border border-white py-3">
        <div id="limite">
            @yield('conteudo')
        </div>
    </div>


    <!--RODAPÉ-->
    @include('components.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
