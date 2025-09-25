<?php 
  $company_facebook            = get_field('company_facebook', 'option');
  $company_instagram           = get_field('company_instagram', 'option');
  $company_tiktok              = get_field('company_tiktok', 'option');
  $company_spotify             = get_field('company_spotify', 'option');
  $company_youtube             = get_field('company_youtube', 'option');
  $company_linkedin            = get_field('company_linkedin', 'option');
?>

<?php if ( !empty($company_facebook) ) : ?>
<a href="<?php echo $company_facebook; ?>" target="_blank" title="<?php echo _('Lien vers Facebook'); ?>" class="social-icon">
	<?php include get_template_directory() . '/dist/images/socials/icon_facebook.svg'; ?>
</a>
<?php endif; ?>

<?php if ( !empty($company_instagram) ) : ?>
<a href="<?php echo $company_instagram; ?>" target="_blank" title="<?php echo _('Lien vers Instagram'); ?>" class="social-icon">
	<?php include get_template_directory() . '/dist/images/socials/icon_instagram.svg'; ?>
</a>
<?php endif; ?>

<?php if ( !empty($company_spotify) ) : ?>
<a href="<?php echo $company_spotify; ?>" target="_blank" title="<?php echo _('Lien vers Spotify'); ?>" class="social-icon">
	<?php include get_template_directory() . '/dist/images/socials/icon_spotify.svg'; ?>
</a>
<?php endif; ?>

<?php if ( !empty($company_linkedin) ) : ?>
<a href="<?php echo $company_linkedin; ?>" target="_blank" title="<?php echo _('Lien vers Linkedin'); ?>" class="social-icon">
	<?php include get_template_directory() . '/dist/images/socials/icon_linkedin.svg'; ?>
</a>
<?php endif; ?>

<?php if ( !empty($company_youtube) ) : ?>
<a href="<?php echo $company_youtube; ?>" target="_blank" title="<?php echo _('Lien vers YouTube'); ?>" class="social-icon">
	<?php include get_template_directory() . '/dist/images/socials/icon_youtube.svg'; ?>
</a>
<?php endif; ?>

<?php if ( !empty($company_tiktok) ) : ?>
<a href="<?php echo $company_tiktok; ?>" target="_blank" title="<?php echo _('Lien vers Tiktok'); ?>" class="social-icon1">
	<?php include get_template_directory() . '/dist/images/socials/icon_tiktok.svg'; ?>
</a>
<?php endif; ?>