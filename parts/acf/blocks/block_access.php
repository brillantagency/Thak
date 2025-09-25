<?php
    $access_title    = get_sub_field('access_title');
    $access_actif    = get_sub_field('access_actif');
    $access_padding  = get_sub_field('access_padding');
    $access_repeater = get_sub_field('access_repeater');
    if(!empty($access_actif)) : 
?>

<section class="block_acces container padding_<?php echo $access_padding; ?>" id="acces">
  <?php if(!empty($access_title)) : ?>
  <h2 class="block_acces_title"><?php echo $access_title; ?></h2>
  <?php endif; ?>

  <div class="block_acces_wrapper">
    <div class="block_acces_content">
      <?php if(!empty($access_repeater)) : ?>
        <?php foreach($access_repeater as $index => $item) :
          if($index === 0) {
            $position_icon = 'left';
          } elseif($index === 1) {
            $position_icon = 'center';
          } else {
            $position_icon = 'right';
          }
        ?>  
          <?php if(!empty($item['link']['url'])) : ?>
          <a class="block_acces_link border-triple" href="<?php echo $item['link']['url']; ?>" <?php echo !empty($item['link']['target'])? 'target="_blank"' : ''; ?>>
            <?php else : ?>
          <p class="block_acces_link border-triple">
          <?php endif; ?>
          
            <img src="<?php echo $item['image']['url']; ?>" alt="<?php echo $item['image']['title']; ?>" />
            <?php if(!empty($item['image_icon'])) : ?>
              <img src="<?php echo $item['image_icon']['url']; ?>" alt="<?php echo $item['image_icon']['title']; ?>" class="deco deco-<?php echo $position_icon; ?>" />
            <?php endif; ?>

          <?php if(!empty($item['link']['url'])) : ?>
          </a>
          <?php else : ?>
          </p>
          <?php endif; ?>

        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>