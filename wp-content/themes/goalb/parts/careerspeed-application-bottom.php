<section class="careerspeed-application -bottom">
    <div class="careerspeed-application__image">
        <picture>
            <source media="print,only screen and (min-width:768px)"
                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/careerspeed/application-picture-bottom02.jpg">
            <source media="only screen and (max-width:767px)"
                srcset="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/careerspeed/application-picture-bottom-sp02.jpg">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/careerspeed/application-picture-bottom02.jpg"
                alt="">
        </picture>
    </div>
    <?php get_template_part('parts/careerspeed-application__text'); ?>
</section>