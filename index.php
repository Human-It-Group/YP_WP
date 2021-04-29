<?php get_header(); ?>


    <div class="block_apply">
        <div class="dots_girl">
            <div class="girl">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zdj1.png" alt="logo">
            </div>
            <div class="dots_large">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/dots_large.svg" alt="logo">
            </div>
        </div>
        <div class="list_header">
            <ul>
                <li id="are_you_student"><?php echo get_theme_mod('list_1'); ?></li>
                <li><?php echo get_theme_mod('list_2'); ?></li>
                <li><?php echo get_theme_mod('list_3'); ?></li>
            </ul>
        </div>
        <div class="text_header">
            <p>
                <?php echo get_theme_mod('text_after'); ?><em> <?php echo get_theme_mod('text_after_yellow'); ?></em>
            </p>
        </div>
        <div class="btn_login">
            <a href="<?php echo get_stylesheet_directory_uri(); ?> /contact.php">ZGŁOŚ SIĘ!</a>
        </div>
    </div>


    <div class="block_tasks">
        <div class="name_block_tasks">
            <h2>
                <?php echo get_theme_mod('Tasks_name'); ?>
            </h2>
        </div>
        <div class="sector_number_text_tasks">
            <div class="number_text_tasks">
                <div class="numbr_image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/number1.svg" alt="logo">
                </div>
                <div class="number_text">
                    <p>
                         <?php echo get_theme_mod('task_text_1'); ?>
                    </p>
                </div>
            </div>
            <div class="number_text_tasks">
                <div class="numbr_image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/number2.svg" alt="logo">
                </div>
                <div class="number_text">
                    <p>
                        <?php echo get_theme_mod('task_text_2'); ?>
                    </p>
                </div>
            </div>
            <div class="number_text_tasks">
                <div class="numbr_image">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/number3.svg" alt="logo">
                </div>
                <div class="number_text">
                    <p>
                        <?php echo get_theme_mod('task_text_3'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div class="block_benefit">
        <div class="name_block">
            <h2>
                <?php echo get_theme_mod('Benefits_name'); ?>
            </h2>
        </div>
        <div class="list_benefit">
            <ul>
                <div class="part1_list">
                    <li><?php echo get_theme_mod('benefit_list_1'); ?></li>
                    <li><?php echo get_theme_mod('benefit_list_2'); ?></li>
                    <li><?php echo get_theme_mod('benefit_list_3'); ?></li>
                </div>
                <div class="part2_list">
                    <li><?php echo get_theme_mod('benefit_list_4'); ?></li>
                    <li><?php echo get_theme_mod('benefit_list_5'); ?></li>
                    <li><?php echo get_theme_mod('benefit_list_6'); ?></li>
                </div>
            </ul>
        </div>
    </div>


    <div class="block_whoweare">
        <div class="name_whoweare">
            <h2>
                <?php echo get_theme_mod('WhoWeAre_name'); ?>
            </h2>
        </div>
        <div class="dots_whoweare">
            <div class="whoweare_image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zdj2_corr.png" alt="logo">
            </div>
            <div class="dots_black">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/dots_black.svg" alt="logo">
            </div>
            <div class="dots_less">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/dots_large.svg" alt="logo">
            </div>
        </div>
        <div class="text_whoweare">
            <p>
            <?php echo get_theme_mod('text_whoweare1'); ?> <i><?php echo get_theme_mod('text_whoweare2'); ?></i>
            </p>
        </div>
    </div>


    <div class="block_carousel">
        <div class="name_block">
            <h2>
                <?php echo get_theme_mod('About_us_name'); ?>
            </h2>
        </div>
        <div class="all">
            <input checked type="radio" name="respond" id="desktop">
                <article id="slider">
                        <input checked type="radio" name="slider" id="switch1">
                        <input type="radio" name="slider" id="switch2">
                        <input type="radio" name="slider" id="switch3">
                        <input type="radio" name="slider" id="switch4">
                        <input type="radio" name="slider" id="switch5">
                    <div id="slides">
                        <div id="overflow">
                            <div class="image">
                                <article><div id ="instafeed-container"></article>
                            </div>
                        </div>
                    </div>
                    <div id="controls">
                        <label for="switch1"></label>
                        <label for="switch2"></label>
                        <label for="switch3"></label>
                        <label for="switch4"></label>
                        <label for="switch5"></label>
                    </div>
                </article>
        </div>
        <div class="api_screen">
            <div id ="instafeed-container">
            <script>
                userFeed.run();
            </script>
            </div> 
        </div>
        <div class="dots_black_part2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/dots_black.svg" alt="logo">
        </div>
    </div>


    <div class="block_comein">
        <div class="name_text_ambasador">
            <div class="name_block_ambasador">
                <h2>
                    <?php echo get_theme_mod('Ambasador_name'); ?>
                </h2>
            </div>
            <div class="text_whoweare_ground">
                <p>
                    <?php echo get_theme_mod('text_ambasador'); ?>
                </p>
            </div>
        </div>
        <div class="comein_image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zdj3_curr.png" alt="logo">
        </div>
        <div class="comein_image1200">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zdj3_1200.png" alt="logo">
        </div>
        <div class="dots_black">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/dots_black.svg" alt="logo">
        </div>
        <div class="btn_login_ground">
            <a href="<?php echo get_stylesheet_directory_uri(); ?>/contact.php">ZGŁOŚ SIĘ!</a>
        </div>
    </div>
    <div class="cookie-container">
         <div class = cookies_block>
             <p>
                Strona wykorzystuje pliki cookie. Jeśli nie wyrażasz zgody, ustawienia dotyczące plików cookies możesz zmienić w swojej przeglądarce. 
                Pełna treść:
                    <a href="<?php echo get_stylesheet_directory_uri(); ?> /contact.php">Polityka cookies</a>
                </p>
             <div class="btn_cookies">
                 <button class="cookie-btn">
                        Rozumiem
                 </button>
             </div>
         </div>
    </div>
<?php get_footer(); ?>
