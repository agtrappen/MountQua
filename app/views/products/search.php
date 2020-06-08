<?php require APPROOT . '/views/inc/header.php'; ?>
<header>
  <div class="overlay"></div>
  <img src="<?php echo URLROOT; ?>/public/img/141251.jpg"></img>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-4">Onze Producten</h1>
        <p class="lead mb-0"></p>
      </div>
    </div>
  </div>
</header>
<div class="container">
  <div class="row">
    <?php
    if (count($data) < 1) {
    ?>
      <div class="alert alert-warning col-lg-12" role="alert">
        Er voldeden geen producten aan je zoekopdracht, wil je misschien <a href="<?= URLROOT ?>/products">al onze producten</a> bekijken?
      </div>
    <?php
    }
    ?>
    <?php foreach ($data as $product) : ?>
      <div class="card card-body mb-3 ml-2 mr-2 col-lg-3">
        <h4 class="card-title"><?php echo $product->Naam; ?></h4>
        <img src="<?php echo URLROOT . '/' . $product->Image; ?>" class="img-fluid" alt="Responsive image">
        <a class="btn btn-success mt-1" href="<?php echo URLROOT; ?>/bestelling/add/<?php echo $product->ArtikelID; ?>">Bestellen</a>
      </div>
    <?php endforeach; ?>
  </div>
  <?php require APPROOT . '/views/inc/footer.php'; ?>