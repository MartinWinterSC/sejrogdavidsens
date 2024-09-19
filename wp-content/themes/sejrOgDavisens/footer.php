<footer>

        <div class="footerTop">
            <img src="<?php echo get_theme_file_uri('./assets/img/SnDLogo.png') ?>" alt="Et ikon af en hund og en kat med teks af internats ejere"
                class="logo">
            <div class="contactInfo">
                <h3>Kontakt</h3>
                <div class="address">
                    <i class="fa-solid fa-house"></i>
                    <p>Solbærvej 123,<br>
                        9000 Aalborg,<br>
                        Danmark</p>
                </div>
                <div> <i class="fa-solid fa-phone"></i><a href="tel:">+45 71 23 45 67</a></div>
                <div><i class="fa-solid fa-at"></i><a href="mailto:">kontakt@sejrdavidsen.dk </a></div>
                <p>CVR: 99 00 11 88</p>
            </div>
            <div class="sitemap">
                <h3>Genveje</h3>
                <a href="<?php echo site_url("/find-din-race-test") ?>">Find den rette race - test</a>
                <a href="<?php echo site_url("/om-os.php#frivillig") ?>">Bliv frivillig</a>
                <a href="<?php echo site_url("/internat.php#indlevering") ?>">Indlever dyr</a>
                <a href="#">Vedtægter</a>
            </div>
        </div>
        <div class="footerBottom">
            <div>
                <h3>Åbningstider</h3>
                <p>Mandag - Fredag: 08:00 - 18:00 </p>
                <p>Lørdag: 09:00 - 16:00 </p>
                <p>Søndag: 10:00 - 14:00 </p>
            </div>
            <div class="sponsers">
                <a href="#"><img src="<?php echo get_theme_file_uri('./assets/img/sponser-placeholder.jpg') ?>"
                        alt="Et billede af en hund og kat sammen til placeholder af sponsere ikoner."></a>
                <a href="#"><img src="<?php echo get_theme_file_uri('./assets/img/sponser-placeholder.jpg') ?>"
                        alt="Et billede af en hund og kat sammen til placeholder af sponsere ikoner."></a>
                <a href="#"><img src="<?php echo get_theme_file_uri('./assets/img/sponser-placeholder.jpg') ?>"
                        alt="Et billede af en hund og kat sammen til placeholder af sponsere ikoner."></a>
            </div>
            <div class="donate">
                <h3>Doner et beløb, og hver med til at sikre at vi altid har midlerne til at tage os af de vidunderlige
                    hunde og katte.</h3>
                <p>Konto: 9092 2028180</p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>
<?php echo site_url("/") ?>