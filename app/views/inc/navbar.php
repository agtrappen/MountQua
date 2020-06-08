<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-bold logo-text"><img src="<?php echo URLROOT; ?>/public/img/logo.png" /></h5>
    <form class="form-inline my-2 my-lg-0" method="GET" action="<?= URLROOT . '/products/search' ?>">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
    </form>
    <nav class="my-2 my-md-0 mr-md-3">
        <?php if (!isset($_SESSION['user_id'])) : ?>

            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/">Home</a>
            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/products"><?php echo $lang['onze_producten']; ?></a>
            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/pages/about"><?php echo $lang['over_ons']; ?></a>
            <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/pages/contact">Contact</a>
        <?php endif; ?>
    </nav>
    <?php if (isset($_SESSION['user_id'])) : ?>
        <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/crm/products">Producten</a>
        <a class="p-2 menu-item" href="<?php echo URLROOT; ?>/crm/images">Foto's</a>
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
    <?php else : ?>
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/auth/login"><i class="fas fa-user"></i></a>&emsp;
    <?php endif; ?>
</div>