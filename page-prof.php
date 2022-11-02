<?php 
    get_header(); 
?>
    <main class="site_main_prof_page">
         <section class="left-right">
            <button type="button"><</button>
            <?php 
                $catPost = get_posts(array('category_name' => 'enseignants', "numberposts" => 14));
                foreach ($catPost as $post) : setup_postdata($post); 
            ?> 
            <section class="imgProf">
                <?php the_post_thumbnail(); ?>
            </section>
            <?php endforeach;?>
            <button type="button">></button>
        </section>
        <section id="right">
            <section id="listeProfs">
                <?php 
                    $catPost = get_posts(array('category_name' => 'enseignants', "numberposts" => 14));
                    foreach ($catPost as $post) : setup_postdata($post); 
                ?> 
                <section class='enseignants'> 
                    <section class="titreProf">
                        <h3>ENSEIGNANTS</h3>
                        <h1><?php the_title(); ?></h1>
                    </section>
                    <section class="contenuProf">
                        <?php the_post_thumbnail(); ?>
                        <?php the_excerpt();?>
                    </section>
                </section>
                <?php endforeach;?>
            </section>
            <p id="counter">1/14</p>
        </section>
    </main>
<?php get_footer(); ?>