<?php
$contact_actif          = get_sub_field('contact_actif');
$contact_pattern_bottom = get_sub_field('block_contact_contact_pattern_bottom');
$contact_text           = get_sub_field('block_contact_contact_text');
$contact_title          = get_sub_field('block_contact_contact_title');
$contact_shortcode      = get_sub_field('block_contact_contact_shortcode');
$contact_map_actif      = get_sub_field('block_contact_contact_map_actif');
$contact_padding        = get_sub_field('block_contact_contact_padding');

$company_logo         = get_field('company_logo', 'option');
$company_mail         = get_field('company_mail', 'option');
$company_address      = get_field('company_address', 'option');
$company_address_link = get_field('company_address_link', 'option');
$company_phone_1      = get_field('company_phone_1', 'option');
$company_phone_2      = get_field('company_phone_2', 'option');
$company_map_iframe   = get_field('company_map_iframe', 'option');
$company_phone_clean_1= clean_phone_number($company_phone_1);
$company_phone_clean_2= clean_phone_number($company_phone_2);

if($contact_actif) :
?>

<section class="block_contact padding_<?php echo $contact_padding; ?> <?php echo $contact_pattern_bottom? 'block_contact_pattern_bottom': ''; ?>" id="contact">
	<?php if(!empty($contact_shortcode)) : ?>
	<div class="container <?php echo $contact_map_actif? 'padding_bottom' : ''; ?>">
		  <?php if(!empty($contact_title)) : ?>
			<h2 class="text-align-center"><?php echo $contact_title; ?></h2>
		  <?php endif; ?>
		
			<?php if(!empty($contact_text) && !$contact_map_actif) : ?>
			  <p class="text-align-center">
				<?php echo $contact_text; ?>
			  </p>
			<?php endif; ?>
		<?php echo do_shortcode($contact_shortcode); ?>
	</div>
	<?php endif; ?>
	
	<?php if($contact_map_actif) : ?>
  <div class="block_contact_wrapper">	  
	
    <div class="block_contact_map">
      <?php if(!empty($company_map_iframe)): ?>
        <?php echo $company_map_iframe; ?>
      <?php endif; ?>
    </div>
	  
    <div class="block_contact_box">
      <?php if(empty($contact_shortcode)) : ?>
        <h2 class="block_contact_title"><?php echo $contact_title; ?></h2>
      <?php endif; ?>

      <ul class="block_contact_list">
        <?php if(!empty($company_address_link)) : ?>
          <li class="block_contact_item">
            <i class="fas fa-map-marker-alt"></i>
            <a class="block_contact_link" href="<?php echo $company_address_link ?>" target="_blank" rel="noopener noreferrer">
              <?php echo $company_address ?>
            </a>
          </li>
        <?php endif; ?>

        <?php if(!empty($contact_text)) : ?>
          <li class="block_contact_item">
            <i class="fas fa-car"></i> 
            <?php echo $contact_text; ?>
          </li>
        <?php endif; ?>

        <?php if (!empty($company_phone_1) || !empty($company_phone_2)) : ?>
          <li class="block_contact_item block_contact_phone">
            <i class="fas fa-phone-alt"></i>
            <?php if (!empty($company_phone_1) || !empty($company_phone_2)) : ?>
              <p>
                <?php if (!empty($company_phone_1)) : ?>    
                  <a class="block_contact_link" href="tel:<?php echo $company_phone_clean_1; ?>"><?php echo $company_phone_1; ?></a>
                <?php endif; ?>

                <?php if (!empty($company_phone_2)) : ?>
                  <a class="block_contact_link" href="tel:<?php echo $company_phone_clean_2; ?>"><?php echo $company_phone_2; ?></a>
                <?php endif; ?>
              </p>
            <?php endif; ?>
          </li>
        <?php endif; ?>

        <?php if(!empty($company_mail)) : ?>
          <li class="block_contact_item">
            <i class="fas fa-envelope"></i>
            <a class="block_contact_link" href="mailto:<?php echo esc_attr($company_mail); ?>">
              <?php echo esc_html($company_mail); ?>
            </a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
	<?php endif; ?>
</section>
<?php endif; ?>