@extends('layout')

@section('title')
    Detalhes do produto
@endsection

@section('conteudo')
    <div class="row container">
        <div class="col s12 m6">
            <img src="{{ $produto->imagem }}" class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h1>{{ $produto->nome }}</h1>
            <br>
            <h3>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h3>
            <br>
            <p>{{ $produto->descricao }}</p>
            <p>Postado por: {{ $produto->user->firstName }}</p>
            <p>Categoria: {{ $produto->categoria->nome }}</p>

            <form action="{{ route('site.addcarrinho') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$produto->id}}">
                <input type="hidden" name="name" value="{{$produto->nome}}">
                <input type="hidden" name="price" value="{{$produto->preco}}">
                <input min="1" type="number" name="qnt" value="1">
                <input type="hidden" name="img" value="{{$produto->imagem}}">

                <button id="botao-comprar" class="btn btn-danger">

                    <svg style="vertical-align: top" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                        fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z" />
                    </svg>

                    Adicionar
                </button>
            </form>
        </div>

    </div>
@endsection
