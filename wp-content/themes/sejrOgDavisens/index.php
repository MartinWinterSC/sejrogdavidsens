<?php
get_header();
?>
<main class="zeroMarginTopBottom">
    <section class="hero fullWidth">
        <h1><?php bloginfo('name'); ?></h1>

    </section>
    <section>
        <a href="#" class="focusEntryPoint ">

            <img src="<?php echo get_theme_file_uri('./assets/img/pension.jpg') ?>" alt="En mand der kaster pind med to hunde">
            <div>
                <p> Se vores eventyrlige pension</p>
            </div>
        </a>
        <h2>fuck nej om jeg skal spise min broccoli</h2>
        <a href="./internat.php" class="focusEntryPoint">

            <img src="<?php echo get_theme_file_uri('./assets/img/internat-hunde.jpg') ?>" alt="Tre hunde der bliver fodret af hånd">
            <div>
                <p>Se vores vidunderlig internat</p>
            </div>
        </a>
    </section>

    <section class="indexIntro">
        <div class="halfWidth">
            <h2>Sejr og Davidsens</h2>
            <p>Med sammenlagt 20 års erfaring mellem de to ejere, er det svært at finde et bedre sted at lade dine
                bedste dyre venner blive i mens du er på ferie eller har brug for pasning. Vi har også et internat
                med en masse glade dyr som er klar til at finde deres forevige-hjem</p>
            <div> <i class="fa-solid fa-phone"></i><a href="tel:"> +45 71 23 45 67</a></div>
            <div><i class="fa-solid fa-at"></i><a href="mailto:">kontakt@sejrdavidsen.dk </a></div>
            <a href="#" class="btn">Læs mere om kontakt</a>

        </div>
        <img src="<?php echo get_theme_file_uri('./assets/img/kontakt-internat-facade.jpg') ?>"
            alt="Facaden til Sejr og Davidsens Dyrepension og -internat" class="halfWidth">
    </section>

    <section>
        <a href="<?php echo site_url("/find-din-race-test") ?>" class="testFEP ">

            <img src="<?php echo get_theme_file_uri('./assets/img/test-hunde.jpg') ?>" alt="14 hunde af forskellige racer der står på række">

            <div>
                <h2>I tvivl om hvilken race du skal have? Tag testen!</h2>
            </div>
        </a>
    </section>

    <section class="articles">
        <h2>Nyeste artikler</h2>
        <div class="articleContainer">
            <a href="#" class="articleCard ">

                <img src="./assets/img/kat-i-skab.jpg" alt="Kat der gemmer sig i et klædeskab">
                <div>
                    <p class="date">29-08-2024 </p>
                    <p class="content">Folk har haft problemer på det seneste med at få deres katte til at føle sig
                        hjemme, så vi kommer her med nogle tips og tricks til at...
                    </p>
                    <p class="author">Af Peter Johannesen</p>
                </div>
            </a>
            <a href="#" class="articleCard ">

                <img src="./assets/img/hund-i-bur.jpg" alt="Hund bag et risthegn">
                <div>
                    <p class="date">12-08-2024</p>
                    <p class="content">Flere og flere hunde bliver efterladt, viser nye tal fra danmarks
                        dyeforening, og det er ikke godt nok, derfor vil vi...
                    </p>
                    <p class="author">Af Amalie Krabbe</p>
                </div>
            </a>
            <a href="#" class="articleCard ">

                <img src="./assets/img/internatmedarbejder-hunde.jpg" alt="Ældre kvinde der sidder med tre hunde">
                <div>
                    <p class="date">12-07-2024</p>
                    <p class="content">Hunde er et flokdyr, det ved de fleste forhåbentligt, men vidste du at det
                        også har indflydelse på deres adfærd når de er alene...
                    </p>
                    <p class="author">Af Thomas Inger</p>
                </div>
            </a>
            <a href="#" class="articleCard ">

                <img src="./assets/img/hund-og-killing.jpg" alt="Stor hund som ligger bag en lille killing">
                <div>
                    <p class="date">26-06-2024</p>
                    <p class="content">Hunde og katte er naturlige fjender! Høre man en gang imellem nogen sige, men
                        det er ikke sandt, hunde specielt kan...
                    </p>
                    <p class="author">Af Vibeke Sommer</p>
                </div>
            </a>
        </div>
        <a href="#" class="btn">Se flere artikler</a>

    </section>
    <section>
        <a href="#" class="focusEntryPoint ">

            <img src="<?php echo get_theme_file_uri('./assets/img/traning.jpg') ?>" alt="Kvinde der får en hund til at sitte">
            <div>
                <p> Læs om vores adfærdstræning</p>
            </div>
        </a>
        <a href="#" class="focusEntryPoint">

            <img src="<?php echo get_theme_file_uri('./assets/img/butik.jpg') ?>" alt="Ung kvinde med hvalp i dyrehandel, kigger på hunde legetøj">
            <div>
                <p>Se hvad vi sælger i vores butik</p>
            </div>
        </a>
    </section>
</main>
<?php
get_footer();
?>