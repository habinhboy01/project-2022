<?php get_header(); ?>

    <div class="bg-wedding">

        <img src="<?php bloginfo('template_directory') ?>/images/img2.png">

        <span class="bg-wedding2"></span>

        <div class="container">
            <div class="inner">
                <h1><?php the_title(); ?></h1>

                <ul class="list-breadcrumb">
                    <li>
                        <a href="<?php echo home_url(); ?>">Trang chủ</a>
                    </li>

                    <li>/</li>

                    <li>
                        <a href="http://localhost/callary/kinh-nghiem-cuoi/">Tin tức</a>
                    </li>   
                </ul>
            </div>
        </div>
    </div>

    <div class="container bg-wedding3">
        <h1 class="post-title"><?php the_title(); ?></h1>

       <p class="text-wedding"><i class="far fa-clock"></i> <?php echo get_the_date(); ?></p>

        <div class="row bg-single">
            <div class="col-lg-8 col-12">
                <div class="news-single">  
                    <?php the_content(); ?>
                </div>


                <!-- share -->
                <div class="meta-post">
                    <div class="share">
                        <span>
                            <?php echo get_field('icon-share','option'); ?>
                            <?php echo get_field('share','option'); ?>
                        </span>

                        <div class="social-media">
                            <?php if (have_rows('share-social', 'option')) : ?>
                                <?php while (have_rows('share-social', 'option')) : the_row();
                                    $social_icon = get_sub_field('icon');
                                    $social_link = get_sub_field('link');

                                ?>

                                    <a href="<?php echo $social_link; ?>">
                                        <?php echo $social_icon ?>
                                    </a>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">  
                <div class="bg-sidebar">
                    <div class="search">
                        <?php echo do_shortcode('[wp_search_form]'); ?>
                    </div>

                    <div class="categories">
                        <h1>CÁC BÀI VIẾT NỔI BẬT</h1>

                        <?php
                            $args = array(
                                'post_status' => 'publish',
                                'post_type' => 'post',
                                'orderby' => 'post_date',
                                'posts_per_page' => 4,
                                'order' => 'ASC',
                            );
                        ?>
                        <?php $getposts = new WP_query($args); ?>
                        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
                        <?php if (have_posts()) : ?>
                        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                            <p class="text-single"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

                            <?php endwhile; wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>

                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>