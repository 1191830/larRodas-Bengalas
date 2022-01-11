<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php';
?>
<section id="container">
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <h4><i class="fa fa-angle-right"></i> Criar medicamento</h4>
                    <div class="alert" style="display:none;"></div>
                    <div class="form-panel">
                        <div class="form">
                            <form class="cmxform form-horizontal style-form" id="medicamento" method="post" action="">
                            <input id="id" name="id" type="hidden">    
                            <div class="form-group ">
                                    <label for="nome" class="control-label col-lg-2">Nome medicamento</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="nome" name="nome" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="principio" class="control-label col-lg-2">Princípio ativo</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="principio" name="principio" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="marca" class="control-label col-lg-2">Marca medicamento</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="marca" name="marca" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="dose" class="control-label col-lg-2">Dose</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="dose" name="dose" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2 col-sm-3">Tipo de toma</label>
                                    <div class="col-lg-10">
                                        <select id="tipo_toma" name="tipo_toma" class="form-control">
                                            <!-- <option value="" disabled selected>Selecione o tipo de toma</option>
                                            <option>Injetável</option>
                                            <option>Oral</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="buttons-form col-lg-offset-2 col-lg-10">
                                        <button id="guardar" class="btn btn-theme btn-form" type="submit">Guardar</button>
                                        <button id="editar_cancelar" class="btn btn-theme04 btn-form" type="button">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form-panel -->
                </div>
                <!-- /col-lg-12 -->
            </div>
            <!-- /row -->
        </section>
        <!-- /wrapper -->
    </section>
</section>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>
<script type="module" >
    import {editarMedicamento} from '/lar-dsos/script/medicamentos/editar_medicamento.js';
    import {criarMedicamento} from '/lar-dsos/script/medicamentos/criar_medicamento.js';
    import {buscarParametroUrl} from '/lar-dsos/script/helper/helper.js';
    var id = buscarParametroUrl("id");
    console.log(id, 'id');
    if(id){
        new editarMedicamento(id);
    }else{
        new criarMedicamento();
    }
</script>