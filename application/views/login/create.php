<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>

<style>
    .error-msg {
        color: #d9534f;
        border-color: #d9534f;
    }
</style>
<div class="container" style="margin-top: 110px; margin-bottom: 80px;">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastro</h3>
                </div>
                <div class="panel-body">
                    <?= form_open('login/create_user'); ?>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Nome" name="name" type="text" value="<?= set_value('name') ?>" required>
                                <div class="error-msg">
                                    <?php echo form_error('name') ? '<hr class="error-msg">' . form_error('name') : ''; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Sobrenome" name="last_name" value="<?= set_value('last_name') ?>" type="text" required>
                                <div class="error-msg">
                                    <?php echo form_error('last_name') ? '<hr class="error-msg">' . form_error('last_name') : ''; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="username" name="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>" required>
                                <div class="error-msg">
                                    <?php echo form_error('username') ? '<hr class="error-msg">' . form_error('username') : ''; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" value="<?= set_value('email') ?>" required>
                                <div class="error-msg">
                                    <?php echo form_error('email') ? '<hr class="error-msg">' . form_error('email') : ''; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="passwd" type="password" required="true">
                                <div class="error-msg">
                                    <?php echo form_error('passwd') ? '<hr class="error-msg">' . form_error('passwd') : ''; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <input class="form-control" placeholder="Confirme a senha" name="confirm_password" type="password" required="true">
                            </div>
                        </div>
                    </div>
                    <input class="btn btn-lg btn-success" type="submit" value="Enviar">
                    </form>
                </div><br>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Colecionador</h3>
                </div>
                <p class="lead">Registre agora totalmente <span class="text-success">GRATUITO</span></p>
                <ul class="list-unstyled" style="line-height: 2">
                    <li><span class="fa fa-check text-success"></span> Compartilhe seus itens</li>
                    <li><span class="fa fa-check text-success"></span> Venda, troque ou compre itens colecionáveis</li>
                    <li><span class="fa fa-check text-success"></span> Salve os favoritos</li>
                    <li><span class="fa fa-check text-success"></span> Veja os itens de outros colecionadores</li>
                    <li><a href="/read-more/"><u>Read more</u></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<?php
$this->load->view('template/footer');
?>