<?php
// valdiklio klasė
class Arunas_Widget extends WP_Widget {
    function __construct() {
        parent::__construct(
        // Valdiklio ID.
            'arunas_widget',
            // Valdiklio pavadinimas, matomas WP Admin.
            __('Arūnas Widget', 'temos-katalogas'),
            // Valdiklio aprašymas.
            array(
                'description' => __( 'Pavyzdinis valdiklis', 'temos-katalogas' ),
            )
        );
    }

// Valdiklio išvestis - kas matoma lankytojui frontende.
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $description = $instance['description'];
        $image = $instance['image'];
        // Jūsų specifinis kodas.
        ?>
        <div>
            <div class="project-item">
                <div class="text-content">
                    <h3><?php echo $title; ?></h3>
                    <p><?php echo $description; ?></p>
                    <div class="primary-button">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    // Valdiklio nustatymų forma.
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = __( 'New title', 'story' );
        }
        echo '<p>';
        echo '<label for="' . $this->get_field_id( 'title' ) . '">' . __( 'Title:', 'temos-katalogas' ) . '</label>';
        echo '<input class="widefat" id="' . $this->get_field_id( 'title' ) . '" name="' . $this->get_field_name( 'title' ) . '" type="text" value="' . esc_attr( $title ) . '" />';
        echo '</p>';
        if ( isset( $instance[ 'description' ] ) ) {
            $description = $instance[ 'description' ];
        } else {
            $description = __( 'New title', 'story' );
        }
        echo '<p>';
        echo '<label for="' . $this->get_field_id( 'description' ) . '">' . __( 'Description:', 'temos-katalogas' ) . '</label>';
        echo '<input class="widefat" id="' . $this->get_field_id( 'description' ) . '" name="' . $this->get_field_name( 'description' ) . '" type="text" value="' . esc_attr( $description ) . '" />';
        echo '</p>';
        if ( isset( $instance[ 'image' ] ) ) {
            $image = $instance[ 'image' ];
        } else {
            $image = __( '', 'story' );
        }
        echo '<p>';
        echo '<label for="' . $this->get_field_id( 'image' ) . '">' . __( 'Image:', 'temos-katalogas' ) . '</label>';
        echo '<input class="widefat" id="' . $this->get_field_id( 'image' ) . '" name="' . $this->get_field_name( 'image' ) . '" type="text" value="' . esc_attr( $image ) . '" />';
        echo '</p>';
    }

    // Valdiklio nustatymų išsaugojimas
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? strip_tags( $new_instance['description'] ) : '';
        $instance['image'] = ( ! empty( $new_instance['image'] ) ) ? strip_tags( $new_instance['image'] ) : '';
        return $instance;
    }
}
?>