<?php require APPROOT . '/views/inc/header.php'; ?>
    <header>
        <div class="overlay"></div>
        <img src="<?php echo URLROOT; ?>/public/img/141253.jpg"></img>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4">Login</h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>Inloggen</h2><br>
                <form action="login.php" method = "get">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">E-mailadres *</label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="wachtwoord">Wachtwoord *</label>
                    <input type="password" class="form-control" name="wachtwoord" id="wachtwoord">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="login" id="button">Login</button><br><br>
            <p><a class="textlinks" href="../account/password_reset.html">Wachtwoord vergeten</a> <b>|</b> <a class="textlinks" href="../account/register.html">Nog geen account</a></p><br>
        </form>
        <?php require APPROOT . '/views/inc/footer.php'; ?>