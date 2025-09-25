<?php if (have_rows('page_builder')) :
    while (have_rows('page_builder')) : the_row();
        get_template_part('parts/acf/blocks/' . get_row_layout());
    endwhile; wp_reset_postdata();
endif; ?>