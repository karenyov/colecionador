<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>

<div class="container" style="margin-top: 110px; margin-bottom: 80px;">
    <div class="row">
        <div class="col-md-4 mx-auto col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <div class="panel-body">
                    <?= validation_errors() ?>
                    <?= form_open($login_url, ['class' => 'form-signin']); ?>
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="Username" name="login_string" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Senha" name="login_pass" type="password" value="">
                        </div>
                    <?php if (config_item('allow_remember_me')): ?>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" id="remember_me" name="remember_me" value="yes"> Remember Me
                                </label>
                            </div>
                        <?php endif ?>
                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" id="submit_button">
                    </fieldset>
                    </form>
                    <hr/>
                    <center><h4>OR</h4></center>
                    <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
                </div><br>
                <h5 class="">Novo por aqui? <a href="<?= site_url("login/create_user") ?>">Cadastre-se</a></h5><br>
            </div>
        </div></div>
</div>
</div>
<?php
$this->load->view('template/footer');
?>