<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-{{ $produto->id }}">
    DELETAR
</button>

<!-- Modal -->
<div class="modal fade" id="delete-{{ $produto->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">Deletar produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5><strong>ATENÇÃO!</strong> Tem certeza que deseja deletar <strong>"{{ $produto->nome }}" </strong>?
                </h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <form action="{{ route('admin.produto.delete', $produto->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-primary">Deletar</button>
                </form>
            </div>
        </div>
    </div>
</div>
