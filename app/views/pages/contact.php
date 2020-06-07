<?php require APPROOT . '/views/inc/header.php'; ?>

    <header>
        <div class="overlay"></div>
        <img src="<?php echo URLROOT; ?>/public/img/contactheader.jpg"></img>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-4">Contact</h1>
                    <p class="lead mb-0"></p>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2><?php echo $lang['contact'];?></h2>
        <p><?php echo $lang['paragraaf'];?></p><br>
        <p><strong><?php echo $lang['persoonlijkeGegevens'];?></strong></p>
                <form action="<?php echo URLROOT; ?>/pages/contact" method = "post">
        <form class="my-md-4">
            <br>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="voornaam"><?php echo $lang['voornaam'];?></label>
                    <input type="voornaam" class="form-control" name="voornaam" id="voornaam">
                </div>
                <div class="form-group col-md-6">
                    <label for="achternaam"><?php echo $lang['achternaam'];?></label>
                    <input type="achternaam" class="form-control" name="achternaam" id="achternaam">
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="straatnaam"><?php echo $lang['straatnaam'];?></label>
                    <input type="text" class="form-control" name="straatnaam" id="straatnaam">
                </div>
                <div class="form-group col-md-3">
                    <label for="huisnummer"><?php echo $lang['huisnummer'];?></label>
                    <input type="text" class="form-control" name="huisnummer"id="huisnummer">
                </div>
                <div class="form-group col-md-3">
                    <label for="toevoeging"><?php echo $lang['toevoeging'];?></label>
                    <input type="text" class="form-control" name="toevoeging" id="toevoeging">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="postcode"><?php echo $lang['postcode'];?></label>
                    <input type="text" class="form-control" name="postcode" id="postcode">
                </div>
                <div class="form-group col-md-6">
                    <label for="woonplaats"><?php echo $lang['woonplaats'];?></label>
                    <input type="text" class="form-control" name="woonplaats" id="woonplaats">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="telefoon"><?php echo $lang['telefoon'];?></label>
                    <input type="text" class="form-control" name="telefoon" id="telefoon">
                </div>
            </div>
            <h3><?php echo $lang['je_bericht'];?></h3>
            <div class="form-group">
                <label for="onderwerp"><?php echo $lang['onderwerp'];?></label>
                <select class="form-control" id="onderwerp">
                    <option><?php echo $lang['selecteerOnderwerp'];?></option>
                    <option><?php echo $lang['kwaliteit'];?></option>
                    <option><?php echo $lang['product'];?></option>
                    <option><?php echo $lang['sponsors'];?></option>
                    <option><?php echo $lang['werkenBij'];?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="bericht"><?php echo $lang['bericht'];?></label>
                <textarea class="form-control" rows="10" name="bericht" id="bericht"></textarea>
            </div>
            <div class="form-group">
                <label for="bijlage"><?php echo $lang['bijlage'];?></label>
                <input type="file" class="form-control-file" id="bijlage">
            </div>
            <button type="submit" name="save" class="btn btn-primary" id="button"><?php echo $lang['verzenden'];?></button>
        </form>
        <?php require APPROOT . '/views/inc/footer.php'; ?>