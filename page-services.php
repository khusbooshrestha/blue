<?php
/*
 * Template Name: Services
 * @package blueocean
 * @since 1.0.0
 * @version 1.0.0
 */

 get_header();

 while (have_posts()):
    the_post();

    if (have_rows('services_content_setttings')):

        while (have_rows('services_content_setttings')) : the_row();

            if (get_row_layout() == 'service_hero_banner'):

                get_template_part('templates/services/hero', 'banner');

            elseif (get_row_layout() == 'service_content_layout'):

                get_template_part('templates/services/services', 'content');

            elseif (get_row_layout() == 'services_banner_image'):

                get_template_part('templates/services/services', 'banner');
            
            elseif (get_row_layout() == 'service_features'):

                get_template_part('templates/services/features', 'layout');

            endif;  

        endwhile;
    else :
    endif;

endwhile;

 get_footer();