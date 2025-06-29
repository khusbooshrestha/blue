<?php if ( get_sub_field( 'stats_section' ) ): ?>
<div class="stats-section-wrapper">
    <div class="container">
        <div class="stats-section">
            <?php
            foreach ( get_sub_field( 'stats_section' ) as $item ):?>
                <div class="stat-box">
                    <h2 class="count" data-target="<?php echo intval($item['stats_total_count']); ?>">0</h2>
                    <p> <?php echo esc_attr($item['stats_title']); ?></p>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>
<?php endif;?>