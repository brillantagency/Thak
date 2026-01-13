<?php
  $company_logo         = get_field('company_logo', 'option');  
  $company_phone_1      = get_field('company_phone_1', 'option');
  $company_phone_2      = get_field('company_phone_2', 'option');
  $company_phone_clean_1= clean_phone_number($company_phone_1);
  $company_phone_clean_2= clean_phone_number($company_phone_2);
  $company_mail         = get_field('company_mail', 'option');
  $header_link          = get_field('header_link', 'option');
  $header_link_icon     = get_field('header_link_icon', 'option');

  // Menu Desktop
  $header_menu_right1     = get_field('header_menu_right1', 'option');
  $header_menu_right2     = get_field('header_menu_right2', 'option');
  $header_menu_left1      = get_field('header_menu_left1', 'option');
  $header_menu_left2      = get_field('header_menu_left2', 'option');
?>

<header>
  <div class="header-container container">
    <div class="header-left">
      <div class="content-all-burger">
        <button class="burger" id="burger" aria-label="Ouvrir le menu">☰</button>
      </div>

      <?php if(!empty($header_menu_left1['url']) or !empty($header_menu_left2['url'])) : ?>
      <div class="header-left-name">
        <?php if(!empty($header_menu_left1['url'])) : ?>
        <a href="<?php echo $header_menu_left1['url']; ?>" target="<?php echo $header_menu_left1['target']; ?>" class="nav-link">
          <?php echo $header_menu_left1['title']; ?>
        </a>
        <?php endif; ?>

        <?php if(!empty($header_menu_left2['url'])) : ?>
        <a href="<?php echo $header_menu_left2['url']; ?>" target="<?php echo $header_menu_left2['target']; ?>" class="nav-link">
          <?php echo $header_menu_left2['title']; ?>
        </a>
        <?php endif; ?>
      </div>
      <?php endif; ?>
    </div>

    <a href="<?php echo home_url(); ?>" class="logothak">
      <img src="<?php echo $company_logo['url']; ?>" width="150" height="90" alt="<?php echo $company_logo['alt']; ?>">
    </a>

    <div class="header-right">
      <?php if(!empty($header_menu_right1['url']) or !empty($header_menu_right2['url'])) : ?>

      <div class="header-right-name">
        <?php if(!empty($header_menu_right1['url'])) : ?>
        <a href="<?php echo $header_menu_right1['url']; ?>" target="<?php echo $header_menu_right1['target']; ?>" class="nav-link">
          <?php echo $header_menu_right1['title']; ?>
        </a>
        <?php endif; ?>
        
        <?php if(!empty($header_menu_right2['url'])) : ?>
        <a href="<?php echo $header_menu_right2['url']; ?>" target="<?php echo $header_menu_right2['target']; ?>" class="nav-link">
          <?php echo $header_menu_right2['title']; ?>
        </a>
        <?php endif; ?>
      </div>
      <?php endif; ?>

      <?php if(!empty($header_link['url'])) : ?>
      <div class="booking">
        <a href="<?php echo $header_link['url']; ?>" target="<?php echo $cta_link['target']; ?>" class="reserver">

          <?php if(!empty($header_link_icon['url'])) : ?>
            <img src="<?php echo $header_link_icon['url']; ?>" width="50" height="50" title="<?php echo $header_link_icon['title']; ?>" alt="<?php echo $header_link_icon['alt']; ?>">
          <?php else : ?>
            <?php echo $header_link['title']; ?>
          <?php endif; ?>

        </a>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="overlay-menu-container">
    <div id="overlay-menu" class="overlay-menu">
      <button class="close-btn" id="close-btn" aria-label="Fermer le menu">&times;</button>
      
      <?php include_once(locate_template('parts/components/menu.php')); ?>

      <div class="menu-contact">
        <?php if ( !empty($company_phone_1) ) : ?>
          <p><a href="tel:<?php echo $company_phone_clean_1 ?>"><?php echo $company_phone_1 ?></a></p>
        <?php endif; ?>
        <?php if ( !empty($company_phone_2) ) : ?>
          <p><a href="tel:<?php echo $company_phone_clean_2 ?>"><?php echo $company_phone_2 ?></a></p>
        <?php endif; ?>
        <?php if ( !empty($company_mail) ) : ?>
          <p><a href="mailto:<?php echo $company_mail ?>"><?php echo $company_mail ?></a></p>
        <?php endif; ?>
          <div class="social-media-home">
            <?php include_once(locate_template('parts/components/social.php')); ?>
          </div>
      </div>
    </div>
  </div>
</header>