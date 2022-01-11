<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/views/terapeuticas/administrar_terapeuticas/admin_terapeutica_modal.php';

$path = '/lar-dsos/views/terapeuticas/administrar_terapeuticas/troca_compra_medicamentos/troca_compra_medicamento_terapeutica.php';

?>
<section id="content">
    <section id="main-content">
        <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Administrar Terapeuticas</h3>
            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <div class="col-md-6 no-padding">
                            <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
                        </div>
                        <div class="col-md-6 no-padding date-search">
                            <label class="control-label col-md-3" style="text-align:end;">Default Datepicker</label>
                            <div class="col-md-3 col-xs-11">
                                <input class="form-control form-control-inline input-medium default-date-picker" size="16" type="text" value="">
                            </div>
                        </div>
                        <hr>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th>Identificação</th>
                                    <th class="hidden-phone">Utente</th>
                                    <th>Responsável</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Utente1</td>
                                    <td>Técnico1</td>
                                    <td><span class="label label-info label-mini">Ativo</span></td>
                                    <td>
                                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button>
                                        <a href="<?= $path; ?>" class="btn btn-warning btn-xs"><i class="fa fa-cog"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Utente2</td>
                                    <td>Técnico2</td>
                                    <td><span class="label label-info label-mini">Ativo</span></td>
                                    <td>
                                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button>
                                        <a href="<?= $path; ?>" class="btn btn-warning btn-xs"><i class="fa fa-cog"></i></a>

                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Utente3</td>
                                    <td>Técnico3</td>
                                    <td><span class="label label-info label-mini">Ativo</span></td>
                                    <td>
                                        <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button>
                                        <a href="<?= $path; ?>" class="btn btn-warning btn-xs"><i class="fa fa-cog"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /content-panel -->
                </div>
            </div>
        </section>
        <!-- /wrapper -->
    </section>
</section>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>