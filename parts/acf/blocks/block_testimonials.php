<?php
$testimonials_title   = get_sub_field('testimonials_title');
$testimonials_subtitle= get_sub_field('testimonials_subtitle');
$testimonials_text    = get_sub_field('testimonials_text');
$testimonials_padding = get_sub_field('testimonials_padding');
$testimonials_cta     = get_sub_field('testimonials_cta');
$testimonials_select  = get_sub_field('testimonials_select');

if ($testimonials_select) {
    $args = [
        'post_type'      => 'temoignage',
        'post__in'       => wp_list_pluck($testimonials_select, 'ID'),
        'orderby'        => 'post__in',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    ];
} else {
    $args = [
        'post_type'      => 'temoignage',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    ];
}

$testimonial_query = new WP_Query($args);

/* echo '<pre>';
var_dump($testimonial_query);
echo '</pre>';*/


if ($testimonial_query->have_posts()) :
?>

 <section class="testimonials padding-<?php echo $testimonials_padding; ?>">
    <?php if ( !empty($testimonials_title) || !empty($testimonials_text) || !empty($testimonials_cta['url'] )) : ?>
    <div class="testimonials-txt">
        <?php if ( !empty($testimonials_title) ) : ?>
            <h2 class="testimonials-title"><?php echo $testimonials_title ?></h2>
        <?php endif; ?>

        <?php if ( !empty($testimonials_subtitle) ) : ?>
            <p class="testimonials-subtitle"><?php echo $testimonials_subtitle ?></p>
        <?php endif; ?>

        <?php if(!empty($testimonials_text) ) : ?>
            <div class="testimonials-text"><?php echo $testimonials_text; ?></div>
        <?php endif; ?>

        <?php if(!empty($testimonials_cta['url']) ) : ?>
        <button role="button" href="<?php echo $testimonials_cta['url']; ?>" <?php echo !empty($testimonials_cta['target']) ? 'target="_blank"' : ''; ?> class="testimonials-cta style-button">
            <?php echo $testimonials_cta['title']; ?>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
         
    <div class="polaroid-stack">
        <?php while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
            $testimonials_name  = get_the_title();
            $testimonials_speak = get_field('testimonials_speak');
            $testimonials_photo = get_field('testimonials_photo');
        ?>  
        <button role="button" class="testimonials-link rotate-9">
            <img src="<?php echo $testimonials_photo; ?>" alt="<?php echo $testimonials_name; ?>" class="polaroid"/>
        </button>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php endif; ?>