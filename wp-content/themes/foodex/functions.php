<?php
$foodex_redux_demo = get_option('redux_demo');

//Custom fields:
require_once get_template_directory() . '/framework/wp_bootstrap_navwalker.php';
require_once get_template_directory() . '/framework/widget/recent-post.php';
require_once get_template_directory() . '/framework/class-ocdi-importer.php';
//Theme Set up:
function foodex_theme_setup() {
  /*
   * This theme uses a custom image size for featured images, displayed on
   * "standard" posts and pages.
   */
  add_theme_support( 'custom-header' ); 
  remove_filter ('the_content', 'wpautop');
  add_theme_support( 'custom-background' );
  $lang = get_template_directory_uri() . '/languages';
  load_theme_textdomain('foodex', $lang);
  add_theme_support( 'post-thumbnails' );
  // Adds RSS feed links to <head> for posts and comments.
  add_theme_support( 'automatic-feed-links' );
  // Switches default core markup for search form, comment form, and comments
  // to output valid HTML5.
  add_theme_support( "title-tag" );
  add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' =>  esc_html__( 'Primary Navigation Menu.', 'foodex' ),
    'single_light' =>  esc_html__( 'Single Light Menu.', 'foodex' ),
    'single_dark' =>  esc_html__( 'Single Dark Menu.', 'foodex' ),
  ) );
    // This theme uses its own gallery styles.
}
add_action( 'after_setup_theme', 'foodex_theme_setup' );
if ( ! isset( $content_width ) ) $content_width = 900;


function foodex_theme_scripts_styles() {
  $foodex_redux_demo = get_option('redux_demo');
  $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'foodex-plugins', get_template_directory_uri().'/css/plugins.css');

    if(!is_page_template('page-templates/home-1-dark.php') and !is_page_template('page-templates/home-2-dark.php')
    and !is_page_template('page-templates/home-3-dark.php') and !is_page_template('page-templates/home-4-dark.php') ){
    wp_enqueue_style( 'foodex-style', get_template_directory_uri().'/css/style.css');
    }
    
    if(is_page_template('page-templates/home-1-dark.php') or is_page_template('page-templates/home-2-dark.php') or is_page_template('page-templates/home-3-dark.php') or is_page_template('page-templates/home-4-dark.php') ){
        wp_enqueue_style( 'foodex-dark-style', get_template_directory_uri().'/css/dark/style.css');
    }
    wp_enqueue_style( 'foodex-font', $protocol. '://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900%7CMontserrat:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
    wp_enqueue_style( 'foodex-css', get_stylesheet_uri(), array(), '2022-04-21' );

    if(isset($foodex_redux_demo['chosen-color']) && $foodex_redux_demo['chosen-color']==1){
    wp_enqueue_style( 'color', get_template_directory_uri().'/framework/color.php');
    }    
    if(isset($foodex_redux_demo['support-rtl']) && $foodex_redux_demo['support-rtl']==1){
    wp_enqueue_style( 'support-rtl', get_template_directory_uri().'/rtl.css');
    }
    
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  //Javascript
    wp_enqueue_script("foodex-plugins", get_template_directory_uri()."/js/plugins.js",array(),false,true);

    if(!is_page_template('page-templates/home-1.php') and !is_page_template('page-templates/home-1-dark.php') and !is_page_template('page-templates/home-3.php') and !is_page_template('page-templates/home-3-dark.php')
    and !is_page_template('page-templates/home-4-dark.php') and !is_page_template('page-templates/home-4.php') ){
    wp_enqueue_script("foodex-02", get_template_directory_uri()."/js/foodex-02.js",array(),false,true);
    }

    if(is_page_template('page-templates/home-1.php') or is_page_template('page-templates/home-1-dark.php') ){
        wp_enqueue_script("foodex-01", get_template_directory_uri()."/js/foodex-01.js",array(),false,true);
    }
    if(is_page_template('page-templates/home-3.php') or is_page_template('page-templates/home-3-dark.php')){
        wp_enqueue_script("foodex-03", get_template_directory_uri()."/js/foodex-03.js",array(),false,true);
    }
    if(is_page_template('page-templates/home-4.php') or is_page_template('page-templates/home-4-dark.php')){
        wp_enqueue_script("foodex-04", get_template_directory_uri()."/js/foodex-04.js",array(),false,true);
    }
}
    
add_action( 'wp_enqueue_scripts', 'foodex_theme_scripts_styles' );
//Custom Excerpt Function
function foodex_do_shortcode($content) {
    global $shortcode_tags;
    if (empty($shortcode_tags) || !is_array($shortcode_tags))
        return $content;
    $pattern = get_shortcode_regex();
    return preg_replace_callback( "/$pattern/s", 'do_shortcode_tag', $content );
}  

// Widget Sidebar
function foodex_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Primary Sidebar', 'foodex' ),
    'id'            => 'sidebar-1',        
        'description'   => esc_html__( 'Appears in the sidebar section of the site.', 'foodex' ),        
        'before_widget' => '<section id="%1$s" class="widget %2$s" >',        
        'after_widget'  => '</section>
                            <div class=inner-divider-50></div>',        
        'before_title'  => '<div class="blog-side-heading">
                              <h3>',        
        'after_title'   => '</h3></div>
                            <div class="inner-divider-25"></div>'
    ) );
}
add_action( 'widgets_init', 'foodex_widgets_init' );

//function tag widgets
function foodex_tag_cloud_widget($args) {
  $args['number'] = 0; //adding a 0 will display all tags
  $args['largest'] = 18; //largest tag
  $args['smallest'] = 11; //smallest tag
  $args['unit'] = 'px'; //tag font unit
  $args['format'] = 'list'; //ul with a class of wp-tag-cloud
  $args['exclude'] = array(20, 80, 92); //exclude tags by ID
  return $args;
}
add_filter( 'widget_tag_cloud_args', 'foodex_tag_cloud_widget' );
function foodex_excerpt() {
  $foodex_redux_demo = get_option('redux_demo');
  if(isset($foodex_redux_demo['blog_excerpt'])){
    $limit = $foodex_redux_demo['blog_excerpt'];
  }else{
    $limit = 30;
  }
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}


function foodex_pagination($pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
    'base'      => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
    'format'    => '',
    'current'     => max( 1, get_query_var('paged') ),
    'total'     => $pages,
    'prev_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-left"></i>', 'foodex' ),ENT_QUOTES),
    'next_text' => wp_specialchars_decode(esc_html__( '<i class = "fa fa-angle-right"></i>', 'foodex' ),ENT_QUOTES),
    'type'      => 'list',
    'end_size'    => 3,
    'mid_size'    => 3
);
    $return =  paginate_links( $pagination );
  echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}

function foodex_search_form( $form ) {
  $form = '
  <form  method="get" action="' . esc_url(home_url('/')) . '"> 
    <input type="text"  placeholder="'.esc_attr__('Search', 'foodex').'" value="' . get_search_query() . '" name="s" > 
    <button type="submit"><i class="ion-ios-search-strong"></i></button>
  </form>
  ';
  return $form;
}
add_filter( 'get_search_form', 'foodex_search_form' );
//Custom comment List:

 
// Comment Form
function foodex_theme_comment($comment, $args, $depth) {
    //echo 's';
   $GLOBALS['comment'] = $comment; ?>
    <?php if(get_avatar($comment,$size='80' )!=''){?>
    <article>
        <h4>
            <?php printf( get_comment_author_link()) ?>
            <span class="comment-time"> . <?php comment_time(get_option( 'date_format' ));?></span>
        </h4>
        <!-- divider start -->
        <div class="divider-m"></div>
        <!-- divider end -->
        <div class="profile-photo">
            <?php echo get_avatar($comment,$size='80' ); ?>
        </div>
        <!-- divider start -->
        <div class="divider-m"></div>
        <!-- divider end -->
        <?php comment_text() ?>
        <div class="divider-l"></div>
    </article>
    
    <?php }else{?>
    <article>
        <h4>
            <?php printf( get_comment_author_link()) ?>
            <span class="comment-time"> . <?php comment_time(get_option( 'date_format' ));?></span>
        </h4>
        <!-- divider start -->
        <div class="divider-m"></div>
        <!-- divider end -->
        <!-- divider start -->
        <div class="divider-m"></div>
        <!-- divider end -->
        <?php comment_text() ?>
        <div class="divider-l"></div>
    </article>
    
    <?php }?>

<?php
}

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1
 * @author     Thomas Griffin <thomasgriffinmedia.com>
 * @author     Gary Jones <gamajo.com>
 * @copyright  Copyright (c) 2014, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */
/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/framework/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'foodex_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
 
 
function foodex_theme_register_required_plugins() {
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
      array(
            'name'      => esc_html__( 'One Click Demo Import', 'foodex' ),
            'slug'      => 'one-click-demo-import',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Editor', 'foodex' ),
            'slug'      => 'classic-editor',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Classic Widgets', 'foodex' ),
            'slug'      => 'classic-widgets',
            'required'  => true,
        ),
      array(
            'name'      => esc_html__( 'Widget Importer & Exporter', 'foodex' ),
            'slug'      => 'widget-importer-&-exporter',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'Contact Form 7', 'foodex' ),
            'slug'      => 'contact-form-7',
            'required'  => true,
        ), 
      array(
            'name'      => esc_html__( 'WP Maximum Execution Time Exceeded', 'foodex' ),
            'slug'      => 'wp-maximum-execution-time-exceeded',
            'required'  => true,
        ), 
      array(
            'name'                     => esc_html__( 'Elementor', 'foodex' ),
            'slug'                     => 'elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/elementor.zip',
        ),
      array(
            'name'                     => esc_html__( 'Foodex Common', 'foodex' ),
            'slug'                     => 'foodex-common',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/foodex-common.zip',
        ),
      array(
            'name'                     => esc_html__( 'Foodex Elementor', 'foodex' ),
            'slug'                     => 'foodex-elementor',
            'required'                 => true,
            'source'                   => get_template_directory() . '/framework/plugins/foodex-elementor.zip',
        ),
    );
    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => esc_html__( 'Install Required Plugins', 'foodex' ),
            'menu_title'                      => esc_html__( 'Install Plugins', 'foodex' ),
            'installing'                      => esc_html__( 'Installing Plugin: %s', 'foodex' ), // %s = plugin name.
            'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'foodex' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'foodex' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'foodex' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'foodex' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'foodex' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'foodex' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'foodex' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'foodex' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'foodex' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'foodex' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'foodex' ),
            'return'                          => esc_html__( 'Return to Required Plugins Installer', 'foodex' ),
            'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'foodex' ),
            'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'foodex' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    tgmpa( $plugins, $config );
}
?>