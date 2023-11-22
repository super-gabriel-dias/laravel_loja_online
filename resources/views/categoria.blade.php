@extends('layout')

@section('title')
    Produtos
@endsection

@section('conteudo')
    <h3>Categoria: {{$categoria->nome}}</h3>
    <div class="row row-cols-3 row-cols-lg-4 align-items-stretch g-2 py-5 ">
        @foreach ($produtos as $produto)
            <div class="col d-flex">
                <div class="thumb-wrapper">
                    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                        <div class="img-box">
                            <a href="{{ route('site.details', $produto->slug) }}">
                                <img src="{{ $produto->imagem }}" class="img-fluid">
                            </a>
                        </div>
                        <div id="link-laranja" class="mt-auto thumb-content">
                            <a href="{{ route('site.details', $produto->slug) }}">
                                <h4 style="text-align: center">{{ $produto->nome }}</h4>
                            </a>
                            <div class="star-rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                            <p style="text-align: center; font-size: 200%" class="item-price"><b>R${{ number_format($produto->preco, 2, ',', '.') }}</b>
                            </p>
                        </div>

                        <a id="botao-comprar" href="#" class="btn btn-danger">

                            <svg style="vertical-align: top" xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                            </svg>

                            Adicionar
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        {{ $produtos->links() }}
    </div>
@endsection
