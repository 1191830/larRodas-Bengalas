<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/header.php'; ?>
<section id="container">
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row mt">
                <div class="col-lg-12">
                    <h4><i class="fa fa-angle-right"></i> Criar user</h4>
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
                                    <label for="username" class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="username" name="username" type="text" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="password" class="control-label col-lg-2">Password</label>
                                    <div class="col-lg-10">
                                        <input class="form-control " id="password" name="password" type="text" />
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="nif" class="control-label col-lg-2">NIF</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="nif" name="nif" type="number" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="nss" class="control-label col-lg-2">NSS</label>
                                    <div class="col-lg-10">
                                        <input class=" form-control" id="nss" name="nss" type="number" />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2 col-sm-3">Lar</label>
                                    <div class="col-lg-10">
                                        <select id="lares" class="form-control">
                                            <option>Lar 1</option>
                                            <option>Lar 2</option>
                                            <option>Lar 3</option>
                                            <option>Lar 4</option>
                                            <option>Lar 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label col-lg-2 col-sm-3">Função</label>
                                    <div class="col-lg-10">
                                        <select id="funcao" class="form-control">
                                            <option>Utente</option>
                                            <option>Tecnico</option>
                                            <option>Gestor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label for="agree" class="control-label col-lg-2 col-sm-3">Activo</label>
                                    <div class="col-lg-10 col-sm-9">
                                        <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="buttons-form col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-theme btn-form" type="submit">Save</button>
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
<script type="text/javascript" src="/lar-dsos/script/users/editar_user.js"></script>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/lar-dsos/includes/footer.php'; ?>