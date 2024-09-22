<?php 
    get_header();
?>
    <main class="zeroMarginTopBottom ">
        <div class="localNav">
            <div> <a href="#dyr" class="navItem"><i class="fa-solid fa-paw "></i> Vores dyr</a></div>
            <div class="decor"></div>
            <div> <a href="#genereltInfo" class="navItem"><i class="fa-solid fa-paw "></i> Generelt info om adoption</a>
            </div>
            <div class="decor"></div>
            <div> <a href="#pris" class="navItem"><i class="fa-solid fa-paw "></i> Priser</a></div>
            <div class="decor"></div>
            <div> <a href="#forInfo" class="navItem"><i class="fa-solid fa-paw "></i> Info før adoption</a></div>
            <div class="decor"></div>
            <div> <a href="#efterInfo" class="navItem"><i class="fa-solid fa-paw "></i> Info efter adoption</a></div>
            <div class="decor"></div>
            <div> <a href="#indlevering" class="navItem"><i class="fa-solid fa-paw "></i> Info om indlevering</a></div>


        </div>
        <div class="onePageContentContainer">
            <h1><?php the_title(); ?></h1>
            <section class="fullWidth" id="intro"> <!-- Intro-->
                <img src="<?php echo get_theme_file_uri('./assets/img/familie-i-internatet.jpg') ?>"
                    alt="En mor, far og datter der går forbi internatets burer mens de holder i hånd."
                    class="onePageContent">
                <p class="onePageContent">Vi har et stort internat, hvor vi på hvilket som helst tidspunkt har omkring
                    20 hunde og katte, som er klar til at finde sig et godt hjem.
                    Vores faciliteter gør at alle dyr har en god levestandart og bliver taget sig af på daglig basis af
                    vores ansatte og frivillige.
                    Alle dyr som er sat til adoption har haft basal træning, er chippet og vacineret og er dømt klar til
                    adoption af vores personale.</p>
            </section>
            <section class="fullWidth" id="dyr"> <!-- dyr-->
                <h2 class="fullWidth">Vores dyr</h2>
                <div class="fullWidth animals">
                    <button id="cat">
                        <div>
                            <p>Kat</p>
                        </div>
                    </button>
                    <button id="dog">
                        <div class="active">
                            <p>Hund</p>
                        </div>
                    </button>
                    <div class="filterContainer">
                        <div class="filterGroup">
                            <h3>Trænbarhed <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="tranbarhedLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="tranbarhedModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="tranbarhedMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Energi niveau <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="energiLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="energiModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="energiMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Fælde niveau <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="feldeLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="feldeModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="feldeMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Pelspleje <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="pelsplejeLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="pelsplejeModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="pelsplejeMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Gøen <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="goenLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="goenModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="goenMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Størrelse <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="storrelseLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="storrelseModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="storrelseMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Temperament <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="temperamentLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="temperamentModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="temperamentMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Allergivenlig <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="allergivenligLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="allergivenligModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="allergivenligMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Boligforhold <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="boligforholdLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="bogligforholdModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="boligforholdMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                        <div class="filterGroup">
                            <h3>Savl <i class="fa-solid fa-chevron-right "></i></h3>
                            <div class="options hidden">
                                <label class="toggle">
                                    <input id="savlLidt" type="checkbox" value="x" />
                                    <span class="tag">Lidt</span>
                                </label>

                                <label class="toggle">
                                    <input id="savlModerat" type="checkbox" value="x" />
                                    <span class="tag">Moderat</span>
                                </label>

                                <label class="toggle">
                                    <input id="savlMeget" type="checkbox" value="x" />
                                    <span class="tag">Meget</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="animalContainer">

                        <?php
                            $adoptable_dogs = new WP_query([
                            'post_type' => 'adoptable_dogs',
                            'order' => 'ASC'
                            ]);

                            while ($adoptable_dogs -> have_posts()) {
                            $adoptable_dogs -> the_post()
                        ?>

                        <a href="<?php the_permalink(); ?>" class="animalCard ">

                        <?php the_post_thumbnail(); ?>
                        <div>
                            <h3 class="name"><?php the_title(); ?></h3>
                            <?php 
                                $custom_text = get_field('gender');

                                if ($custom_text) {
                                    echo '<p>Køn: <span class="speices">' . esc_html($custom_text) . '</span></p>';
                                }
                                $custom_text = get_field('race');

                                if ($custom_text) {
                                    echo '<p>Race: <span class="race">' . esc_html($custom_text) . '</span></p>';
                                }
                            ?>
                        </div>
                        </a>

                        <?php
                            }
                        ?>
                        
                    </div>
                </div>

            </section>

            <section class="fullWidth"> <!-- Test-->
                <a href="./find-din-race-test.html" class="testFEP ">

                    <img src="<?php echo get_theme_file_uri('./assets/img/test-hunde.jpg') ?>" alt="14 hunde af forskellige racer der står på række">

                    <div>
                        <h2>I tvivl om hvilken race du skal have? Tag testen!</h2>
                    </div>
                </a>
            </section>
            <section class="fullWidth" id="genereltInfo"> <!-- generelt info-->
                <h2 class="fullWidth">Generelt info om adoption</h2>
                <img src="<?php echo get_theme_file_uri('./assets/img/par-med-deres-kat.jpg') ?>"
                    alt="En mand og en dame der sidder på gulvet med deres røde kat." class="onePageContent">
                <div class="onePageContent">
                    <p>At adoptere et kæledyr er en stor beslutning, og det kræver nøje overvejelser. Hos Sejr og
                        Davidsens Dyreinternat håber vi altid på, at dyrene finder deres forevigehjem, og derfor lægger
                        vi stor vægt på at informere og rådgive, så du er klar over, hvad du skal forvente når du tager
                        en hund eller kat med hjem.</p>
                    <p>I dagens Danmark oplever vi mere end nogensinde før, at dyr bliver efterladt i det fri, eller
                        afleveret på internater. Når man overvejer at adoptere et dyr, er der mange faktorer at tage
                        højde for, da både hunde og katte kan leve i mange år. Er jeg forberedt på at tage ansvar for
                        dyret de næste måske 15 år? Og har jeg den følelsesmæssige kapacitet til at tage mig af dyret i
                        det lange løb? Har jeg en bolig der er passende for et kæledyr, og er jeg nok hjemme til at
                        kunne opfylde dets behov? Har jeg den nødvendige økonomi til foder, dyrelægeregninger,
                        forsikringer og andre udgifter?</p>
                    <p>
                        Vi har derfor samlet al den nødvendige information, så du er bedst muligt forberedt til at give
                        dit nye kæledyr et trygt og kærligt hjem.
                    </p>

                </div>
            </section>
            <section class="fullWidth" id="pris"> <!-- pris-->
                <h2>Priser</h2>
                <div class="calloutTextbox onePageContent">
                    <div>
                        <i class="fa-solid fa-cat"></i>
                    </div>
                    <h3>Adoptionspris for katte</h3>
                    <p>Prisen for at adoptere en kat fra internatet er 1.100 kroner. Prisen er inklusiv:</p>
                    <ul>
                        <li>Dyrlægeeftersyn, med test for katteaids og -leukæmi</li>
                        <li>Neutralisering (kastrering/sterilisering)</li>
                        <li>Vaccination</li>
                        <li>Øremærkning og chipning</li>
                        <li>Registrering i Det Danske Katteregister</li>
                        <li>Behandling for orm og lopper</li>
                    </ul>
                </div>
                <div class="calloutTextbox onePageContent">
                    <div>

                        <i class="fa-solid fa-dog"></i>
                    </div>
                    <h3>Adoptionspris for hunde</h3>
                    <p>Prisen for at adoptere en hund fra internatet variere fra 1.500-4.000 kroner, alt efter hundens
                        race. Prisen er inklusiv:</p>
                    <ul>
                        <li>Dyrlægeeftersyn</li>
                        <li>Neutralisering (kastrering/sterilisering)</li>
                        <li>Vaccination</li>
                        <li>Øremærkning og chipning</li>
                        <li>Registrering i Det Danske Hunderegister</li>
                        <li>Behandling for orm og lopper</li>
                        <li>Træning og socialisering</li>
                    </ul>
                </div>

            </section>
            <section class="fullWidth" id="forInfo"> <!-- Før-->
                <h2 class="fullWidth">Godt at vide før adoption</h2>
                <div class="onePageContent">
                    <p>Et kæledyr er en del af familien og, ligesom børn, har de behov og medfører omkostninger. En
                        forskel er dog, at det ikke er tilladt at have dyr alle steder, så det første du skal have styr
                        på er, om du overhovedet må have et kæledyr hvor du bor. Det næste er at sætte sig ind i hvad du
                        egentlig gerne vil have; en hvalp, en killing, en ung voksen, eller en senior, og hvad der
                        ligger i at vælge det du ønsker. </p>
                    <p>
                        Når du har fundet ud af hvad du kunne tænke dig, er det altid en god ide at researche lidt for
                        at blive klogere. Undersøg hunderacen, eller hvad du skal være opmærksom på, når en kat skal
                        lære et ny sted at kende. Hvad kræver racen af vedligeholdelse? Fælder den meget, hvor meget og
                        ofte skal den børstes eller vaskes? Er der helbredsmæssige ting at forholde sig til ved den
                        race?
                    </p>

                </div>
                <img src="<?php echo get_theme_file_uri('./assets/img/to-born-med-kat-og-hund.jpg') ?>"
                    alt="En dreng og en pige der sidder på en græsplæne sammen med dere hund og kat."
                    class="onePageContent">
                <img src="<?php echo get_theme_file_uri('./assets/img/kat-i-transportkasse.jpg') ?>" alt="En rød kat i en lukket transportkasse."
                    class="onePageContent"> <!-- Husk alt tekst-->
                <div class="onePageContent">
                    <p>Det er et levende væsen du bringer ind i dit hjem, der skal have foder og til dyrlægen en gang i
                        mellem, så det er vigtigt at tjekke op på hvad det kan komme til at koste. Der kan også være
                        omkostninger til forsikring. Vi anbefaler at man sætter 300-600 kroner til siden til sit kæledyr
                        om måneden til foder, dyrelægeregninger og andre nødvendige udgifter som snor, legetøj, og
                        børster.</p>
                    <p>
                        Det er også en rigtig god ide at komme og besøge katten eller hunden du gerne vil adoptere, lære
                        den lidt at kende og sikre at dyret passer til din livsstil og hjem.
                    </p>
                    <p>
                        Har du fået styr på hvilket dyr du gerne vil adoptere, og har fundet det helt perfekte, nye
                        familiemedlem i internatet, er sidste skridt at få købt de essentielle ting ind, så du har dem
                        klar når du henter din nye hund eller kat. Vi har her samlet vores anbefaling:
                    </p>

                </div>
                <div class="calloutTextbox onePageContent">
                    <div>
                        <i class="fa-solid fa-cat"></i>
                    </div>
                    <h3>Essentielle at have til kat</h3>
                    <ul>
                        <li>Kattetransportkasse</li>
                        <li>Kattebakke og kattegrus</li>
                        <li>Mad og drikkeskål</li>
                        <li>Foder, meget gerne det samme som den får på internatet</li>
                        <li>Legetøj</li>
                    </ul>
                </div>
                <div class="calloutTextbox onePageContent">
                    <div>

                        <i class="fa-solid fa-dog"></i>
                    </div>
                    <h3>Essentielle at have til hunde</h3>

                    <ul>
                        <li>Hunde transportkasse</li>
                        <li>Hundesnor og poser</li>
                        <li>Mad og drikkeskål</li>
                        <li>Foder, meget gerne det samme som den får på internatet</li>
                        <li>Legetøj</li>
                    </ul>
                </div>
                <div class="onePageContent">

                    <p>
                        Når du skal hente dit nye kæledyr, skal du tage højde for at adoptionen ofte tager mellem 1-1½
                        time. På den måde er der god tid til at blive rådgivet og få styr på diverse dokumenter og
                        registreringer.
                    </p>
                    <p>
                        Når du skal hente dit nye kæledyr, skal du tage højde for at adoptionen ofte tager mellem 1-1½
                        time. På den måde er der god tid til at blive rådgivet og få styr på diverse dokumenter og
                        registreringer.
                    </p>
                </div>
                <div class="onePageContent">
                    <a href="#" class="focusEntryPoint">

                        <img src="<?php echo get_theme_file_uri('./assets/img/butik.jpg') ?>"
                            alt="Ung kvinde med hvalp i dyrehandel, kigger på hunde legetøj">
                        <div>
                            <p>Se hvad vi sælger i vores butik</p>
                        </div>
                    </a>
                </div>
            </section>

            <section class="fullWidth" id="efterInfo"> <!-- Efter-->
                <h2 class="fullWidth">Godt at vide efter adoption</h2>
                <p class="onePageContent">Når du adopterer en kat, er det vigtigt at give den plads til at vænne sig til
                    sit nye hjem. Katte er
                    territoriale og kan tage lidt tid om at falde til, så det kan være en god idé at starte med et
                    mindre rum, hvor katten føler sig sikker. Sørg for at have kattens basale behov som mad, vand,
                    kattebakke og et sted at hvile klar fra starten. Giv katten ro, og lad den komme til dig, når den er
                    klar. Med tiden vil den gradvist føle sig mere tryg og udforske resten af hjemmet.</p>
                <p class="onePageContent">Når du adopterer en hund, er det vigtigt at give den tid til at tilpasse sig
                    sit nye hjem. Hunde kan være nervøse eller usikre i begyndelsen, sørg for at skabe en rolig og tryg
                    atmosfære. Giv hunden mulighed for at udforske i sit eget tempo og introducer nye omgivelser
                    langsomt. Etabler faste rutiner for gåture, fodring og leg, så hunden hurtigt kan føle sig hjemme.
                </p>
            </section>
            <section class="fullWidth" id="indlevering"> <!-- Indlevering-->
                <h2 class="fullWidth">Info om indlevering af dyr til internatet</h2>
                <div class="onePageContent">
                    <p>Der kan være mange grunde til at et dyr bliver indleveret hos os. Uanset grunden til at et dyr
                        har brug for et nyt hjem, er vi her for at hjælpe og sikre, at processen bliver en tryg og
                        positiv oplevelse for både dyret og ejeren.</p>
                    <p> Hos Sejr & Davidsens Dyrepension og -internat tager vi imod herreløse, nødstedte, eller svigtede
                        hunde og katte, som kan indleveres af både ejere og myndighederne.</p>
                    <p>Går du med tanker om at indlevere et dyr? Vi opfordrer dig til at kontakt os på hverdage mellem
                        9:00 og 12:00, på telefonnummer <a href="tel:">+45 71 23 45 67</a>, til en uforpligtende
                        samtale, hvor du kan høre nærmere eller lave en aftale. Bemærk venligst, at vi opkræver et
                        indleveringsgebyr, som du kan
                        få oplyst ved at kontakte os.</p>
                </div>
                <img src="<?php echo get_theme_file_uri('./assets/img/hund-bliver-overleveret.jpg') ?>"
                    alt="Hundehvalp der bliver indleveret til internatet." class="onePageContent">

            </section>

            <section class="fullWidth MarginBottom32px"> <!-- FEP-->
                <a href="#" class="focusEntryPoint ">

                    <img src="<?php echo get_theme_file_uri('./assets/img/traning.jpg') ?>" alt="Kvinde der får en hund til at sitte">
                    <div>
                        <p> Læs om vores adfærdstræning</p>
                    </div>
                </a>
                <a href="#" class="focusEntryPoint"><!-- HUSK UPDATE LINK!-->

                    <img src="<?php echo get_theme_file_uri('./assets/img/kvinde-der-skriver-pa-pc.jpg') ?>"
                        alt="En kvinde der sidder ved en computer og skriver.">
                    <div>
                        <p>Se alle vores artikler</p>
                    </div>
                </a>
            </section>


        </div>
    </main>
<?php
    get_footer();
?>