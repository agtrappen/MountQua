<?php require APPROOT . '/views/inc/header.php'; ?>
    <header>
        <div class="overlay"></div>
        <img src="<?php echo URLROOT; ?>/public/img/141253.jpg"></img>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4">Register</h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="col-md-6 mb-5 mx-auto">
        <div class="card card-body bg-light mt-5">
        <h2>Account aanmaken</h2>
        <p>Vul in je gegevens om te registreren</p>
        <form action="<?php echo URLROOT; ?>/auth/register" method="post">
            <div class="form-group">
                <label>Email Address:<sup>*</sup></label>
                <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label>Wachtwoord:<sup>*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group">
                <label>Bevestig Password:<sup>*</sup></label>
                <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
            </div>

            <div class="form-row">
            <div class="col">
                <input type="submit" class="btn btn-success btn-block" value="Register">
            </div>
            <div class="col">
                <a href="<?php echo URLROOT; ?>/auth/login" class="btn btn-light btn-block">Al een account? Login</a>
            </div>
            </div>
            </form>
        </div>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>