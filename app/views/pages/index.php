<?php require APPROOT . '/views/inc/header.php'; ?>
    <header>
        <div class="overlay"></div>
        <img src="<?php echo URLROOT; ?>/public/img/141251.jpg"></img>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4"><?php echo ($_SESSION['lang'] == 'nl') ?  $data['titel']->content_nl : $data['titel']->content_en; ?></h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <center>               
                    <h2><?php echo ($_SESSION['lang'] == 'nl') ? $data['subtitel']->content_nl : $data['subtitel']->content_en; ?></h2><br>
                    <p>
                        <?php echo ($_SESSION['lang'] == 'nl') ? $data['content']->content_nl : $data['content']->content_en; ?>
                    </p>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="pt-md-5 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            </div>
            <div class="pt-md-5 col-lg-6 col-sm-6 col-xs-12">
            </div>
        </div>
        <?php require APPROOT . '/views/inc/footer.php'; ?>