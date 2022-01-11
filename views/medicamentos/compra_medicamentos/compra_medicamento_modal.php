<?php
if ($user->getFuncao() == $enfermeiro) :
    echo '<script>window.location="../../../logout.php"</script>';
endif;
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Dados de compra</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="help-block">Medicamentos</label>
                        <select id="frequencia" class="form-control">
                            <option value="" disabled selected>Selecione um medicamento</option>
                            <option>Ben-u-ron</option>
                            <option>Bruffen</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="help-block">Quantidade</label>
                        <input class="form-control" type="number" id="quantidade" name="quantidade" min="1" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Concluir</button>
            </div>
        </div>


    </div>
</div>