<?php
/*
Plugin Name: CA Post related
Description: Shows related posts
Version: 0.1.0
Author: Seimur
*/

add_action( 'plugins_loaded', 'ca_related' );

/*register_activation_hook( __FILE__,    array( ca_related(), 'activate' ) );
register_deactivation_hook( __FILE__,  array( ca_related(), 'deactivate' ) );
register_uninstall_hook( __FILE__,     array( 'ca_related', 'uninstall' ) );*/

function ca_related() {
    if ( false === ca_related::$instance ) {
        ca_related::$instance = new ca_related();
    }
    return ca_related::$instance;
}

class ca_related
{
    public static $instance = false;
    public $plugin_path = '';
    public $options = array(
        'a' => 'test',
        'input_simple' => 'Default',
        'input_number' => '3',
    );


    public function __construct()
    {
        // do something when plugin loads.
        $this->plugin_path = plugin_dir_path(__FILE__);
        // shortkodas, kad galetume paleisti nuorodu atvaizdavima turinyje
        add_shortcode('ca_related', array($this, 'show'));
        // add_filter ('the_content') reiskia, kad kazkokia funkcija veiks su turiniu. Siuo atveju ca_related
        add_filter('the_content', array($this, 'ca_related_last'));
        add_action('add_meta_boxes_post', array($this, 'add_metabox'));
        add_action('save_post', array($this, 'save_metabox'));
        $this->options = wp_parse_args( get_option( 'ca_related_options' ), $this->options );
        $this->load_settings2();
    }
    public function save_metabox($post_id){
        // cheack for related posts data.
        if(! isset($_POST['tinyrelated_list'])){
            return false;
        }
        // check for autosave.
        if(defined ('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return false;
        }
        // check for user capabilities.
        if (! current_user_can('edit_post', $post_id)){
            return false;
        }

        if(! wp_verify_nonce($_POST['tinyrelated_metabox_nonce'], 'tinyrelated_metabox')){
            return false;
        }
        $data = array();
        foreach ($_POST['tinyrelated_list'] as $key=>$value) {
            if (! $value) {
                $data[$key] = '';
            } else {
                $data[$key] = $value * 1;
            }
        }
        update_post_meta($post_id,'_tinyrelated_list', $data);
    }

    public function activate()
    {
        // do something on plugin activation.
    }

    public function deactivate()
    {
        // do something on plugin deactivation.
    }

    public static function uninstall()
    {
        // do something on plugin uninstallation.
    }

    // Padavus masyva, metodas parodo sarasa nuorodu. 1
    public function show($args = array(), $content = '')
    {
        $defaults = array(
            'title' => __('Related Posts', 'ca_related'),
        );
        $args = wp_parse_args($args, $defaults);
        $list = get_post_meta(get_the_id(), '_tinyrelated_list', true);
        if (is_array($list)){
            foreach ($list as $key=>$post_id){
                if (! $post_id){
                    unset($list[$key]);
                } else {
                    $item = array(
                        'title' => get_the_title($post_id),
                        'link' => get_permalink($post_id),
                    );
                    $list[$key] = $item;
                }
            }
        } else {
            return '';
        }
        $list = array_slice($list,0, $this->options['input_number']);
        $return = '<div class="ca_related_container">';
        $return .= '<h2>' . $args['title'] . '</h2>';
        $return .= $this->build_list($list);
        $return .= '</div>';
        return $return;
    }

    // Padavus masyva, metodas parodo sarasa nuorodu. 2.
    public function build_list($masyvas = array())
    {
        $masyvas = apply_filters('ca_related_list_items', $masyvas);
        $return = '<ul class="ca_related">';
        foreach ($masyvas as $raktas) {
            $return .= '<li>';
            $return .= '<a href="' . esc_attr($raktas['link']) . '">';
            $return .= ($raktas['title']);
            $return .= '</a>';
            $return .= '</li>';
        }
        $return .= '</ul>';
        $return = apply_filters('ca_related_list_output', $return, $masyvas);
        return $return;
    }

    public function ca_related_last($content)
    {
        $afterContent = $this->show();
        $result = $content . $afterContent;
        return $result;
    }

    // Destytojo funkcija
    public function content($content)
    {
        if ('post' !== get_post_type()) {
            return $content;
        }
        if ('before' === $this->options['content_position']) {
            $content = $this->show() . PHP_EOL . $content;
        } elseif ('after' === $this->options['content_position']) {
            $content .= PHP_EOL . $this->show();
        }
        return $content;
    }

    public function add_metabox()
    {
        add_meta_box(
            'ca_related_metabox',
            /* translators: Related Posts Metabox Title */
            __('Related Posts', 'ca_related'),
            array($this, 'print_metabox'),
            'post'
        );
    }

    public function print_metabox($post)
    {
        $list = get_post_meta($post->ID, '_tinyrelated_list', true);
        $output = '<table class="form-table"><tbody>';
        for ($i =0; $i<$this->options['input_number']; ++$i){
            $output .= $this->metabox_field(array(
                'id' => 'tinyrelated_list_' .$i,
                'name' => 'tinyrelated_list[' . $i . ']',
                /* translators: select title */
                'label' => __('Related Post', 'ca_related' ),
                'value' => isset($list[$i]) ? $list[$i] : '',
                'type' => 'select_posts',
            ));
        }
        $output .= '</tbody></table>';
        wp_nonce_field('tinyrelated_metabox', 'tinyrelated_metabox_nonce');
        echo $output;
    }
    public function metabox_field($args){
        $return = '<tr>';
        $return .= '<th scope="row">';
        $return .= '<label for="' . esc_attr($args['id'] ) . '">';
        $return .= esc_html($args['label']);
        $return .= '</label>';
        $return .= '</th>';
        $return .= '<td>';
        switch ($args['type']){
            case 'select_posts';
            $posts = get_posts('posts_per_page=9999999');
            $return .= '<select name="' . esc_attr($args['name']) . '" id="' . esc_attr($args['id']) . '">';
            $return .= '<option value="">' . __('- none -', 'ca_related') . '</option>';
            if (! empty($posts)){
                foreach ($posts as $post){
                    $selected = selected($args['value'], $post->ID, false);
                    $return .= '<option value= "' . $post->ID . '" ' . $selected . '>' . $post->post_title . '</option>';
                }

            }
            $return .= '</select>';
            break;
        }
        $return .= '</td>';
        $return .= '</tr>';
        return $return;
    }

    public $settings2 = false;
    public function load_settings2() {
        $this->settings2 = array(
            'title' 			=> __( 'TinyTemplate2 Settings', 'tinytemplate2' ),
            'menu_title'	=> __( 'TinyTemplate2', 'tinytemplate2' ),
            'slug' 				=> 'tinytemplate2-settings',
            'option'			=> 'ca_related_options',
            // optional settings.
            'description'	=> __( 'Some general information about the plugin', 'tinytemplate2' ),
            'tabs'	=> array(
                'main'	=> array(
                    'sections' => array(
                        'inputs' => array(
                            'title'				=> __( 'Section #1 - Inputs', 'tinytemplate2' ),
                            'description'	=> __( 'Showcases various <code>&lt;input&gt;</code> based fields', 'tinytemplate2' ),
                            'fields'	=> array(
                                'input_simple' => array(
                                    'title'	=> __( 'Simple Input', 'tinytemplate2' ),
                                ),
                                'input_description' => array(
                                    'title'	=> __( 'Simple Input', 'tinytemplate2' ),
                                    'description'	=> __( 'With a description', 'tinytemplate2' ),
                                ),
                                'input_placeholder' => array(
                                    'title'	=> __( 'Paceholder Input', 'tinytemplate2' ),
                                    'attributes' => array(
                                        'placeholder'	=> __( 'Placeholder example', 'tinytemplate2' ),
                                    ),
                                ),
                                'input_number' => array(
                                    'title'	=> __( 'Related Post Number Input', 'tinytemplate2' ),
                                    'attributes' => array(
                                        'type'	=> 'number',
                                    ),
                                ),
                                'input_password' => array(
                                    'title'	=> __( 'Password Input', 'tinytemplate2' ),
                                    'attributes' => array(
                                        'type'	=> 'password',
                                    ),
                                ),
                            ),
                        ),
                        'lists' => array(
                            'title'	=> __( 'Section #2 - lists and checkboxes', 'tinytemplate2'),
                            'description'	=> __( 'Checkbox lists, radiobox list, select, checkbox, etc.', 'tinytemplate2' ),
                            'fields'	=> array(
                                'lists_check' => array(
                                    'title'	=> __( 'Checkbox', 'tinytemplate2' ),
                                    'label'	=> __( 'Checkbox', 'tinytemplate2' ),
                                    'callback'	=> 'checkbox',
                                ),
                                'lists_select' => array(
                                    'title'	=> __( 'Select', 'tinytemplate2' ),
                                    'list'	=> array( ''=>'-none-', 'a' => 'A', 'b' => 'B' ),
                                    'callback'	=> 'listfield',
                                ),
                                'lists_select_multi' => array(
                                    'title'	=> __( 'Select Multiple', 'tinytemplate2' ),
                                    'list'	=> array( ''=>'-none-', 'a' => 'A', 'b' => 'B', 'c'=> 'C', 'd'=>'D' ),
                                    'callback'	=> 'listfield',
                                    'attributes' => array(
                                        'size'	=> 3,
                                        'multiple'=>true,
                                    )
                                ),
                                'content_position' => array(
                                    'title'	=> __( 'Select Radiobutton', 'tinytemplate2' ),
                                    'list'	=> array( ''=>'-none-', 'after' => 'After content', 'before' => 'Before content' ),
                                    'callback'	=> 'listfield',
                                    'attributes'	=> array(
                                        'type'	=> 'radio',
                                    )
                                ),
                                'lists_checkbox' => array(
                                    'title'	=> __( 'Select Checkbox', 'tinytemplate2' ),
                                    'list'	=> array( ''=>'-none-', 'a' => 'A', 'b' => 'B' ),
                                    'callback'	=> 'listfield',
                                    'attributes'	=> array(
                                        'type'	=> 'checkbox',
                                    )
                                ),
                            ),
                        ),
                        'misc' => array(
                            'title'	=> __( 'Section #3 - other fields', 'tinytemplate2'),
                            'description'	=> __( 'Other types of fields', 'tinytemplate2' ),
                            'fields'	=> array(
                                'textarea' => array(
                                    'title'	=> __( 'Textarea', 'tinytemplate2' ),
                                    'callback'	=> 'textarea',
                                    'attributes'	=> array(
                                        'rows' => 10,
                                        'cols' => 30,
                                    )
                                ),
                                'link' => array(
                                    'title'	=> __( 'Link', 'tinytemplate2' ),
                                    'label'	=> __( 'Click', 'tinytemplate2' ),
                                    'attributes'	=> array(
                                        'href' => '?gogogo',
                                        // 'class' => 'button',
                                    ),
                                    'callback'	=> 'url',
                                ),
                                'link_button' => array(
                                    'title'	=> __( 'Link Button', 'tinytemplate2' ),
                                    'label'	=> __( 'Click', 'tinytemplate2' ),
                                    'attributes'	=> array(
                                        'href' => '?gogogo',
                                        'class' => 'button',
                                    ),
                                    'callback'	=> 'url',
                                ),
                                'link_primary' => array(
                                    'title'	=> __( 'Link Primary', 'tinytemplate2' ),
                                    'label'	=> __( 'Click', 'tinytemplate2' ),
                                    'attributes'	=> array(
                                        'href' => '?gogogo',
                                        'class' => 'button button-primary',
                                        'target'	=> '_blank',
                                    ),
                                    'callback'	=> 'url',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
            'l10n' => array(
                'no_access'			=> __( 'You do not have sufficient permissions to access this page.', 'tinytemplate2' ),
                'save_changes'	=> esc_attr( 'Save Changes', 'tinytemplate2' ),
            ),
        );
        require_once( $this->plugin_path . "tiny/tiny.settings2.php" );
        // require_once( self::$plugin_path . 'tiny/tiny.options.php' );
        $this->settings2 = new TinySettings2( $this->settings2, $this );
    }
}

