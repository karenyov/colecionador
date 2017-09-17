<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>

<div class="container" style="margin-top: 110px; margin-bottom: 80px;">
    <div class="row">
        <div class="col-md-10 mx-auto col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastro</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form">
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
                                    <input type="email" name="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="password" type="password">
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
        </div></div>
</div>
</div>
<?php
$this->load->view('template/footer');
?>