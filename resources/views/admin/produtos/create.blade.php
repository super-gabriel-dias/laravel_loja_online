<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    + Novo produto
</button>

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="createlLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabel">Criação de produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.produto.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">

                    <label for="produto-nome" class="col-form-label">Nome do produto: </label>
                    <input name="nome" type="text" class="form-control" id="produto-nome">

                    <label for="produto-preco" class="col-form-label">Preço do produto: </label>
                    <input min="0" name="preco" type="number" class="form-control" id="produto-preco">

                    <label for="produto-descricao" class="col-form-label">Descrição do produto: </label>
                    <textarea class="form-control" id="produto-descricao" name="descricao"></textarea>
                    <br>
                    <br>

                    <select name="id_categoria">
                        <option value="" disabled selected>Escolha uma categoria</option>

                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                    <label>Categoria</label>
                    <br>
                    <br>


                    <div class="mb-3">
                        <label for="formFile" class="form-label">Insira uma imagem do produto</label>
                        <input class="form-control" type="file" id="formFile" name="imagem">

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Criar produto</button>
                </form>
            </div>
        </div>
    </div>
</div>
