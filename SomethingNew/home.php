<?php
    get_header();
    $count = 0;
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        if( 0 === $count ){
            //One
            get_template_part('loop', 'main');
        } else {
            // Two
            get_template_part('loop', 'second');
        }
        ++$count;
    endwhile; endif;
    get_sidebar();
    get_footer();
?>