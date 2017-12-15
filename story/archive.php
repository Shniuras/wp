<?php
    get_header();
    $count = 0;
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        if( 0 === $count ){
            //third
            get_template_part('loop', 'third');
        } else {
            // Two
            get_template_part('loop', 'two');
        }
        ++$count;
    endwhile; endif;
    get_sidebar();
    get_footer();
?>