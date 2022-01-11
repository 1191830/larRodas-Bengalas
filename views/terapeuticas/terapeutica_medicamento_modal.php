<?php

if (!($user->getFuncao() == $enfermeiro)) :
    echo '<script>window.location="../../logout.php"</script>';
endif;

?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Dados Medicamento</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label class="help-block">Data de início*</label>
                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                            <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" id="data_inicio" name="data_inicio">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="help-block">Data de fim</label>
                        <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                            <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="" id="data_fim" name="data_fim">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="help-block">Quantidade de toma por dia*</label>
                        <input class="form-control" type="number" id="quantidade" name="quantidade" min="1" required>
                    </div>
                    <div class="col-md-6">
                        <div class='input-group bootstrap-timepicker time-interval' id='datetimepicker3'>
                            <label class="help-block">Intervalo de horas</label>
                            <input class="form-control form-control-inline input-medium time-interval" type="time" id="intervalo" name="intervalo" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="help-block">Frequência</label>
                        <select id="frequencia" class="form-control">
                            <option value="" disabled selected>Selecione a frequência</option>
                            <option>Contínua</option>
                            <option>Período</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="help-block">Tipo de medicamento</label>
                        <div id="sos" class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                SOS - Medicamento de emergência
                            </label>
                        </div>
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