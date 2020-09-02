<div class="modal fade" id="addCredit" tabindex="-1" aria-labelledby="addCredit" aria-hidden="true" width:>
    <div class="modal-dialog">
        <form action="{{ route('credit.create') }}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addCreditLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Date -->
                    <div class="form-group">
                        <label class="col-form-label">Date:</label>
                        <input type="date" class="form-control" name="date-credit" required>
                    </div>
                    <!-- Libellé -->
                    <div class="form-group">
                        <label class="col-form-label">Libelle:</label>
                        <input type="text" class="form-control" name="libelle-credit" required>
                    </div>
                    <!-- Montant -->
                    <div class="form-group">
                        <label class="col-form-label">Montant:</label>
                        <input type="number" min="0" class="form-control" name="montant-credit" required>
                    </div>
                    <!-- Pièce jointe -->
                    <div class="form-group">
                        <label class="col-form-label">Pièce jointe:</label>
                        <input type="file" class="form-control" name="doc-credit">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <input type="submit" class="btn btn-primary" value="Enregistrer">
                </div>
            </div>
        </form>
    </div>
</div>
