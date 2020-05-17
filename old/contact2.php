<?php

include 'includes\config.php';
include 'includes\header.php';


?>

        <!-- contact info -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <p><?php echo $lang['paragraaf']; ?></p><br>

                    <p><strong><?php echo $lang['persoonlijkeGegevens']; ?></strong></p>

                    <!-- form -->

                    <form action="contact.php" method = "post">

           
                    <p id="aanhef"><strong><?php echo $lang['Aanhef']?></strong></p>
                    <div class="radio man">
                        <label><input type="radio" name="optradio"><?php echo $lang['Man']?></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="optradio"><?php echo $lang['Vrouw']?></label>
                    </div><br>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="voornaam"><?php echo $lang['Voornaam'];?></label>
                            <input type="voornaam" class="form-control" name="voornaam" id="voornaam">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="achternaam"><?php echo $lang['Achternaam'];?></label>
                            <input type="achternaam" class="form-control" name="achternaam">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="straatnaam"><?php echo $lang['Straatnaam'];?></label>
                            <input type="text" class="form-control" name="straatnaam" id="straatnaam">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="huisnummer"><?php echo $lang['Huisnummer'];?></label>
                            <input type="text" class="form-control" name="huisnummer"id="huisnummer">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="toevoeging"><?php echo $lang['Toevoeging'];?></label>
                            <input type="text" class="form-control" name="toevoeging" id="toevoeging">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="postcode"><?php echo $lang['Postcode'];?></label>
                            <input type="text" class="form-control" name="postcode" id="postcode">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="woonplaats"><?php echo $lang['Woonplaats'];?></label>
                            <input type="text" class="form-control" name="woonplaats" id="woonplaats">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="telefoon"><?php echo $lang['Telefoon'];?></label>
                            <input type="text" class="form-control" name="telefoon" id="telefoon">
                        </div>
                    </div>
                    <h3><?php echo $lang['Je bericht'];?></h3>
                    <div class="form-group">
                        <label for="onderwerp"><?php echo $lang['Onderwerp'];?></label>
                        <select class="form-control" id="onderwerp">
                            <option><?php echo $lang['SelecteerOnderwerp'];?></option>
                            <option><?php echo $lang['Kwaliteit'];?></option>
                            <option><?php echo $lang['Product'];?></option>
                            <option><?php echo $lang['Sponsors'];?></option>
                            <option><?php echo $lang['WerkenBij'];?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bericht"><?php echo $lang['Bericht'];?></label>
                        <textarea class="form-control" rows="10" name="bericht" id="bericht"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="bijlage"><?php echo $lang['Bijlage'];?></label>
                        <input type="file" class="form-control-file" id="bijlage" >
                    </div>
                    <button type="submit" name="save" class="btn btn-primary" style="margin-bottom: 20px;"><?php echo $lang['Verzenden'];?></button>
            </form>

             <!-- footer -->
            <?php include 'includes\footer.php'; ?>
            

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="js/form-validation.js"type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

            
            
    </body>
</html>