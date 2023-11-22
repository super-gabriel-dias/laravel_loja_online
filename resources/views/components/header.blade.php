<header>
    <nav class="py-1 bg-black border-bottom border-light">
        <div id="link-laranja" class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="#" class="nav-link link-body-white px-2">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-body-white px-2">Troubleshooting</a>
                </li>
                <li class="nav-item"><a href="/sobre-nos" class="nav-link link-body-white px-2">Sobre nós</a></li>
                <li class="nav-item"><a href="/produtos" class="nav-link link-body-white px-2">Todos os produtos</a>
                </li>
            </ul>
            <ul class="nav">

                @auth

                    <li class="nav-item"><a href="{{route('admin.dashboard')}}"
                            class="nav-link link-body-white px-2"><strong>{{ auth()->user()->firstName }}</strong></a>

                    </li>
                    <li class="nav-item"><a href="{{route('login.logout')}}"
                            class="nav-link link-body-white px-2"><strong>Sair da sessão</strong></a>

                    </li>

                @endauth

                @guest

                    <li class="nav-item"><a href="{{route('login.form')}}"
                            class="nav-link link-body-white px-2"><strong>Login</strong></a>
                    </li>
                    <li class="nav-item"><a href="{{route('login.create')}}"
                            class="nav-link link-body-white px-2"><strong>Cadastrar-se</strong></a></li>

                @endguest

                <li class="nav-link text-body-white px-2" style="color: white">|</li>
                <li class="nav-item">
                    <a href="{{ route('site.carrinho') }}" class="nav-link link-body-white px-2">

                        {{-- Ícone do carrinho dentro da tag <svg> --}}
                        <svg style="vertical-align: top" xmlns="http://www.w3.org/2000/svg" width="20"
                            height="20" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                            <path
                                d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                        </svg>

                        <strong>Carrinho ({{ \Cart::getContent()->count() }})</strong>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="py-1 mb-4 bg-black">
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
    </nav>
</header>
