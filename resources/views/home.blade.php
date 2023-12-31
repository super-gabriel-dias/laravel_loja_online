@extends('layout')

@section('title')
    Home
@endsection


@section('conteudo')
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        @foreach ($categorias as $categoria)
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg"
                    style="background-image: url('unsplash-photo-1.jpg');">
                    <div id="link-laranja" class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1">
                        <a href="{{ route('site.categoria', $categoria->id)}}">
                            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">{{$categoria->nome}}</h3>
                        </a>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                {{-- <img src="link da imagem" alt="texto descritivo da imagem" width="32" height="32"
                                class="rounded-circle border border-white"> --}}
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill"></use>
                                </svg>
                                <small>{{-- Texto menorzinho --}}</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3"></use>
                                </svg>
                                <small>{{-- Outro texto menorzinho, talvez só para números ou indicação de tempo --}}</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
