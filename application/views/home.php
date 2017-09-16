<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>
<!-- Header area -->
<div id="header-wrapper" class="header-slider">
    <header class="clearfix">
        <div class="logo">
            <img src="img/logo-image.png" alt="" />
        </div>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div id="main-flexslider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <p class="home-slide-content">
                                    <strong>Diversão</strong> e Entretenimento
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    Troque e compartilhe <strong>itens</strong>
                                </p>
                            </li>
                            <li>
                                <p class="home-slide-content">
                                    Para quem ama <strong>colecionar</strong>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <!-- end slider -->
                </div>
            </div>
        </div>
    </header>
</div>

<?php
$this->load->view('template/footer');
?>