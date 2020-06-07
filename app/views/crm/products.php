<?php require APPROOT . '/views/inc/header.php'; ?>
    <header>
        <div class="overlay"></div>
        <img src="<?php echo URLROOT; ?>/public/img/141251.jpg"></img>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4">Producten Bewerken</h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
        <?php foreach($data['products'] as $product) : ?>
            <div class="card card-body mb-3 ml-2 mr-2 col-lg-3">
                <form action="<?php echo URLROOT; ?>/crm/products" method = "post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <h4 class="card-title"><?php echo $product->Naam; ?></h4>
                            <img src="/MountQua/<?php echo $product->Image; ?>" class="img-fluid" alt="Responsive image">
                            <div class="form-group">
                                <label for="bijlage">Bijlage CSV</label>
                                <input required type="file" name="bijlage" class="form-control-file" id="bijlage" accept=".csv">
                            </div>
                            <input type="hidden" name="id" value="<?php echo $product->ArtikelID; ?>"/>
                            <input type="submit" value="Bewerken" class="btn btn-primary mt-1" />
                        </div>
                    </div>
                </form>
            </div>
        <?php endforeach; ?>
        </div>
        <?php require APPROOT . '/views/inc/footer.php'; ?>