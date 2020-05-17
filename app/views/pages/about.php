<?php require APPROOT . '/views/inc/header.php'; ?>
        <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php echo URLROOT; ?>/public/video/aboutheader.mp4" type="video/mp4">
            </video>
            <div class="container h-100">
                <div class="d-flex h-100 text-center align-items-center">
                    <div class="w-100 text-white">
                        <h1 class="display-4">Over Ons</h1>
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
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 my-md-4">
                    <h2>Een heel ecologisch flesje</h2></br>
                    <p> Waar we het gezondste drinkwater aanbieden om u en uw gezondheid in perfecte balans te krijgen, denken we natuurlijk net zo hard aan de natuur en is dit minstens zo belangrijk!<br>
                    <br>
                    Door onze ecologisch ontwikkelde flesjes maken we van gerecycled plastic telkens weer opnieuw het flesje waaruit u MountQua consumeert.<br>
                    Hiermee geven we plastic een tweede, derde en zelfs vierde leven en besparen we hier tot vier keer het produceren van nieuwe flesjes.</p><br>
                    <center><button type="button" class="btn btn-primary" onclick="changeImage()"><span id="buttonText">Ontdek waar ons water ontstaat!</span></button></center>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 my-md-4"><img id="example" onclick="changeImage()" src="https://i.ibb.co/th3HZtB/Naamloos-2.png" width="600" height="418"></img>
                </div>
            </div>
            <?php require APPROOT . '/views/inc/footer.php'; ?>