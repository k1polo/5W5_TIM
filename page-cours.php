<?php get_header(); ?>
    <main class="site_main_front_page">
        <?php wp_nav_menu(array('menu'=>"ListeCours",
                                "container"=>"nav"));
        ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_post_thumbnail("thumbnail"); ?>
        <?php the_content();?> 
        <?php endwhile;?>
        <?php endif;?>
        
    </main>
<?php get_footer(); ?>