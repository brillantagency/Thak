<?php 
	if(empty($post_previous)) {
		$post_previous = 'Précédent';
	}

	if(empty($post_next)) {
		$post_next = 'Suivant';
	}
?>

<div class="post-navigation">
	<div class="previous-post">
		<?php previous_post_link('%link', __($post_previous, 'neoviaq')); ?>
	</div>
	<div class="next-post">
		<?php next_post_link('%link', __($post_next, 'neoviaq')); ?>
	</div>
</div>