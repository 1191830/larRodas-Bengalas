<?php
if (!($user->getFuncao() == $enfermeiro)) :
    echo '<script>window.location="../../../logout.php"</script>';
endif;
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="admin_terapeutica" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="title">Dados Medicamento</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="panel-heading pl-10">
                        <div class="pull-left">
                            <h5><i class="fa fa-plus-square "></i> Medicamentos</h5>
                        </div>
                        <br>
                    </div>
                    <div class="custom-check goleft mt-10">
                        <table id="todo" class="table table-hover custom-check">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Frequência</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="check"><input type="checkbox" class="checked"></span>
                                        <span> Send invoice</span>
                                    </td>
                                    <td>1 unidade</td>
                                    <td>Contínua</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="check"><input type="checkbox" class="checked"></span>
                                        <span> Check messages</span>
                                    </td>
                                    <td>1 unidade</td>
                                    <td>Contínua</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="check"><input type="checkbox" class="checked"></span>
                                        <span> Pay bills</span>
                                    </td>
                                    <td>1 unidade</td>
                                    <td>Contínua</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="check"><input type="checkbox" class="checked"></span>
                                        <span> Schedule site </span>
                                    </td>
                                    <td>1 unidade</td>
                                    <td>Contínua</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /table-responsive -->

                    <div class="panel-heading pl-10">
                        <div class="pull-left">
                            <h5><i class="fa fa-ambulance"></i> Emergência - SOS</h5>
                        </div>
                        <br>
                    </div>
                    <div class="custom-check goleft mt-10">
                        <table id="todo" class="table table-hover custom-check">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Frequência</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="check"><input type="checkbox" class="checked"></span>
                                        <span> Send invoice</span>
                                    </td>
                                    <td>1 unidade</td>
                                    <td>Contínua</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /table-responsive -->

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Concluir</button>
            </div>
        </div>


    </div>
</div>