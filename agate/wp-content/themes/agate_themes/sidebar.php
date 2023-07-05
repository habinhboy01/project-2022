	<!-- xu hướng -->

	<div class="geometry">
		<img id="img-sidebar2" src="<?php bloginfo('template_directory') ?>/images/img7.png">

		<img id="img-sidebar3" src="<?php bloginfo('template_directory') ?>/images/img6.png">

		<h1 class="text-recently4 text-recently7"><?php echo get_field('trend'); ?></h1>
	</div>

	<div class="row bg-new2">
		<?php
            $args = array(
                'post_status' => 'publish',
                'post_type' => 'post',
                'posts_per_page' => 6,
                'orderby' => 'post_date',
                'order' => 'ASC',
            ); 
        ?>
            <?php $getposts = new WP_query($args); ?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php if (have_posts()) : ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

            	<div class="col-12">
	            	<a class="img-sidebar" href="<?php the_permalink(); ?>">
        				<?php the_post_thumbnail('full'); ?>              			
        			</a>
        		</div>

        		<div class="col-12 bg-new4">	              			

        			<?php the_category(); ?>

        			<a class="text-recently5" href="<?php the_permalink() ?>">
                		<?php the_title() ?>
                	</a>

                	<p class="text-news5 text-recently6"><?php echo get_the_date(); ?></p>

            	</div>

        	<?php endwhile; wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<!-- thẻ phổ biến -->

	<div class="geometry">
		<img src="<?php bloginfo('template_directory') ?>/images/img9.png">

		<h1 class="text-recently4">THẺ PHỔ BIẾN</h1>
	</div>

    <!-- lấy tags trong post của wordpress -->
    
    <div class="list-tag">

        <?php
            $tags = get_tags(array(
               'number'   => 10, // displays at most 45 tags
               'orderby'  => 'name', // order tags alphabetically
               'order'    => 'ASC', // order tags by ascending order
               'taxonomy' => 'post_tag',
        ));
        if ( $tags ) :
            foreach ( $tags as $tag ) : ?>
                <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
            <?php endforeach; ?>
        <?php endif; ?>
    
    </div>

    <!-- banner quảng cáo -->

    <div class="bg-banner">
        <div class="content-banner">
            <?php if (have_rows('link-banner')) : ?>
                <?php while (have_rows('link-banner')) : the_row();
                    $image = get_sub_field('img');
                    $picture = $image['sizes']['thumbnail']; 
                    $link = get_sub_field('link');
                ?>

                <a href="<?php echo $link;?>">
                    <img class="img-podcast" src="<?php echo $picture;?>" alt="<?php echo $image['alt'];?>">
                </a>

                <?php endwhile; ?>
            <?php endif; ?>

            <h1 class="text-banner"><?php echo get_field('banner'); ?></h1>

            <div class="content-banner2">
                <img src="<?php bloginfo('template_directory') ?>/images/img14.png">

                <img src="<?php bloginfo('template_directory') ?>/images/img13.png">
            </div>
        </div>
    </div>