<!-- Footer -->
<footer class="wrapper style1 align-center">
    <div class="inner">
        <?php
        $args = array(
            'theme_location'  => 'footer-menu',
            'container'       => null,
            'menu_class'      => 'icons',
        );
        wp_nav_menu( $args );
        ?>
        <ul class="icons">
            <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
        </ul>
        <p> <?php echo get_theme_mod('story-copyright'); ?> &copy; <?php _e('Untitled. Design:' , 'story'); ?> <a href="https://html5up.net"><?php _e('HTML5 UP!' , 'story'); ?></a>.</p>
    </div>
</footer>

</div>

<!-- Scripts -->
<?php wp_footer(); ?>
</body>
</html>