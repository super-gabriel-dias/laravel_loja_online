<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<h2>Carrinho <strong>({{ $itens->count() }})</strong></h2>
<br>

@if ($itens->count() > 0)
    <h5>Valor total: R${{number_format(\Cart::getTotal(), 2, ',', '.')}}</h5>
    <button id="botao-carrinho-detalhes" class="btn btn-primary btn-sm" type="button">
        <h4>Finalizar compra</h4>
    </button>
@endif
@if ($mensagem = Session::get('sucesso'))
    <br>
    <br>
    <h4>{{ $mensagem }}</h4>
    <br>
@endif

@foreach ($itens->reverse() as $item)
    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1">
                        <a href="/produtos/{{ Str::slug($item->name) }}">
                            <img class="img-fluid img-responsive rounded product-image"
                                src="{{ $item->attributes->image }}">
                        </a>
                    </div>
                    <div class="col-md-6 mt-1">
                        <a style="color: black" href="/produtos/{{ Str::slug($item->name) }}">
                            <h5>
                                <strong>*({{ $item->quantity }})*</strong>
                                {{ $item->name }}
                            </h5>
                        </a>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <span>Número de avaliações</span>
                        </div>
                        <div class="mt-1 mb-1 spec-1">
                            <span>Tags</span>
                            <span class="dot"></span>
                            <span>Tags</span>
                            <span class="dot"></span>
                            <span>Tags<br></span>
                        </div>
                        <div class="mt-1 mb-1 spec-1">
                            <span>Tags</span>
                            <span class="dot"></span>
                            <span>Tags</span>
                            <span class="dot"></span>
                            <span>Tags<br></span>
                        </div>
                        <p class="text-justify text-truncate para mb-0">
                            Descrição<br><br>
                        </p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">R${{ number_format($item->price, 2, ',', '.') }}</h4>
                            <span class="strike-text">{{-- preço antigo --}}</span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4">
                            <form action="">
                                <button id="botao-carrinho-detalhes" class="btn btn-primary btn-sm">
                                    Detalhes
                                </button>
                            </form>
                            <form action="{{ route('site.removecarrinho') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button id="botao-carrinho-deletar" class="btn btn-outline-primary btn-sm mt-2">
                                    Remover do carrinho
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<br>
@if ($itens->count() > 0)
    <a href="{{ route('site.limparcarrinho') }}" id="botao-carrinho-deletar"
        class="btn btn-outline-primary btn-sm mt-2" type="button">
        <h5>Limpar carrinho</h5>
    </a>
@endif




<style>
    body {
        background: #000000
    }

    .ratings i {
        font-size: 16px;
        color: red
    }

    .strike-text {
        color: red;
        text-decoration: line-through
    }

    .product-image {
        width: 100%
    }

    .dot {
        height: 7px;
        width: 7px;
        margin-left: 6px;
        margin-right: 6px;
        margin-top: 3px;
        background-color: blue;
        border-radius: 50%;
        display: inline-block
    }

    .spec-1 {
        color: #938787;
        font-size: 15px
    }

    h5 {
        font-weight: 400
    }

    .para {
        font-size: 16px
    }
</style>
