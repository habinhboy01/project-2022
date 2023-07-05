
<?php

get_header(); ?>
	
	<div class="container bg-search">
		<p class="text3 font-content"><?php echo get_field('Results', 'option'); ?></p>

		<h1 class="font-content bg-search2"><?php the_search_query(); ?></h1>

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
				            <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				            <p class="text3 post-meta"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> |
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

				            <p class="font-content text-search"><?php echo get_the_excerpt() ?></p>

				            <p class="text-search2"><a href="<?php the_permalink() ?>"><?php echo get_field('read_more', 'option'); ?> &raquo</a></p>
				        </div>
					
					<?php endwhile;

				else :
					echo '<p>No search results found!</p>';

				endif; ?>
			</div>

			<div class="col-lg-4 col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php
get_footer();

?>

