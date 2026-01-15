<?php
  $banner_cta           = get_field('banner_cta');
  $banner_title         = get_field('banner_title');
  $banner_bigtitle      = get_field('banner_bigtitle');
  $banner_text          = get_field('banner_text');
  $banner_border_style  = get_field('banner_border_style');
  $banner_gallery1      = get_field('banner_gallery1');
  $banner_image1_icon   = get_field('banner_image1_icon');
  $banner_gallery2      = get_field('banner_gallery2');
  $banner_image2_icon   = get_field('banner_image2_icon');
  $company_logo         = get_field('company_logo', 'option');  
?>

<section class="banner banner_pattern_bottom">
  <div class="banner_wrapper container <?php echo !empty($banner_gallery2)? 'banner_wrapper_images_2' : 'banner_wrapper_images_1' ?>">
      <div class="banner_social">
        <?php get_template_part('parts/components/social.php'); ?>
      </div>

      <div class="banner_content">
        <?php if(!empty($banner_bigtitle)) : ?>
        <p class="en-biais"><?php echo $banner_bigtitle; ?></p>
        <?php endif; ?>

        <?php if(!empty($banner_title)) : ?>
        <h1 class="banner_title"><?php echo $banner_title; ?></h1>
        <?php endif; ?>

        <?php if(!empty($banner_text)) : ?>
        <p class="banner_text"><?php echo $banner_text; ?></p>
        <?php endif; ?>

        <?php if ( !empty($banner_gallery1) or !empty($banner_gallery2) ) : ?>
        <div class="banner_images">
          <?php if ( !empty($banner_gallery1) ) : ?>
          <div class="splide banner_image banner_image_1 banner_image_1-js border-cadre border-<?php echo $banner_border_style; ?>">
            <div class="splide__track">
              <ul class="splide__list">
                <?php foreach($banner_gallery1 as $img) : ?>
                <li class="splide__slide">
                  <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="banner_gallery_image" />
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <img src="<?php echo $banner_image1_icon['url']; ?>" alt="<?php echo $banner_image1_icon['alt']; ?>" class="deco deco-left" />
          </div>
          <?php endif; ?>

          <?php if ( !empty($banner_gallery2) ) : ?>
          <div class="splide banner_image banner_image_2 banner_image_2-js border-cadre border-<?php echo $banner_border_style; ?>">
            <div class="splide__track">
              <ul class="splide__list">
                <?php foreach($banner_gallery2 as $img) : ?>
                <li class="splide__slide">
                  <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="banner_gallery_image" />
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <img src="<?php echo $banner_image2_icon['url']; ?>" alt="<?php echo $banner_image2_icon['alt']; ?>" class="deco deco-right" />
          </div>
          <?php endif; ?>
        </div>
        <?php endif; ?>

        <?php if ( !empty($banner_cta['url']) ) : ?>
        <a href="<?php echo $banner_cta['url'] ;?>" <?php echo !empty($banner_cta['target'])? 'target="_blank"' : '';?> class="cta--border"><?php echo $banner_cta['title'] ;?></a> 
        <?php endif; ?>
      </div>

      <?php /*<div class="booking-form">
        <div class="input-box">
          <i class="fas fa-bed"></i>
          <span>ROOM</span>
        </div>

        <div class="input-box">
          <i class="fas fa-calendar-alt"></i>
          <span>FROM</span>
        </div>

        <div class="input-box">
          <i class="fas fa-calendar-alt"></i>
          <span>TO</span>
        </div>
        <button class="booking-button">BOOKING</button>
      </div> */ ?>
  </div>
  
  <?php if(!empty($company_logo['url'])) : ?>
  <img src="<?php echo $company_logo['url']; ?>" alt="Logo" class="logo-fond" />
  <?php endif; ?>
</section>