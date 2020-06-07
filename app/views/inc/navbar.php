
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-bold logo-text"><img src="<?php echo URLROOT; ?>/public/img/logo.png" /></h5>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
    <nav class="my-2 my-md-0 mr-md-3">
        <?php if(!isset($_SESSION['user_id'])) : ?>
          
            <!-- change navbar language -->

            <?php foreach ($data['navbar'] as $navbar) : ?>
                <a class="p-2 menu-item" href="<?php echo URLROOT ?><?php echo $navbar->url; ?>">
                <?php 
                
                if($_SESSION['lang'] == 'nl'){
                    echo $navbar->content_nl;
                } else if ($_SESSION['lang'] == 'en'){
                    echo $navbar->content_en;
                }  
                ?></a>
            <?php endforeach; ?>

      
        <?php endif; ?>
    </nav>
    <?php if(isset($_SESSION['user_id'])) : ?>
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/auth/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
    <?php else : ?>
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/auth/login"><i class="fas fa-user"></i></a>&emsp;
        <a class="p2 menu-item" href="<?php echo URLROOT; ?>/pages/cart"><i class="fas fa-shopping-cart"></i></a>
    <?php endif; ?>
</div>