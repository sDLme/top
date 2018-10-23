<?php
/*
 * Template Name: Front page
 */
get_header();
?>
<section class="section-last">
    <div class="container">
        <header class=" alight-center">
            <h2 class="main-head text-large text-dark text-bold"><?php echo get_theme_mod('last_news_title'); ?></h2>
            <p class="main-desc text-dark"><?php echo get_theme_mod('last_news_text'); ?></p>
        </header>
        <?php
        $last_query = new WP_Query(array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'posts_per_page'=> 3,
            'orderby'       => 'date',
            'order'         => 'DESC',
        ));
        if ($last_query->have_posts()) :?>
            <ul class="last-list row ">
                <?php while ($last_query->have_posts()) : $last_query->the_post();
                    get_template_part('template-parts/content', 'part');
                endwhile; ?>
            </ul>
        <?php endif;
        get_template_part('template-parts/content', 'btn');
        ?>
    </div>
</section>
<section class="section-old">
    <div class="container">
        <header class=" alight-center">
            <h2 class=" main-head text-large text-dark text-bold"><?php echo get_theme_mod('old_news_title'); ?></h2>
            <p class="main-desc text-dark"><?php echo get_theme_mod('old_news_text'); ?></p>
        </header>
        <?php
        $last_query = new WP_Query(array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'posts_per_page'=> 3,
            'order'         => 'ASC',
        ));
        if ($last_query->have_posts()) :?>
            <ul class="old-list row ">
                <?php while ($last_query->have_posts()) : $last_query->the_post();
                    get_template_part('template-parts/content', 'part');
                endwhile; ?>
            </ul>
        <?php endif;
        get_template_part('template-parts/content', 'btn');
        ?>
    </div>
</section>
<?php
wp_footer();
?>

</body>
</html>