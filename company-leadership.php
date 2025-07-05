<?php  
$cl_title    = get_sub_field('company_leadership_title');
$cl_sub_title = get_sub_field('company_leadership_sub_title');
$leadership_name = get_sub_field('leadership_name');
$cl_content = get_sub_field('leadership_content');
$leadership_position = get_sub_field('leadership_position');
$leadership_image    = get_sub_field('leadership_image');
$leadershipImage = wp_get_attachment_image_src($leadership_image['ID'], 'full')[0];
?>
<section class="leadership">
    <div class="leadership-wrap">
        <div class="container">
            <div class="leader">
                <div class="leader-image">
                <img src="<?php echo esc_url($leadershipImage);?>" alt="<?php echo esc_attr($leadership_image['title']);?>">
                </div>
                <div class="leader-text">
                <div class="section-header section-header--white">  
                    <h2 class="section-title"><?php echo esc_attr($cl_title); ?></h2>
                    <p class="section-subtitle"><?php echo esc_attr($cl_sub_title); ?></p>
                </div>
                    <?php echo wp_kses_post($cl_content); ?>
                    <!-- <h3 class="leader-name">< ?php echo esc_attr($leadership_name); ?></h3>
                    <p class="leader-position">< ?php echo esc_attr($leadership_position); ?></p> -->
                </div>
            </div>

         </div>
    </div>
</section>
    