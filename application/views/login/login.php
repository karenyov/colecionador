<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>

<div class="container" style="margin-top: 110px; margin-bottom: 80px;">
    <div class="row">
        <?php if (isset($on_hold_message)) { ?>
            <div class="col-md-8 mx-auto col-md-offset-3">
                <div class="bs-callout bs-callout-danger">
                    <h4>
                        Excessive Login Attempts
                    </h4>
                    <p>
                        You have exceeded the maximum number of failed login<br />
                        attempts that this website will allow.
                    <p>
                    <p>
                        Your access to login and account recovery has been blocked for <?php ( (int) config_item('seconds_on_hold') / 60 ) ?> minutes.
                    </p>
                    <p>
                        Please use the <a href="/examples/recover">Account Recovery</a> after <?php ( (int) config_item('seconds_on_hold') / 60 ) ?> minutes has passed,<br />
                        or contact us if you require assistance gaining access to your account.
                    </p>
                </div>
            </div>
        <?php } else { ?>
            <div class="col-md-4 mx-auto col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <?php if (isset($login_error_mesg)): ?>
                            <div class="alert alert-danger" role="alert">
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <span class="sr-only">Error:</span>
                                <p style="font-size: 12px;">
                                    <?= 'Login Error # ' . $this->authentication->login_errors_count . '/' . config_item('max_allowed_attempts') . ': Invalid Username, Email Address, or Password' ?>
                                </p>
                                <p  style="font-size: 12px;">
                                    Username, email address and password are all case sensitive.
                                </p>
                            </div>
                        <?php endif ?>
                        <?= form_open($login_url, ['class' => 'form-signin']); ?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username ou Email" name="login_string" type="text" required="true">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Senha" name="login_pass" type="password" value="" required="true">
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
            </div>
        <?php } ?>
    </div>
</div>
<?php
$this->load->view('template/footer');
?>