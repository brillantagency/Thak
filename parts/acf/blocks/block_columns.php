<?php
	$columns_title  = get_sub_field('columns_title');
	$columns_text   = get_sub_field('columns_text');
	$columns_link   = get_sub_field('columns_link');
	$columns        = get_sub_field('columns');


    // Styles
	$columns_number  = get_sub_field('columns_number');
	$columns_actif   = get_sub_field('columns_actif');
	$columns_padding = get_sub_field('columns_padding');

if($columns_actif) : 
?>

<section class="columns_section columns padding_<?php echo $columns_padding; ?>">
	<div class="container">
		<?php if(!empty($columns_title)) : ?>
		<h2 class="columns_title">
			<?php echo $columns_title; ?>
		</h2>
		<?php endif; ?>

		<?php if(!empty($columns_text)) : ?>
		<p><?php echo wp_kses_post($columns_text); ?></p>
		<?php endif; ?>

		<div class="columns_repeater columns_repeater_<?php echo $columns_number; ?>">
			<?php foreach($columns as $column) : ?>
			<div class="columns_item">
				<?php if(!empty($column['image'])) : ?>
				<div class="columns_item_img_wrapper">
					<img class="columns_item_img" src="<?php echo $column['image']['url']; ?>" alt="<?php echo $column['image']['alt']; ?>">
				</div>
				<?php endif; ?>

				<?php if(!empty($column['title'])) : ?>
				<h3 class="columns_item_title"><?php echo $column['title']; ?></h3>
				<?php endif; ?>

				<?php if(!empty($column['text'])) : ?>
				<div class="columns_item_text"><?php echo $column['text']; ?></div>
				<?php endif; ?>

                <?php if (!empty($column['link'])) : ?>
                    <a href="<?php echo $column['link']['url']; ?>" <?php echo !empty($column['link']['target'])? 'target="_blank"' : '' ?> class="cta--secondary"><?php echo $column['link']['title']; ?></a>
                <?php endif; ?>
			</div>
			<?php endforeach; ?>
		</div>

        <?php if (!empty($columns_link)) : ?>
            <a href="<?php echo $columns_link['url']; ?>" <?php echo !empty($columns_link['target'])? 'target="_blank"' : '' ?> class="cta--border"><?php echo $columns_link['title']; ?></a>
        <?php endif; ?>
	</div>
</section>
<?php endif; ?>