<?php
get_header();
?>
<main>

    <section>
        <!-- Sets up the echo function to extract the thumbnail, and creates an array to append css classes on it -->
        <?php echo get_the_post_thumbnail(null, 'full', array('class' => 'halfWidth', 'basicInfo')); ?>
        <div class="halfWidth basicInfo">
            <h1><?php the_title(); ?></h1>
            <div>
                <p>Køn:</p>
                <p class="gender"><?php
                                    $custom_text = get_field('gender');
                                    if ($custom_text) {
                                        echo $custom_text;
                                    }
                                    ?></p>
            </div>
            <div>
                <p>Race:</p>
                <p class="race"><?php
                                $custom_text = get_field('race');
                                if ($custom_text) {
                                    echo $custom_text;
                                }
                                ?></p>
            </div>
            <div>
                <p>Alder:</p>
                <p class="age"><?php
                                // Extracts the date from "birthday", in the format Y-M-D so it can be coverted to show just the armount of years that have passed since said date 
                                $custom_text = get_field('birthday');
                                if ($custom_text) {
                                    $date = new DateTime($custom_text);
                                    $now = new DateTime();
                                    $interval = $now->diff($date);
                                    echo $years = $interval->y . ' år';
                                }
                                ?></p>
            </div>
            <div>
                <p>Vægt:</p>
                <p class="weight"><?php
                                    $custom_text = get_field('weight');
                                    if ($custom_text) {
                                        echo $custom_text . ' kg';
                                    }
                                    ?></p>
            </div>
            <a href="#" class="btn">Kontakt os for yderligere information om <?php the_title(); ?></a>

        </div>


    </section>

    <section>
        <div class="attributes halfWidth">
            <div class="animalAttributContainer">
                <h3>Trænbarhed</h3>
                <div class="animalAttribut">
                    <?php
                    // Makes an if statement, to make the attributes appear dynamically, it checks which of the options is selected, and creates the content accordingly 
                    $selected_option = get_field('trainability');

                    if ($selected_option === 'Lydig') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lydig</p>';
                    } elseif ($selected_option === 'Moderat') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Moderat</p>';
                    } elseif ($selected_option === 'Stædig') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Stædig</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Energi niveau</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('energy');

                    if ($selected_option === 'Lidt') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lidt</p>';
                    } elseif ($selected_option === 'Moderat') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Moderat</p>';
                    } elseif ($selected_option === 'Meget') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Meget</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Fælde niveau</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('shedding');

                    if ($selected_option === 'Lidt') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lidt</p>';
                    } elseif ($selected_option === 'Moderat') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Moderat</p>';
                    } elseif ($selected_option === 'Meget') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Meget</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Pelspleje</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('coat_maintenance');

                    if ($selected_option === 'Lidt') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lidt</p>';
                    } elseif ($selected_option === 'Moderat') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Moderat</p>';
                    } elseif ($selected_option === 'Meget') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Meget</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Gøen</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('barking');

                    if ($selected_option === 'Lidt') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lidt</p>';
                    } elseif ($selected_option === 'Moderat') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Moderat</p>';
                    } elseif ($selected_option === 'Meget') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Meget</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Størrelse</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('size');

                    if ($selected_option === 'Lille') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lille</p>';
                    } elseif ($selected_option === 'Mellem') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Mellem</p>';
                    } elseif ($selected_option === 'Stor') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Stor</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Temperament</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('temper');

                    if ($selected_option === 'Åben for alle') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Åben for alle</p>';
                    } elseif ($selected_option === 'Moderat') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Moderat</p>';
                    } elseif ($selected_option === 'Vagtsom') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Vagtsom</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Allergivenlighed</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('allergyfriendly');

                    if ($selected_option === 'Meget allergivenlig') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Meget allergivenlig</p>';
                    } elseif ($selected_option === 'Lidt allergivenlig') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Lidt allergivenlig</p>';
                    } elseif ($selected_option === 'IKKE allergivenlig') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>IKKE allergivenlig</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Boligforhold</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('living_condition');

                    if ($selected_option === 'Lejlighed med ingen have') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lejlighed med ingen have</p>';
                    } elseif ($selected_option === 'Bolig med lille have') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Bolig med lille have</p>';
                    } elseif ($selected_option === 'Bolig med stor have') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Bolig med stor have</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="animalAttributContainer">
                <h3>Savl</h3>
                <div class="animalAttribut">
                    <?php
                    $selected_option = get_field('drool');

                    if ($selected_option === 'Lidt') {
                        echo '<div>
                            <i class="fa-solid fa-paw selected"></i>
                            <i class="fa-solid fa-paw"></i>
                            <i class="fa-solid fa-paw"></i>
                        </div>
                        <p>Lidt</p>';
                    } elseif ($selected_option === 'Mellem') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw"></i>
                    </div>
                    <p>Mellem</p>';
                    } elseif ($selected_option === 'Meget') {
                        echo '<div>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                        <i class="fa-solid fa-paw selected"></i>
                    </div>
                    <p>Meget</p>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="halfWidth">
            <h2>Genrelt Information</h2>
            <p><?php the_content(); ?></p>
            <h2>Nøglepunkter</h2>
            <p>
            <ul>
                <li><?php
                    $custom_text = get_field('keypoint_1');
                    if ($custom_text) {
                        echo $custom_text;
                    }
                    ?></li>
                <li><?php
                    $custom_text = get_field('keypoint_2');
                    if ($custom_text) {
                        echo $custom_text;
                    }
                    ?></li>
                <li><?php
                    $custom_text = get_field('keypoint_3');
                    if ($custom_text) {
                        echo $custom_text;
                    }
                    ?></li>
            </ul>
            </p>
        </div>


    </section>
    <section class="animalImages">

        <?php
        // To ensure the images retrieved from WordPress comes out with both a correct link, as well as with it's alt description, we extract an array with these two parts and set them up appropriately, so they can be displayed 
        $image_1 = get_field('image_1');
        if ($image_1) {
            $image_url = $image_1['url'];
            $image_alt = $image_1['alt'];
        ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php }

        $image_2 = get_field('image_2');
        if ($image_2) {
            $image_url = $image_2['url'];
            $image_alt = $image_2['alt'];
        ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php }

        $image_3 = get_field('image_3');
        if ($image_3) {
            $image_url = $image_3['url'];
            $image_alt = $image_3['alt'];
        ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php }

        $image_4 = get_field('image_4');
        if ($image_4) {
            $image_url = $image_4['url'];
            $image_alt = $image_4['alt'];
        ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php }

        $image_5 = get_field('image_5');
        if ($image_5) {
            $image_url = $image_5['url'];
            $image_alt = $image_5['alt'];
        ?>
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
        <?php }
        ?>

    </section>

</main>
<?php
get_footer();
?>