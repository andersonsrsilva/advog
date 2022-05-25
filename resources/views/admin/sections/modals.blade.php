<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel">Confirmação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            </div>
            
            <form action="{{ route('admin.users.destroy') }}" method="post">
                {{method_field('delete')}} {{csrf_field()}}
                <div class="modal-body">
                    <p id="modal_description"></p>
                    <input type="hidden" name="id" id="modal_id" value="" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</div>