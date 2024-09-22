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
            
        <?php

$articles = new WP_Query([
    'post_type' => 'articles',
    'order' => 'ASC'
]);

while ($articles->have_posts()) {
    $articles->the_post();
    ?>

    <a href="#" class="articleCard ">
        <?php the_post_thumbnail(); ?>
        <div>
            <p class="date"><?php the_date(); ?></p>
            <p class="content">
                <?php echo mb_strimwidth(get_the_content(), 0, 110, '...'); ?>
            </p>
            <p class="author"><?php the_author(); ?></p>
        </div>
    </a>

    <?php
}
?>

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