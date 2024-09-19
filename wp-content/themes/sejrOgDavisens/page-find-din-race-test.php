<?php 
    get_header();
?>
<main>
        <section class="testStart ">
            <img src="<?php echo get_theme_file_uri('./assets/img/hund-pa-gras.jpg') ?>" alt="En glad huns på en græsplæne.">
            <div>
                <h1>Find den rette race</h1>
                <h2>Her kan du finde lige præcis den hunderace som passer dig og din familie bedst. Du vil blive stillet
                    en række spørgsmål, som vil lede dig til den mest kompatibel hunderace.</h2>
                <button class="btn">Start testen</button>
            </div>
            <img src="<?php echo get_theme_file_uri('./assets/img/to-hund-pa-gras.jpg') ?>" alt="To hunde af forskellige race der leger på en græsplæne.">

        </section>
        <section class="testQuestion hidden">
            <h1></h1>

            <h2>Hvor meget skal du kunne træne din hund? </h2>

            <div class="answerContainer">
                <button class="testAnswer">
                    <p>Kan trænes i det basale</p>
                    <img src="<?php echo get_theme_file_uri('./assets/img/traning-lidt-ikon.png') ?>" alt="Ikon til at illustrer trænings niveau 1">


                </button>
                <div class="testAnswer">
                    <p>Kan trænes til at udføre et arbejde</p>
                    <img src="<?php echo get_theme_file_uri('./assets/img/traning-mellem-ikon.png') ?>" alt="Ikon til at illustrer trænings niveau 2">


                </div>
                <div class="testAnswer">
                    <p>Kan trænes til at blive specialiseret</p>
                    <img src="<?php echo get_theme_file_uri('./assets/img/traning-meget-ikon.png') ?>" alt="Ikon til at illustrer trænings niveau 3">

                </div>
            </div>
            <div class="buttons"> <button class="back"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="btn nextQuestion">Næste spørgsmål</button>
            </div>
        </section>
        <section class="testResult hidden">
            <h1> Find den rette race - Resultat</h1>

            <h2>Vi har samlet dine svar og har fundet de hunderacer der passer til dine ønsker og behov. </h2>
            <div class="result">
                <img src="<?php echo get_theme_file_uri('./assets/img/golden-retreiver.jpg') ?>"
                    alt="En golden retriever der sidder på en græsplæne i lyset af en solnedgang.">
                <div class="resultContainer">
                    <h2>Golden Retriever</h2>

                    <div class="attributesContainer">
                        <div class="animalAttributContainer">
                            <h3>Trænbarhed</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Energi niveau</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Fælde niveau</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Pelspleje</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Gøen</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Størrelse</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Temperament</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Allergivenlig</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Boligforhold</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>
                        <div class="animalAttributContainer">
                            <h3>Savl</h3>
                            <div class="animalAttribut">
                                <div>
                                    <i class="fa-solid fa-paw selected"></i>
                                    <i class="fa-solid fa-paw"></i>
                                    <i class="fa-solid fa-paw"></i>
                                </div>
                                <p>Moderat</p>
                            </div>
                        </div>


                    </div>
                    <div class="resultText">
                        <p>Golden retrieveren er en venlig og tillidsfuld hund, der er hengiven over for familien og god med børn. Den trives godt både som familie- og jagthund og enes som regel fint med andre hunde. Både hanner og tæver har et ensartet temperament og kræver opdragelse, mental stimulering og fysisk motion. Som jagthund henter den nedlagte fugle på førerens anvisninger og holder tæt kontakt.
                        <br>
                        Golden retrieveren er social og kontaktsøgende, og den trives bedst med opmærksomhed fra familien. Den har en tæt, vandafvisende pels med let bølgede dækhår og kræver regelmæssig børstning. Den er samarbejdsvillig og nem at træne med venlighed og konsekvens, og den elsker at bære ting i munden. Golden retrieveren er desuden glad for vand og kan blive en fremragende lydighedshund.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
    get_footer();
?>