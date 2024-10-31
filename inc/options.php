<?php 
//theme option by cmb


class sanchari_sls_Admin {

    /**
     * Option key, and option page slug
     * @var string
     */
    private $key = 'myprefix_options';

    /**
     * Array of metaboxes/fields
     * @var array
     */
    protected $option_metabox = array();

    /**
     * Options Page title
     * @var string
     */
    protected $title = '';

    /**
     * Options Page hook
     * @var string
     */
    protected $options_page = '';

    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = __( 'Wp Login optins', 'myprefix' );
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) );
    }

    /**
     * Register our setting to WP
     * @since  0.1.0
     */
    public function init() {
        register_setting( $this->key, $this->key );
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );
    }

    /**
     * Admin page markup. Mostly handled by CMB
     * @since  0.1.0
     */
	 
    public function admin_page_display() {
        ?>
		<!-- this code for adds -->
        <div class="wrap cmb_options_page <?php echo $this->key; ?>">
		    <div style="margin-top: -10px;" class="cfb_adds"><a href="http://arnabportfolio.blogspot.in/" target="_blank"><img style="Width:100%;height:auto;" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/adds1.jpg'; ?>" alt=""></a></div>
			
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			
            <?php cmb_metabox_form( self::option_fields(), $this->key ); ?>
			
			<!-- this code for adds -->
			<div style="margin-top:20px;margin-right:20px;" class="cfb_adds"><a href="http://arnabportfolio.blogspot.in/" target="_blank"><img style="Width:100%;height:auto;" src="<?php echo plugin_dir_url( dirname( __FILE__ ) ) . 'images/adds2.jpg'; ?>"></a></div>
        </div>
        <?php
		
		
		
    }
	 

    /**
     * Defines the theme option metabox and field configuration
     * @since  0.1.0
     * @return array
     */
    public function option_fields() {

        // Only need to initiate the array once per page-load
        if ( ! empty( $this->option_metabox ) ) {
            return $this->option_metabox;
        }

        $this->fields = array(
           array(
                'name'    => __( 'Body Background Image', 'myprefix' ),
                'desc'    => __( 'field description (optional)', 'myprefix' ),
                'id'      => 'body_bg_id',
                'type'    => 'file',
            ),
			array(
                'name'    => __( 'Body Background Color', 'myprefix' ),
                'desc'    => __( 'field description (optional)', 'myprefix' ),
                'id'      => 'logo_id',
                'type'    => 'colorpicker',
                'default' => '#ffffff'
            ),
			array(
                'name'    => __( 'Login Form Error Message Background', 'myprefix' ),
                'desc'    => __( 'Change color here', 'myprefix' ),
                'id'      => 'login_form_error_bg_id',
                'type'    => 'colorpicker',
                'default' => '#ffffff'
            ),
			array(
                'name'    => __( 'Login Form Error Message Text Color', 'myprefix' ),
                'desc'    => __( 'Change color here', 'myprefix' ),
                'id'      => 'login_form_error_color_id',
                'type'    => 'colorpicker',
                'default' => '#ffffff'
            ),
			array(
                'name'    => __( 'Login Form Background Color', 'myprefix' ),
                'desc'    => __( 'Change color here', 'myprefix' ),
                'id'      => 'loginform_bg_id',
                'type'    => 'colorpicker',
                'default' => '#ffffff'
            ),
			array(
                'name'    => __( 'Login Form Text Color', 'myprefix' ),
                'desc'    => __( 'Change color here', 'myprefix' ),
                'id'      => 'loginform_p_color_id',
                'type'    => 'colorpicker',
                'default' => '#ffffff'
            )
        );
		
		
        $this->option_metabox = array(
            'id'         => 'option_metabox',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( $this->key, ), ),
            'show_names' => true,
            'fields'     => $this->fields,
        );

        return $this->option_metabox;
    }

    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get( $field ) {

        // Allowed fields to retrieve
        if ( in_array( $field, array( 'key', 'fields', 'title', 'options_page' ), true ) ) {
            return $this->{$field};
        }
        if ( 'option_metabox' === $field ) {
            return $this->option_fields();
        }

        throw new Exception( 'Invalid property: ' . $field );
    }

}

// Get it started
$sanchari_sls_Admin = new sanchari_sls_Admin();
$sanchari_sls_Admin->hooks();

/**
 * Wrapper function around sls_cmb_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function sls_myprefix_get_option( $key = '' ) {
    global $sanchari_sls_Admin;
    return sls_cmb_get_option( $sanchari_sls_Admin->key, $key );
}






?>