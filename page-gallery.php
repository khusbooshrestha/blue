<?php
/*
 * Template Name: Gallery
 * @package blueocean
 * @since 1.0.0
 * @version 1.0.0
 */

get_header();

?>
<section class="photo-gallery">
    <div class="container">
        <?php
        $photoTitle  = get_field('photo_title');
        $photos  = get_field('photos');

        if ($photoTitle || $photos) {
            if ($photoTitle) echo '<h2 class="section-title">' . esc_html($photoTitle) . '</h2>';
        ?>
            <?php if (isset($photos)) { ?>
                <div class="grid">
                    <?php foreach ($photos as $photo) {
                        if ($photo['image']) {
                            $image = $photo['image'];
                            echo '<div class="grid-item">';
                            echo '<a href="' . $image['url'] . '" data-fancybox="photo-gallery" >';
                            echo wp_get_attachment_image($image['ID'], 'full');
                            echo '</a>';
                            echo '</div>';
                        }
                    } ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</section>
<section class="video-gallery">
    <div class="container">
        <?php
        $title  = get_field('video_title');
        $videos = get_field('videos');

        if ($title || $videos) { ?>
            <div class="vdo-slider-section">
                <?php
                if ($title) echo '<h2 class="section-title text-center">' . esc_html($title) . '</h2>';

                if ($videos) { ?>
                    <div class="vdo-slider-holder">
                        <?php
                        foreach ($videos as $video) {
                            $image    = $video['image'];
                            $video_id = $video['video_id'];

                            if ($video_id) {
                                $video_url = 'https://vimeo.com/' . $video_id;
                                $videoThumb = 'https://vumbnail.com/' . $video_id . '_large.jpg'; ?>
                                <div class="vdo-slider">
                                    <div class="vdo-item">
                                        <?php
                                        if ($image) {
                                            echo wp_get_attachment_image($image['ID'], 'full');
                                        } else { ?>
                                            <img class="vdo-img" src="<?php echo esc_url($videoThumb); ?>" alt="">
                                        <?php
                                        }
                                        ?>
                                        <div class="vdo-btn-holder">
                                            <a href="<?php echo esc_url($video_url); ?>" data-fancybox="fancy-vdo-sec" class="vdo-play-btn" aria-label="לנגן וידאו"></a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        } ?>
    </div>
</section>
<style>

    .vdo-slider-holder {
        display: flex;
        gap: 1rem;
    }

    .vdo-slider-section .vdo-slider {
        width: 50%
    }

    .vdo-slider-section .vdo-slider .vdo-item {
        padding-top: 70%;
    }

    .vdo-slider-section .vdo-btn-holder .vdo-play-btn:before {
        content: "";
        display: inline-block;
        height: 60px;
        width: 60px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='64' height='64' viewBox='0 0 24 24'%3E%3C!-- Icon from Material Symbols by Google - https://github.com/google/material-design-icons/blob/master/LICENSE --%3E%3Cpath fill='white' d='m10.65 15.75l4.875-3.125q.35-.225.35-.625t-.35-.625L10.65 8.25q-.375-.25-.763-.038t-.387.663v6.25q0 .45.388.663t.762-.038M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22m0-2q3.35 0 5.675-2.325T20 12t-2.325-5.675T12 4T6.325 6.325T4 12t2.325 5.675T12 20m0-8'/%3E%3C/svg%3E");
    }


    @media (max-width: 767.98px) {

        .vdo-slider-holder {
            flex-direction: column;
        }

        .vdo-slider-section .vdo-slider {
            min-width: auto;
            max-width: 100%;
            width: 100%;
            padding: 0 1rem;
        }
    }
</style>
<?php
get_footer();
