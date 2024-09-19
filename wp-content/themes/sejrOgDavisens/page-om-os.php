<?php
get_header();
?>
<main class="zeroMarginTopBottom ">
    <div class="localNav">
        <div> <a href="#ejerne" class="navItem"><i class="fa-solid fa-paw "></i> Ejerne</a></div>
        <div class="decor"></div>
        <div><a href="#ansatte" class="navItem"><i class="fa-solid fa-paw "></i> De Ansatte</a></div>
        <div class="decor"></div>
        <div> <a href="#historie" class="navItem"> <i class="fa-solid fa-paw "></i> Vores Historie</a></div>
        <div class="decor"></div>
        <div> <a href="#frivillig" class="navItem"><i class="fa-solid fa-paw "></i> Bliv Frivilig</a></div>
        <div class="decor"></div>
        <div> <a href="#faciliteter" class="navItem"><i class="fa-solid fa-paw "></i> Faciliteterne</a></div>
        <div class="decor"></div>

    </div>
    <div class="onePageContentContainer omOs">
        <h1><?php the_title(); ?></h1>
        <section class="fullWidth" id="intro"> <!-- Intro-->
            <div class="onePageContent">
                <p>
                    I dyrepensionen stræber vi efter at hunde- og katteejere, kan booke pasning og pleje til deres
                    selskabs-/familiedyr med god ro i maven, og føle at deres dyreven(ner) har en tryg og god
                    tilstedeværelse under opholdet.
                </p>
                <p>
                    Dyreinternatets formål er at skabe et trygt og professionelt sted hvor myndighederne eller
                    privatpersoner kan indlevere dyr, som vil blive passes, plejes og trænes med henblik på at blive
                    bortadopteret.
                </p>
                <p>
                    Udover vores fokus på pasning og adoption, lægger vi stor vægt på at støtte dyreejere gennem
                    rådgivning og uddannelse.
                </p>
            </div>
            <div class="onePageContent">
                <p>
                    I <a href="#">Artikler</a> deler vi tips og råd fra eksperter og brands, med formålet at videns
                    dele og skabe bedre forståelse for ens dyr. Yderligere har vi også tilknyttet en mindre, fysisk
                    butik, der
                    tilbyder nøje udvalgte produkter, der understøtter vores mission om at sikre dyrenes sundhed og
                    trivsel.
                </p>
                <p>
                    Vores kerneværdier er tryghed, omsorg og ekspertise, hvilket sikre, at alle dyr får den bedste
                    pleje - på pensionen, internatet og når de bliver adopteret. Sammen brænder vi for at sikre at
                    dyrenes velfærd, og skabe professionelle og indbydende rammer for alle der besøger Sejr &
                    Davidens Dyrepension og -internat.
                </p>
            </div>

        </section>
        <section class="fullWidth" id="ejerne"> <!-- Ejere-->
            <h2 class="fullWidth">Ejerne </h2>
            <p id="textLeft">Med sin uddannelse som veterinærsygeplejerske og efteruddannelse i dyreadfærd,
                hjælper Jesper til når
                Merete praktiserer, og ellers fokusere han på at pleje og træne dyrepensionens dyr så de har det
                godt og kan blive klar til at blive bortadopteret.</p>
            <div class="imgContainer">
                <img src="<?php echo get_theme_file_uri('./assets/img/merete-sejr-og-jesper-davidsen.jpg') ?>"
                    alt="Merete Sejr og Jesper Davidsen som står foran deres Internat">
                <div class="ejerHoverLeft"></div>
                <div class="ejerHoverRight"></div>
            </div>
            <p id="textRight">
                Merete, der er uddannet dyrelæge med efteruddannelse som Fagdyrelæge i sygdomme hos
                hunde og katte,
                har tidligere haft sin helt egen praksis, og bruger nu sin tid og kompetencer på at tage sig af
                dyrepensionens dyr.</p>
        </section>
        <section class="fullWidth" id="ansatte"> <!-- Ansatte-->
            <h2 class="fullWidth">De Ansatte</h2>

            <?php

            $employees = new WP_query([
                'post_type' => 'employees',
                'order' => 'ASC'
            ]);

            while ($employees -> have_posts()) {
                $employees -> the_post()
            ?>

                <article class="employeCard ">

                    <?php the_post_thumbnail(); ?>
                    <div>
                        <h3 class="name"><?php the_title(); ?></h3>
                        <h3 class="title"><?php the_content(); ?></h3>
                    </div>
                </article>

            <?php
            }
            ?>

        </section>
        <section class="fullWidth" id="historie"> <!-- Historie-->
            <h2 class="fullWidth">Vores Historie</h2>
            <div class="onePageContent">
                <p>
                    Vi, Merete Sejr og Jesper Davidsens, har startet Sejr & Davidsens Dyrepension og -internat op
                    med henblik på at skabe et trygt og sikkert sted for herreløse dyr og for dyreejere der har brug
                    for midlertidig pasning af deres dyr. Vi har en fælles drøm om at skabe et professionelt og
                    trygt sted hvor dyr kan passes, trænes og adopteres, samtidig med at fremtidige og nuværende
                    dyreejere kan få den nødvendige støtte og rådgivning, så alle dyr får en chance for at finde et
                    trygt og sikkert hjem.
                </p>
            </div>

            <img src="<?php echo get_theme_file_uri('./assets/img/dyrelæge-bandagere-hund.jpg') ?>" alt="Dyrelæge som sætter bandage på en hunds ben"
                class="onePageContent">

        </section>

        <section class="fullWidth" id="frivillig"> <!-- Frivillig-->
            <h2 class="fullWidth">Bliv Frivillig</h2>
            <img src="<?php echo get_theme_file_uri('./assets/img/staff.jpg') ?>"
                alt="Billede af en persons ryg med en rød t-shirt med “STAFF” skrevet på den"
                class="onePageContent">

            <div class="onePageContent">
                <p>
                    Da vores internat drives som en forening med offentlig støtte og donationer fra virksomheder, er
                    vi stærkt afhængige af frivillige til at hjælpe os med at passe de skønne dyr der bliver
                    indleveret i internatet. Som frivillig er du med til at hjælpe os med rengøring, oprydning,
                    gåture og katte- og hundenus, mens du bidrager til at gøre ventetiden positiv for dyrene, indtil
                    de finder deres forevigehjem. Udover de frivillige der hjælper til på selve internatet, har vi
                    også brug for plejefamilier til at pleje og passe vores misse- og hundemødre og deres unger
                    indtil de er gamle nok til at blive adopteret (hvalpe 10 uger, killinger 12 uger).
                </p>
                <p>
                    Det er en enestående og utrolig hyggelig oplevelse, der kan bringe liv og glæde i ens hjem. Du
                    får muligheden for at skabe et trygt og kærligt miljø for dyrene i en afgørende fase af deres
                    liv, og du vil opleve glæden ved at se dem udvikle sig og blive klar til adoption. 

                </p>
                <p>Brænder du for at gøre en forskel i dyrenes liv, eller vil du høre mere om, hvordan du kan
                    hjælpe som frivillig eller plejefamilie? Så send os en mail på <a
                        href="mailto:">kontakt@sejrdavidsen.dk</a>!</p>
            </div>


        </section>
        <section class="fullWidth" id="faciliteter"> <!-- Faciliter-->
            <h2 class="fullWidth">Faciliteterne</h2>
            <div class="container">
                <div class="content">
                    <h2>Gården</h2>
                    <p>Gården er hvor samtlige dyr, både dem som er i pensionen men også dem dyrene fra internatet
                        som er klar til at socialisere. Det er et stort område som giver alle dyr plads til at være
                        for dem selv hvis det er det de ønsker, eller lege sammen, med et stort udvalg af legetøj
                        stillet tilgængeligt via donationer</p>
                </div>
                <img src="<?php echo get_theme_file_uri('./assets/img/kontakt-internat-facade.jpg') ?>" alt="Facaden til Sejr og Davidsens Internat">
                <div class="navigation">
                    <button><i class="fa-solid fa-arrow-left"></i></button>
                    <button><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </div>


        </section>
        <section class="fullWidth MarginBottom32px">
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
    </div>
</main>
<?php
get_footer();
?>