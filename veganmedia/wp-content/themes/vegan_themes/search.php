
<?php

get_header(); ?>
	
	<div class="container bg-page">
		<p class="page-search">Kết quả tìm kiếm:</p>

		<h1 class="page-search2"><?php the_search_query(); ?></h1>

		<div class="row">
			<div class="col-lg-8 col-12">
				<?php
				if ( have_posts() ) :
					?>
		
					<?php
					while ( have_posts() ) : the_post(); ?>

				        <div class="content-page">
							<?php if ( has_post_thumbnail() ) { ?>
				               
				                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'small-thumbnail' ); ?></a>

							<?php } ?>
				            <h2 ><a class="title-page" href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
				            <p class="post-meta">Ngày đăng: <?php echo get_the_date(); ?> |
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

				            
				            <p class="text-category post-meta2"><a href="<?php the_permalink() ?>">( Xem Thêm )</a></p>
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

