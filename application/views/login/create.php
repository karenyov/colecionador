<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>

<div class="container" style="margin-top: 110px; margin-bottom: 80px;">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastro</h3>
                </div>
                <div class="panel-body">
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger col-sm-8 col-md-8" role="alert" style="font-size: 5px;">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only">Error:</span>
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <?= form_open('login/create_user'); ?>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Nome" name="name" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Sobrenome" name="last_name" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="username" name="username" class="form-control" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="passwd" type="password">
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirme a senha" name="confirm_password" type="password">
                            </div>
                        </div>
                    </div>

                    <input class="btn btn-lg btn-success" type="submit" value="Enviar">
                    </form>
                </div><br>
            </div>
        </div>
        <div class="col-md-2">
            teste
        </div>
    </div>
</div>
</div>
<?php
$this->load->view('template/footer');
?>