<?php get_header();?>
This is the front-page.php
<div>
    <div>
        <h2> Latest Episodes </h2>
        <?php 
            $homepageEpisodes = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'podcast',
            ));
            while($homepageEpisodes->have_posts()){ 
                $homepageEpisodes -> the_post();
                ?>
                <div>
                    <h5><a href="<?php the_permalink( );?>"><?php the_title();?></a></h5>
                    <p><?php if(has_excerpt(  )){
                        echo get_the_excerpt(  );
                    } else {
                        echo wp_trim_words(get_the_content(), 20);
                    }?><a href="<?php the_permalink();?>">Read more...</a></p>
                </div>
                <?php
            } wp_reset_postdata();
        ?>
    </div>
        <h2> Our Latest Recipes </h2>
        <?php 
            $homepageRecipes = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'recipe',
            ));
            while($homepageRecipes->have_posts()){ 
                $homepageRecipes -> the_post();
                ?>
                <div>
                    <h5><a href="<?php the_permalink( );?>"><?php the_title();?></a></h5>
                    <p><?php if(has_excerpt(  )){
                        echo get_the_excerpt(  );
                    } else {
                        echo wp_trim_words(get_the_content(), 20);
                    }?><a href="<?php the_permalink();?>">Read more...</a></p>
                </div>
                <?php
            } wp_reset_postdata();
        ?>
    <div>
    </div>
</div>
<?php get_footer();?>