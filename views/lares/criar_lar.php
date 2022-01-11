<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php'; ?>
<script type="text/javascript" src="/lar-dsos/script/lares/criar_lares.js"></script>
<script type="text/javascript" src="/lar-dsos/script/lares/editar_lares.js"></script>
<?php
if (!($user->getFuncao() == $adminGeral)) :
    echo '<script>window.location="../../logout.php"</script>';
endif;
?>
<section id="content">
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <h4><i class="fa fa-angle-right"></i> Criar lar</h4>
                    <div class="form-panel">
                        <div class="form">
                            <form class="cmxform form-horizontal style-form" id="signupForm" method="get" action="">
                                <div class="form-group ">
                                    <label for="nome" class="control-label col-lg-2">Nome</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="nome" name="nome" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="morada" class="control-label col-lg-2">Morada</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="morada" name="morada" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="nif" class="control-label col-lg-2">NIF</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="nif" name="nif" type="number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="buttons-form col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-theme btn-form" type="submit" id="saveLar" onclick="window.location.href='lista_lares.php'">Save</button>
                                        <button class="btn btn-theme04 btn-form" type="button">Cancel</button>
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
<!-- /MAIN CONTENT -->
<!--main content end-->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>