<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <!--CABEÇALHO-->

    <header>
        <nav class="py-1 bg-black border-bottom border-light">
            <div id="link-laranja" class="container d-flex flex-wrap">
                <ul class="nav me-auto">
                    <li class="nav-item"><a href="/" class="nav-link link-body-white px-2 active"
                            aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-body-white px-2">Features</a></li>
                    <li class="nav-item"><a href="#" class="nav-link link-body-white px-2">Troubleshooting</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link link-body-white px-2">Sobre nós</a></li>
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a href="#"
                            class="nav-link link-body-white px-2"><strong>Login</strong></a></li>
                    <li class="nav-item"><a href="#"
                            class="nav-link link-body-white px-2"><strong>Cadastrar-se</strong></a></li>
                    <li class="text-body-white px-2" style="color: white">|</li>
                    <li class="nav-item"><a href="#"
                            class="nav-link link-body-white px-2"><strong>Carrinho</strong></a></li>
                </ul>
            </div>
        </nav>
        <header class="py-1 mb-4 bg-black">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span style="color: rgb(255, 85, 23); font-size: 250%"><strong>Nozama</strong></span>
                </a>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
                    <input type="search" class="form-control" placeholder="Pesquisar produtos..." aria-label="Search">
                </form>
            </div>
        </header>
    </header>




    <style>
        #link-laranja a {
            color: white
        }

        #link-laranja a:hover {
            color: rgb(255, 85, 23)
        }

        #link-laranja ul li a:hover {
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

        #rodape {
            display: flex;
            flex-direction: column;
            height: 100%;
        }
    </style>

    @yield('conteudo')



    <!--RODAPÉ-->

    <div class="wrapper" id="rodape">
        <div id="link-laranja" class="container-fluid bg-black">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-0 my-3">
                <div class="col mb-3">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none"
                        style="font-size: 200%">
                        <strong style="color: white">Nozama</strong>
                    </a>
                    <p style="color: white">© 2023</p>
                </div>
                <div class="col mb-3">
                </div>
                <div class="col mb-3">
                    <h5 style="color: rgb(255, 85, 23)">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Features</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Pricing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">About</a></li>
                    </ul>
                </div>
                <div class="col mb-3">
                    <h5 style="color: rgb(255, 85, 23)">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Features</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Pricing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">About</a></li>
                    </ul>
                </div>
                <div class="col mb-3">
                    <h5 style="color: rgb(255, 85, 23)">Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Features</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">Pricing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">FAQs</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-white">About</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
