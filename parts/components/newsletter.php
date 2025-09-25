<?php 
	$newsletter_form  = get_field('newsletter_form', 'option');

    if (isCarriereSegment()) {
		$newsletter_title = get_field('newsletter_carriere_title', 'option');
		$newsletter_text  = get_field('newsletter_carriere_text', 'option');
	} else {
		$newsletter_title = get_field('newsletter_title', 'option');
		$newsletter_text  = get_field('newsletter_text', 'option');
	}
?>

<section id="newsletter" class="section_newsletter newsletter txt-center">
	<?php if(!empty($newsletter_title)) : ?>
	<h2><?php echo $newsletter_title; ?></h2>
	<?php endif; ?>

	<?php if(!empty($newsletter_text)) : ?>
	<p><?php echo $newsletter_text; ?></p>
	<?php endif; ?>
		
	<?php if(!empty($newsletter_form)) : 
		echo do_shortcode($newsletter_form); 
	endif; ?>
</section>