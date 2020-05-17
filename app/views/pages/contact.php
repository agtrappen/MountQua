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
            <h2>Neem contact met ons op</h2>
            <p>Vul het onderstaande contactformulier in of bel met onze consumentenservice: 088 - 525 75 50.</p><br>
            <p><strong>Persoonlijke gegevens</strong></p>
                    <form action="contact.php" method = "post">
            <form class="my-md-4">
                <p id="aanhef"><strong>Aanhef</strong></p>
                <div class="radio man">
                    <label><input type="radio" name="optradio" checked>Man</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="optradio" checked>Vrouw</label>
                </div><br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="voornaam">Voornaam *</label>
                        <input type="voornaam" class="form-control" name="voornaam" id="voornaam" placeholder="Voornaam">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="achternaam">Achternaam</label>
                        <input type="achternaam" class="form-control" name="achternaam" id="achternaam" placeholder="Achternaam">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="straatnaam">Straatnaam *</label>
                        <input type="text" class="form-control" name="straatnaam" id="straatnaam">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="huisnummer">Huisnummer *</label>
                        <input type="text" class="form-control" name="huisnummer"id="huisnummer">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="toevoeging">Toevoeging</label>
                        <input type="text" class="form-control" name="toevoeging" id="toevoeging">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="postcode">Postcode *</label>
                        <input type="text" class="form-control" name="postcode" id="postcode">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="woonplaats">Woonplaats *</label>
                        <input type="text" class="form-control" name="woonplaats" id="woonplaats">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="telefoon">Telefoon *</label>
                        <input type="text" class="form-control" name="telefoon" id="telefoon">
                    </div>
                </div>
                <h3>Je bericht</h3>
                <div class="form-group">
                    <label for="onderwerp">Onderwerp *</label>
                    <select class="form-control" id="onderwerp">
                        <option>Selecteer het onderwerp</option>
                        <option>Kwaliteit</option>
                        <option>Product</option>
                        <option>Sponsors</option>
                        <option>Werken bij MountQua</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="bericht">Bericht *</label>
                    <textarea class="form-control" rows="10" name="bericht" id="bericht"></textarea>
                </div>
                <div class="form-group">
                    <label for="bijlage">Bijlage (.jpg, .png, .gif, max. 4MB)</label>
                    <input type="file" class="form-control-file" id="bijlage">
                </div>
                <button type="submit" name="save" class="btn btn-primary" id="button">Verzenden</button>
            </form>
            <footer class="border-top">
                <div class="row">
                    <div class="col-md-4"><center>
                        <h5>MountQua</h5>
                        <medium class="text-medium">Hogeschoollaan 1<br>
                        4818 CR Breda<br>
                        Nederland<br>
                        BTW: NL808852218B012<br>
                        KvK: 411044081</medium>
                    </div>
                    <div class="col-md-4"><center>
                        <h5>Onze producten</h5>
                        <ul class="list-unstyled">
                            <li><a class="foolinks" href="#">MountQua Clear</a></li>
                            <li><a class="foolinks" href="#">MountQua Fruity</a></li>
                            <li><a class="foolinks" href="#">MountQua Bubbly</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4"><center>
                        <h5>contact</h5>
                        <ul class="list-unstyled">
                            <li><a class="foolinks" href="#">Klantenservice</a></li>
                            <li><a class="foolinks" href="#">Werken bij MountQua</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <small class="text-small"><center>
                      <p><b>© MOUNTQUA 2019 -</b> TERMS & CONDITIONS <b>|</b> PRIVACY POLICY <b>|</b> COOKIES POLICY</p>
                    </center></small>
                 </div>
                </div> 
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/form-validation.js"type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>