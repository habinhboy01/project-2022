
<?php

get_header(); ?>
	
	<div class="bg-wedding">

        <img src="<?php bloginfo('template_directory') ?>/images/img65.png">

        <span class="bg-wedding2"></span>

        <div class="container">
            <div class="inner">
                <h1>TIN TỨC</h1>

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
		<p class="">Kết quả tiềm kiếm:</p>

		<h1 class="post-title"><?php the_search_query(); ?></h1>

		<div class="row">
			<div class="col-lg-8 col-12">
				<?php
				if ( have_posts() ) :
					?>
		
					<?php
					while ( have_posts() ) : the_post(); ?>

				        <div class="content-search">
							<?php if ( has_post_thumbnail() ) { ?>
				               
				                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>

							<?php } ?>
				            <h2 class="text-search"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

				            <p class="text-wedding"><i class="far fa-clock"></i> <?php echo get_the_date(); ?> |
				               	<?php
								$categories = get_the_category();
								$comma      = ', ';
								$output     = '';
								
								if ( $categories ) {
									foreach ( $categories as $category ) {
										$output .= '<a href="' . get_category_link( $category->term_id ) . '">' . $category->cat_name . '</a>' . $comma;
									}
									echo trim( $output, $comma );
								} ?>
				            </p>

				            <p class="text-search2"><?php echo get_the_excerpt() ?></p>

				        </div>
					
					<?php endwhile;

				else :
					echo '<p>No search results found!</p>';

				endif; ?>
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

<?php
get_footer();

?>

