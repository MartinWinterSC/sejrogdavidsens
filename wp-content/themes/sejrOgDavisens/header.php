<!DOCTYPE html>
<php lang="da">

    <head>
        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('./assets/img/SnDLogo.png') ?>"
                    alt="Et ikon af en hund og en kat med teks af internats ejere" class="logo"></a>

            <nav>
                <div class="dropdown "><a class="dropdownBtn">Sejr & Davidsens <i class="fa fa-caret-down "></i></a>
                    <div class="dropdown-content">
                        <a href="<?php echo site_url("/om-os") ?>" class="navItem">Om Os</a>
                        <a href="#" class="navItem">Artikler</a>
                        <a href="#" class="navItem">Fysisk Butik</a>

                    </div>
                </div>
                <a href="#" class="navItem">Adfærdstræning</a>
                <a href="<?php echo site_url("/internat") ?>" class="navItem">Internat</a>
                <a href="#" class="navItem">Pension</a>
                <a href="#" class="navItem">Kontakt</a>
                <button><i class="fa-solid fa-user"></i></button>
            </nav>
        </header>
        <!-- Sets up the header -->