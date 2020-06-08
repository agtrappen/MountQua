<?php require APPROOT . '/views/inc/header.php'; ?>
    <header>
        <div class="overlay"></div>
        <img src="<?php echo URLROOT; ?>/public/img/141251.jpg"></img>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4">Bestellen</h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="card mt-5 mb-5">
            <h5 class="card-header">Formulier</h5>
            <div class="card-body">
                <form action="<?php echo URLROOT; ?>/bestelling/add/<?php echo $data['id']; ?>" method="post">
                    <div class="form-group">
                        <label for="voornaam">Voornaam</label>
                        <input required name="voornaam" type="text" class="form-control" id="voornaam" placeholder="voornaam">
                    </div>
                    <div class="form-group">
                        <label for="achternaam">Achternaam</label>
                        <input required name="achternaam" type="text" class="form-control" id="achternaam" placeholder="achternaam">
                    </div>
                    <div class="form-group">
                        <label for="straat">Straat + huisnummer</label>
                        <input required name="straat" type="text" class="form-control" id="straat" placeholder="straat en huisnummer">
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode</label>
                        <input required name="postcode" type="text" class="form-control" id="postcode" placeholder="postcode">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="aantal">Aantal</label>
                        <input required name="aantal" type="number" class="form-control" id="aantal">
                    </div>
                    <button type="submit" class="btn btn-primary">Bestellen</button>
                </form>
            </div>
        </div>
        <?php require APPROOT . '/views/inc/footer.php'; ?>