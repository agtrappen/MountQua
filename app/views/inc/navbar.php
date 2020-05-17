<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3 navigatie" id="gameplayheader">
    <img src="public/img/gpp.png" class="img-fluid" alt="" onerror=this.src="../public/img/gpp.png" width="800">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
        </li>
        <?php if(!isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/bioscopen">Bioscopen</a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">Over ons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['user_id'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </li>
      <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Registeren</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
        </li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
