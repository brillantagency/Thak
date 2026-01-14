<?php
    $company_logo         = get_field('company_logo', 'option');
    $company_mail         = get_field('company_mail', 'option');
    $company_address      = get_field('company_address', 'option');
    $company_address_link = get_field('company_address_link', 'option');
    $company_phone_1      = get_field('company_phone_1', 'option');
    $company_phone_2      = get_field('company_phone_2', 'option');
    $company_phone_clean_1= clean_phone_number($company_phone_1);
    $company_phone_clean_2= clean_phone_number($company_phone_2);
?>

<footer class="footer">
  <div class="footer-inner">
      <div class="footer-infos">
          <?php if (!empty($company_phone_1) || !empty($company_phone_2)) : ?>
          <p>
            <?php if (!empty($company_phone_1)) : ?>
              <a href="tel:<?php echo $company_phone_clean_1 ?>"><?php echo $company_phone_1 ?></a>
            <?php endif; ?>
            <?php if (!empty($company_phone_2)) : ?>
              <?php echo _e('ou', 'that'); ?> <a href="tel:<?php echo $company_phone_clean_2 ?>"><?php echo $company_phone_2 ?></a>
            <?php endif; ?>
          </p>
          <?php endif; ?>

          <?php if (!empty($company_address_link || $company_address)) : ?>
          <p><a href="<?php echo $company_address_link ?>" target="_blank" rel="noopener noreferrer"><?php echo $company_address ?></a></p>
          <?php endif; ?>

          <?php if (!empty($company_mail)) : ?>
          <p><a href="mailto:<?php echo $company_mail ?>"><?php echo $company_mail ?></a></p>
          <?php endif; ?>
      </div>   

      <div class="footer-logo">
        <?php if (!empty($company_logo)) : ?>
            <div class="logothak">
          <a href="<?php echo home_url(); ?>">
            
            <img src="<?php echo $company_logo['url']; ?>" alt="<?php echo $company_logo['alt']; ?>" />

          </a>
          </div>
        <?php endif; ?>
        
        <?php //include_once(locate_template('parts/components/form_newsletter.php')); ?>

        <div class="social-media-home">
          <?php include(locate_template('parts/components/social.php')); ?>
        </div>
      </div>
  </div>
</footer>