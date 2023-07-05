<?php get_header(); ?>

	<div class="bg-category">
		<?php 
            $image = get_field('img-title','option');
            if( !empty( $image ) ): ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <div class="container bg-category2 ">
			<h1 class="font-content"><?php the_title(); ?></h1>
		</div>
	</div>


	<div class="container">

		<div class="row">
			<div class="col-lg-8 col-12">
				<?php

				if ( function_exists('yoast_breadcrumb') ) {

				 yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );

				}

				?>

				<div class="">
					<p class="date-submitted"><i class="fas fa-calendar"></i> Ngày đăng: <?php echo get_the_date(); ?> </p>
					<div class="content-single"><?php the_content(); ?></div>
				</div>
			</div>

			<div class="col-lg-4 col-12">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	<!-- bài viết liên quan -->

	<div class="container bg-category2">
		<?php
		/*
		 * Code hiển thị bài viết liên quan trong cùng 1 category
		 * Code by levantoan.com
		 */
		$categories = get_the_category(get_the_ID());
		if ($categories){
		    echo '<div class="row relatedcat">';
		    $category_ids = array();
		    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
		    $args=array(
		        'category__in' => $category_ids,
		        'post__not_in' => array(get_the_ID()),
		        'posts_per_page' => 6,
		        'order'        => 'ASC',
		        
		    );
		    $my_query = new wp_query($args);
		    if( $my_query->have_posts() ):
		        echo '<h3 class="text-search">Tin Liên Quan</h3>';
		        while ($my_query->have_posts()):$my_query->the_post();
		            ?>
		            <div class="col-lg-4 col-12">
						<div class="content-category">
						 	<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail('full'); ?></a>
						</div>


						<div class="sub-content2">
							<h1 class="text-sub"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

							<?php the_excerpt(); ?>	

							<p class="text-category"><a href="<?php the_permalink() ?>">( Xem Thêm )</a></p>
						</div> 
			        </div>
		            <?php
		        endwhile;
		        echo '</div>';
		    endif; wp_reset_query();
		    echo '</div>';
		}
		?>
	</div>

<?php get_footer(); ?>