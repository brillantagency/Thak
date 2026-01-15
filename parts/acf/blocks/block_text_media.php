<?php

// Styles
$text_media_position     = get_sub_field('block_text_media_text_media_position'); 
$text_media_padding      = get_sub_field('block_text_media_text_media_padding'); 
$text_media_text_align   = get_sub_field('block_text_media_text_media_text_align'); 
$text_media_actif        = get_sub_field('block_text_media_text_media_actif');
$text_media_border_style = get_sub_field('block_text_media_text_media_border_style');
$text_media_media_width  = get_sub_field('block_text_media_text_media_media_width');

// Text
$text_media_smalltitle      = get_sub_field('block_text_media_text_media_smalltitle');
$text_media_bigtitle        = get_sub_field('block_text_media_text_media_bigtitle');
$text_media_title           = get_sub_field('block_text_media_text_media_title');
$text_media_content         = get_sub_field('block_text_media_text_media_content');
$text_media_link            = get_sub_field('block_text_media_text_media_link');
$text_media_icon_text_left  = get_sub_field('block_text_media_text_media_icon_text_left');
$text_media_icon_text_right = get_sub_field('block_text_media_text_media_icon_text_right');

// compenent media
$media                   = get_sub_field('block_text_media_media_video_bool');
$video_embed             = get_sub_field('block_text_media_media_video_embed');
$video_upload            = get_sub_field('block_text_media_media_video_upload');
$video_autoplay          = get_sub_field('block_text_media_media_video_autoplay');
$video_loop              = get_sub_field('block_text_media_media_video_loop');
$video_control           = get_sub_field('block_text_media_media_video_control');
$text_media_gallery      = get_sub_field('block_text_media_media_gallery');
$text_media_icon         = get_sub_field('block_text_media_media_icon');
$text_media_bigtitle_img = get_sub_field('block_text_media_media_bigtitle_img');

$video_cover        = $text_media_gallery;

if($text_media_actif) :
?>

<section class="block_text_media padding_<?php echo $text_media_padding; ?>">
  <div class="container">
      <?php if (!empty($text_media_bigtitle)) : ?>
        <p class="h2 text_media-title en-biais en-biais-orange"><?php echo $text_media_bigtitle;?></p>
      <?php endif; ?>

      <div class="text_media-content text_media_position_<?php echo $text_media_position; ?> text_media_width_<?php echo $text_media_media_width; ?>">
          <?php if ( !empty( $text_media_gallery ) or !empty( $video_embed ) or !empty( $video_upload ) ) : ?>
          <div class="text_media-media">

            <?php if($text_media_bigtitle_img) : ?>
            <div id="slider1" class="slider1 splide text_media_slider_text">
              <div class="splide__track">
                <ul class="splide__list">
                  <?php foreach($text_media_gallery as $img) : ?>
                  <li class="splide__slide">
                    <?php if (!empty($img['title'])) : ?>
                      <p class="text_media-title text_media-gallery-title en-biais en-biais-orange"><?php echo $img['title']; ?></p>
                    <?php endif; ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <?php endif; ?>

            <?php if ( !$media and !empty( $text_media_gallery ) ) : ?>
            <div id="slider2" class="slider2 splide text_media-splide text_media_slider_media text_media-splide-js">
              <div class="splide__track border-cadre border-<?php echo $text_media_border_style; ?>">
                <ul class="splide__list text-media_splide__list">
                  <?php foreach($text_media_gallery as $img) : ?>
                    <li class="splide__slide">
                      <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" class="text_media-img" />
                    </li>
                    <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <?php else :
              include get_template_directory() . '/parts/components/video.php';
            endif; ?>

            <?php
            if ((!empty($text_media_gallery) || !empty($video_embed) || !empty($video_upload)) 
                || (isset($text_media_icon['url']) && !empty($text_media_icon['url'])) ) :
            ?>
                <img src="<?php echo esc_url($text_media_icon['url']); ?>" 
                    alt="<?php echo esc_attr($text_media_icon['alt'] ?? ''); ?>" 
                    class="text_media-icon text_media-icon-media" />
            <?php endif; ?>
          </div>
          <?php endif; ?>

        <div class="text_media-text text_media-text-align-<?php echo $text_media_text_align; ?>">
          <?php if (!empty( $text_media_icon_text_left['url'] ) ) : ?>
          <img src="<?php echo $text_media_icon_text_left['url']; ?>" alt="<?php echo $text_media_icon_text_left['alt']; ?>" class="text_media-icon text_media-icon-text-left" />
          <?php endif; ?>

          <?php if (!empty( $text_media_icon_text_right['url'] ) ) : ?>
          <img src="<?php echo $text_media_icon_text_right['url']; ?>" alt="<?php echo $text_media_icon_text_right['alt']; ?>" class="text_media-icon text_media-icon-text-right" />
          <?php endif; ?>

          <?php if (!empty($text_media_title)) : ?>
          <h2><?php echo $text_media_title; ?></h2>
          <?php endif; ?>

          <?php if (!empty($text_media_smalltitle)) : ?>
          <span class="en-biais"><?php echo $text_media_smalltitle;?></span>
          <?php endif; ?>

          <?php if (!empty($text_media_content)) : ?>
            <div class="text_media-text-wysiwyg">
              <?php echo $text_media_content; ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($text_media_link)) : ?>
            <a href="<?php echo $text_media_link['url']; ?>" <?php echo !empty($text_media_link['target'])? 'target="_blank"' : '' ?> class="cta--border"><?php echo $text_media_link['title']; ?></a>
          <?php endif; ?>
        </div>
      </div>
  </div>
</section>
<?php endif;?>