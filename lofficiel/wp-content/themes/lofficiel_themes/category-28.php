<?php get_header(); ?>
    
    <div class="allNews">
        <?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'post',
                'posts_per_page' => 1,
                'cat' => 28,
                'orderby' => 'post_date',
                'order' => 'date',
            ); 
        ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php if (have_posts()) : ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
            
                <a class="img-intro" href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('full'); ?></a>

                <div class="content-intro">

                    <?php echo the_category(); ?> 

                    <a href="<?php the_permalink() ?>" class="text-home">
                        <?php the_title() ?>
                    </a>

                    <div class="text-home2"><?php the_excerpt(); ?></div>

                    <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                </div>

            <?php endwhile; wp_reset_postdata(); ?>
        <?php endif; ?>

        <div class="container-fluid bg-news">
            <div class="bg-news2">
                <div class="row">

                    <?php
                        $args = array(
                            'post_status' => 'publish',
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'cat' => 28,
                            'orderby' => 'post_date',
                            'order' => 'ASC ',
                        ); 
                    ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php if (have_posts()) : ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                            <div class="col-lg-4 col-12 bg-news3">
                                <div class="row">
                                    <div class="col-lg-4 col-4">
                                        <a class="img-news" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('full'); ?></a>
                                    </div>


                                    <div class="col-lg-8 col-8">

                                        <div class="title2"><?php echo the_category(); ?></div>

                                        <a href="<?php the_permalink() ?>" class="text-news">
                                            <?php the_title() ?>
                                        </a>

                                        <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                                    </div>

                                </div>
                            </div>

                        <?php endwhile; wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <!-- BEAUTY -->

    <div class="container-fluid bg-body">

        <h2 class="font-content"><?php echo get_cat_name( $category_id = 28 );?></h2>

        <div class="row">
            <?php
                $args = array(  
                    'post_status' => 'publish',
                    'post_type' => 'post',
    
                    'cat' => 28,
                    'order' => 'date',
                    
                );
            ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php echo get_the_category()->cat_ID; ?>

                    <div class="col-lg-4 col-12 content-home">

                        <a href="<?php the_permalink() ?>" class="img-home">

                            <?php the_post_thumbnail() ?>

                        </a>

                        <div class="content-home2">

                            <?php echo the_category(); ?> 

                            <a href="<?php the_permalink() ?>" class="text-home">
                                <?php the_title() ?>
                            </a>

                            <div class="text-home2"><?php the_excerpt(); ?></div>

                            <p class="time-author"><?php echo get_the_date(); ?> by <?php the_author(); ?></p>

                        </div>
                            
                    </div>

            <?php endwhile; wp_reset_postdata(); ?>
        </div>

        <?php if(paginate_links()!='') {?>
            <div class="pagination">
                <?php
                global $wp_query;
                $big = 999999999;
                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'prev_text'    => __('<i class="fas fa-caret-left"></i>'),
                    'next_text'    => __('<i class="fas fa-caret-right"></i>'),
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    ) );
                ?>
            </div>
        <?php } ?>

    </div>

<?php get_footer(); ?>