<div class="bg-comments">
	<div class="bg-comments2">
		<h1 class="text-comments">Bình luận (<?php comments_number('0', '1','%'); ?>) </h1>

		<?php $args_comment = array(

			'label_submit' => ('Bình luận') , 

		); ?>

		<?php comment_form($args_comment); ?>

		<?php wp_list_comments(); ?>
	</div>
</div>