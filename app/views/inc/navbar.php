<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-bold logo-text"><img src="<?php echo URLROOT; ?>/public/img/logo.png" /></h5>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <nav class="my-2 my-md-0 mr-md-3">
        <?php if(!isset($_SESSION['user_id'])) : ?>
            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/index">Home</a>
            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/products">Onze Producten</a>
            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/pages/about">Over ons</a>
            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
        <?php endif; ?>
    </nav>
    <?php if(isset($_SESSION['user_id'])) : ?>
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
    <?php else : ?>
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/auth/login"><i class="fas fa-user"></i></a>&emsp;
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/pages/cart"><i class="fas fa-shopping-cart"></i></a>
    <?php endif; ?>
</div>