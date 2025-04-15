<?php
/*
 * Template Name: Clients
 * @package blueocean
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();
 
$client_banner_title     = get_field('client_banner_title');
$client_banner_subtitle  = get_field('client_banner_subtitle');
$client_banner_image     = get_field('client_banner_image');
$clientBannerImage       = wp_get_attachment_image_src($client_banner_image['ID'], 'full')[0];
?>
<div class="hero-banner">
        <div class="bg-image">
            <picture>
                <!--[if IE 9]><video style="display: none;"><![endif]-->
                <source srcset="<?php echo esc_url($clientBannerImage);?>" media="(max-width: 767px)" />
                <source srcset="<?php echo esc_url($clientBannerImage);?>" />
                <!--[if IE 9]></video><![endif]-->
                <img src="<?php echo esc_url($clientBannerImage);?>" alt="<?php echo esc_attr($client_banner_image['title']);?>" title="<?php echo esc_attr($client_banner_image['title']);?>" />
            </picture>
        </div>
        <div class="banner-content">
            <div class="container">
                <div class="banner-text text-left">
                    <h1 class="banner-title">
                      <?php echo esc_attr($client_banner_title); ?>
                    </h1>
                    <span class="sub-heading">
                      <?php echo wp_kses_post($client_banner_subtitle); ?>
                    </span>
                </div>
            </div>
        </div>
</div>
<?php if ( get_field( 'client_logos' ) ): ?>
<div class="logo-section">
    <div class="container">
        <div class="logo-wrap d-flex justify-center flex-wrap">
            <?php foreach ( get_field( 'client_logos' ) as $item ): 
                $logo_image = wp_get_attachment_image_src( $item['logo_image']['ID'], 'full' )[0];
                ?>
            <div class="logo-item">
              <img src="<?php echo $logo_image;?>" alt="<?php echo esc_attr($item['logo_image']['title']);?>">
            </div>
            <?php  endforeach; ?>
        </div>
    </div>
</div>
<?php endif;?>
<?php get_footer();