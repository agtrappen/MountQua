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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2>De oorsprong van MountQua</h2><br>
                    <p>Water is vanuit de oorsprong het lekkerst en mooist wanneer het puur is!<br>
                       Ons water is zo puur, omdat we het halen uit het Wallis gebergte in Zwitserland.<br>
                       <br>
                       Door de hoge bergen en het pure water wat ontstaat hoog in de bergen kunnen we het puurste drinkwater aanbieden.<br>
                       Hoog in de bergen tappen we het water af en lukt het ons om dit net zo puur aan te bieden in onze ecologische flesjes tot u het consumeert.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h2>Een heel ecologisch flesje</h2></br>
                    <p> Waar we het gezondste drinkwater aanbieden om u en uw gezondheid in perfecte balans te krijgen, denken we natuurlijk net zo hard aan de natuur en is dit minstens zo belangrijk!<br>
                    <br>
                    Door onze ecologisch ontwikkelde flesjes maken we van gerecycled plastic telkens weer opnieuw het flesje waaruit u MountQua consumeert.<br>
                    Hiermee geven we plastic een tweede, derde en zelfs vierde leven en besparen we hier tot vier keer het produceren van nieuwe flesjes.</p><br>
                    <center><button type="button" class="btn btn-primary" onclick="changeImage()"><span id="buttonText">Ontdek waar ons water ontstaat!</span></button></center>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12"><img id="example" onclick="changeImage()" src="https://i.ibb.co/th3HZtB/Naamloos-2.png" width="600" height="418"></img>
                </div>
            </div>
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
        <!-- Javascript resources via CDN -->
        <script src="js/levi.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>