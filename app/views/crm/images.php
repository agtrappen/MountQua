<?php require APPROOT . '/views/inc/header.php'; ?>
    <header>
        <div class="overlay"></div>
        <img src="<?php echo URLROOT; ?>/public/img/141251.jpg"></img>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4">Foto's</h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="card card-body mb-3 mt-3">    
            <form action="<?php echo URLROOT; ?>/crm/images" method = "post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="bijlage">Bijlage Image</label>
                    <input required type="file" name="bijlage" class="form-control-file" id="bijlage" accept=".csv">
                </div>
                <input type="submit" value="Toevoegen" class="btn btn-success mt-1" />
            </form>  
        </div>    
        <div class="row">
        <?php foreach($data['images'] as $image) : ?>
            <div class="card card-body mb-3 ml-2 mr-2 col-lg-3">
                <img src="<?php echo $image; ?>" class="img-fluid" alt="Responsive image">
            </div>
        <?php endforeach; ?>
        </div>
        <?php require APPROOT . '/views/inc/footer.php'; ?>