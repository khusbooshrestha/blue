<?php
$banner_image         = get_sub_field( 'banner_image' );
$banner_slider_images = get_sub_field( 'banner_slider_images' );
$mobile_banner_image  = get_sub_field( 'mobile_banner_image' );
$banner_title         = get_sub_field( 'banner_title' );
$banner_subtitle      = get_sub_field( 'banner_subtitle' );
$button_one           = get_sub_field( 'button_one' );
$button_two           = get_sub_field( 'button_two' );

if ( ! empty( $banner_slider_images ) ) {
	/*$big_featured_image = wp_get_attachment_image_src( $banner_image['ID'], 'bocean_hbanner_db' )[0];
	if ( ! empty( $mobile_banner_image ) ) {
		$mbfeatured_image = wp_get_attachment_image_src( $mobile_banner_image['ID'], 'bocean_hbanner_db' )[0];
	} else {
		$mbfeatured_image = $big_featured_image;
	}*/
	?>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        .swiper {
            width: 100%;

            img {
                width: 100%;
            }
        }

        .banner-content {
            max-width: 80%;
            margin: 0 auto;
        }
    </style>
    <div class="hero-banner">
        <div class="swiper bg-image">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
			    <?php
                foreach ( $banner_slider_images as $banner_slider_image ):
	                $featured_image = wp_get_attachment_image_src( $banner_slider_image['banner_slider_image']['ID'], 'bocean_hbanner_db' )[0];
                    ?>
                    <div class="swiper-slide">
                        <picture>
                            <!--[if IE 9]>
                            <video style="display: none;"><![endif]-->
                            <source srcset="<?php echo esc_url( $featured_image ); ?>" media="(max-width: 767px)"/>
                            <source srcset="<?php echo esc_url( $featured_image ); ?>"/>
                            <!--[if IE 9]></video><![endif]-->
                            <img src="<?php echo esc_url( $featured_image ); ?>"
                                 alt="<?php echo esc_attr( $banner_slider_image['title'] ); ?>"
                                 title="<?php echo esc_attr( $banner_slider_image['title'] ); ?>"/>
                        </picture>
                    </div>
			    <?php endforeach; ?>
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <div class="banner-content">
            <div class="container">
                <div class="banner-text text-center">
                    <h1 class="banner-title">
						<?php echo esc_attr( $banner_title ); ?>
                    </h1>
                    <span class="sub-heading">
                   <?php echo esc_attr( $banner_subtitle ); ?>
                </span>
                    <div class="btn-wrap d-flex align-items-center justify-center">
						<?php if ( ! empty( $button_one ) && $button_one['title'] != '' && $button_one['url'] != '' ) { ?>
                            <a href="<?php echo esc_url( $button_one['url'] ); ?>"
                               target="<?php echo esc_attr( $button_one['target'] ); ?>"
                               class="btn btn-secondary btn-round" tabindex="0">
								<?php echo esc_attr( $button_one['title'] ); ?>
                            </a>
						<?php }
						if ( ! empty( $button_two ) && $button_two['title'] != '' && $button_two['url'] != '' ) { ?>
                            <a href="<?php echo esc_url( $button_two['url'] ); ?>"
                               target="<?php echo esc_attr( $button_two['target'] ); ?>"
                               class="btn btn-secondary btn-round" tabindex="0">
								<?php echo esc_attr( $button_two['title'] ); ?>
                            </a>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const banner_swiper = new Swiper('.bg-image', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
<?php }