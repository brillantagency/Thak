<?php 
require get_template_directory() . '/parts/html-header.php';
require get_template_directory() . '/parts/header.php';

$banner_suptitle = get_field('banner_suptitle', 'option');
$banner_title    = get_field('banner_title', 'option');
$banner_content  = get_field('banner_content', 'option');
$banner_cta      = get_field('banner_cta', 'option');
?>

<main class="main" role="main">
    <section class="section_banner container padding_top-bottom text-align-center">
		<?php if (!empty($banner_suptitle)) : ?>
        <span class="banner_suptitle"><?php echo $banner_suptitle; ?></span>
		<?php endif; ?>
		
		<?php if (!empty($banner_title)) : ?>
        <h1 class="banner_title"><?php echo $banner_title; ?></h1>
		<?php endif; ?>
		
		<?php if (!empty($banner_content)) : ?>
        <div><?php echo $banner_content; ?></div>
		<?php endif; ?>
		
		<?php if (!empty($banner_cta['url'])) : ?>
            <a href="<?php echo $banner_cta['url']; ?>" <?php echo !empty($banner_cta['target'])? 'target="_blank"' : '' ?> class="style-button"><?php echo $banner_cta['title']; ?></a>
		<?php endif; ?>
		
    </section>
</main>

<?php 
require get_template_directory() . '/parts/footer.php';
require get_template_directory() . '/parts/html-footer.php';
?>