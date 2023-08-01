<?php
namespace BdevsElementor\Widget;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Box_Shadow;

/**
 * Bdevs Elementor Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class BdevsBlog extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Bdevs Elementor widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'bdevs-blog';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Bdevs Elementor widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Blog', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Blog widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-post-content';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Project widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'bdevs-elementor' ];
	}

	public function get_keywords() {
		return [ 'blog' ];
	}

	public function get_script_depends() {
		return [ 'bdevs-elementor'];
	}

	// BDT Position
	protected function element_pack_position() {
	    $position_options = [
	        ''              => esc_html__('Default', 'bdevs-elementor'),
	        'top-left'      => esc_html__('Top Left', 'bdevs-elementor') ,
	        'top-center'    => esc_html__('Top Center', 'bdevs-elementor') ,
	        'top-right'     => esc_html__('Top Right', 'bdevs-elementor') ,
	        'center'        => esc_html__('Center', 'bdevs-elementor') ,
	        'center-left'   => esc_html__('Center Left', 'bdevs-elementor') ,
	        'center-right'  => esc_html__('Center Right', 'bdevs-elementor') ,
	        'bottom-left'   => esc_html__('Bottom Left', 'bdevs-elementor') ,
	        'bottom-center' => esc_html__('Bottom Center', 'bdevs-elementor') ,
	        'bottom-right'  => esc_html__('Bottom Right', 'bdevs-elementor') ,
	    ];

	    return $position_options;
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_content_heading',
			[
				'label' => esc_html__( 'Blog', 'bdevs-elementor' ),
			]	
		);

		$this->add_control(
			'number',
			[
				'label'       => __( 'Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => __( 'Number', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'     => __( 'This is subheading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'     => __( 'This is heading', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'description',
			[
				'label'       => __( 'Description', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'		=> __('This is description', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'post_number',
			[
				'label'     => esc_html__( 'Post Count', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your count', 'bdevs-elementor' ),
				'default'   => '4',
				'label_block' => true,
			]
		);

		$this->add_control(
			'post_order',
			[
				'label'     => esc_html__( 'Order', 'bdevs-elementor' ),
				'type'      => Controls_Manager::SELECT,
				'options'   => [
					'asc'  => esc_html__( 'ASC', 'bdevs-elementor' ),
					'desc' => esc_html__( 'DESC', 'bdevs-elementor' ),
				],
				'default'   => 'asc',
			]
		);

		$this->end_controls_section();

		/** 
		*	Layout section 
		**/
		$this->start_controls_section(
			'section_content_layout',
			[
				'label' => esc_html__( 'Layout', 'bdevs-elementor' ),
			]
		);

		$this->add_responsive_control(
			'align',
			[
				'label'   => esc_html__( 'Alignment', 'bdevs-elementor' ),
				'type'    => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-right',
					],
					'justify' => [
						'title' => esc_html__( 'Justified', 'bdevs-elementor' ),
						'icon'  => 'fa fa-align-justify',
					],
				],
				'prefix_class' => 'elementor%s-align-',
				'description'  => 'Use align to match position',
				'default'      => 'left',
			]
		);

		$this->add_control(
			'show_subheading',
			[
				'label'   => esc_html__( 'Show Subheading', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->add_control(
			'show_description',
			[
				'label'   => esc_html__( 'Show Description', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display(); 
		extract($settings);	
		$post_number = $settings['post_number'];
	    $order = $settings['post_order'];
	    $wp_query = new \WP_Query(array('posts_per_page' => $post_number,'post_type' => 'post',  'orderby' => 'ID', 'order' => $order));
	   
	    //other style
	    $args = array('posts_per_page' => $post_number,'post_type' => 'post',  'orderby' => 'ID', 'order' => $order);	
	   	?>
	   	<!-- blog start -->
        <section id="blog" class="section-all bg-dark">
            <!-- divider start -->
            <div class="divider-xl"></div>
            <!-- divider end -->
            <!-- container start -->
            <div class="container">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                    	<?php if ( $settings['show_subheading'] ) : ?>
                        <!-- section subtitle start -->
                        <h2 class="hero-subheading hero-subheading-dark">
                            <span><?php print wp_kses_post($settings['number']); ?></span><?php print wp_kses_post($settings['subheading']); ?>
                        </h2>
                        <!-- section subtitle end -->
                    	<?php endif; ?>
                        <!-- divider start -->
                        <div class="divider-m"></div>
                        <!-- divider end -->
                        <!-- section title start -->
                        <h2 class="hero-heading hero-heading-dark">
                            <?php print wp_kses_post($settings['heading']); ?>
                        </h2>
                        <!-- section title end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <?php if ( $settings['show_description'] ) : ?>
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- quote start -->
                        <div class="testimonial testimonial-bottom">
                            <div class="inner">
                                <div class="quote">
                                    <blockquote class="quote-inner">
                                        <?php print wp_kses_post($settings['description']); ?>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <!-- quote end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            	<?php endif; ?>
            </div>
            <!-- container end -->
            <!-- divider start -->
            <div class="divider-l"></div>
            <!-- divider end -->
        </section>
        <!-- blog end -->
        <!-- blog start -->
        <section id="blog-2" class="section-all bg-light">
            <!-- container start -->
            <div class="container-fluid nopadding">
                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                    	<?php $i=0;
			                $args = new \WP_Query(array(   
			                            'post_type' => 'post', 
			                        ));  
			                while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
			                $i++;
			            ?>
                        <!-- blog item start -->
                        <div class="blog-item">
                            <div class="blog-content">
                                <div class="blog-wrapper">
                                    <!-- section subtitle start -->
                                    <span class="blog-tag"><?php the_time(get_option( 'date_format' ));?></span>
                                    <!-- section subtitle end -->
                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <!-- section txt start -->
                                    <p>
                                        <?php if(isset($foodex_redux_demo['blog_excerpt'])){?>
						                <?php echo esc_attr(foodex_excerpt($foodex_redux_demo['blog_excerpt'])); ?>
						                <?php }else{?>
						                <?php echo esc_attr(foodex_excerpt(40)); 
						                ?> 
						            	<?php } ?>    
                                    </p>
                                    <!-- section txt end -->
                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- button start -->
                                    <div class="blog-tag blog-more" data-toggle="modal" data-target="#newsModal-<?php echo $i; ?>">
	                                    <?php if(isset($foodex_redux_demo['read_more'])){?>
			                            <?php echo wp_specialchars_decode(esc_attr($foodex_redux_demo['read_more']));?>
			                            <?php }else{?>
			                            <?php echo esc_html__( 'Read More', 'foodex' );?>
			                        	<?php } ?>
	                                </div>
                                    <!-- button end -->
                                </div>
                            </div>
                            <!-- section IMG start -->
                            <img alt="Img" class="img-cover" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id());?>">
                            <!-- section IMG end -->
                        </div>
                        <!-- blog item end -->
                        <?php   
					        endwhile; 
					    ?>
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
            <!-- divider start -->
            <div class="divider-m-2"></div>
            <!-- divider end -->
        </section>
        <!-- blog end -->
        <?php $j=0;
	        $args = new \WP_Query(array(   
	                    'post_type' => 'post', 
	                ));  
	        while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
	        $j++;
	    ?>
        <!-- news modal 1 start -->
        <div aria-hidden="true" class="news-modal modal fade" id="newsModal-<?php echo $j; ?>" role="dialog" tabindex="-1">
            <!-- news modal content start -->
            <div class="lower-page lower-page-modal">
                <div class="modal-content">
                    <!-- container start -->
                    <div class="container">
                        <!-- row start -->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- divider start -->
                                <div class="divider-xl"></div>
                                <!-- divider end -->
                                <div class="text">
                                    <!-- section subtitle start -->
                                    <span class="blog-tag"><?php the_time(get_option( 'date_format' ));?></span>
                                    <!-- section subtitle end -->
                                    <!-- divider start -->
                                    <div class="divider-m"></div>
                                    <!-- divider end -->
                                    <!-- section title start -->
                                    <h2>
                                        <?php the_title(); ?>
                                    </h2>
                                    <!-- section title end -->
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                </div>

                            </div>
                        </div>
                        <!-- row end -->
                    </div>
                    <!-- container end -->
                    <?php the_content(); ?>
                    <!-- divider start -->
                    <div class="divider-l"></div>
                    <!-- divider end -->
                    <!-- button start -->
                    <div class="more-wraper-center" data-toggle="modal" data-dismiss="modal">
                        <div class="more-button-bg-center more-button-bg-center-dark more-button-bg-center-dark-close more-button-circle">
                        </div>
                        <div class="more-button-txt-center more-button-txt-center-close">
                            <button>
                            <span><?php if(isset($foodex_redux_demo['close'])){?>
		                            <?php echo wp_specialchars_decode(esc_attr($foodex_redux_demo['close']));?>
		                            <?php }else{?>
		                            <?php echo esc_html__( 'Close', 'foodex' );?>
		                        	<?php } ?></span>
                            </button>
                        </div>
                    </div>
                    <!-- button end -->
                    <!-- divider start -->
                    <div class="divider-xl"></div>
                    <!-- divider end -->
                </div>
            </div>
            <!-- news modal content end -->
        </div>
        <!-- news modal 1 end -->
        <?php   
	        endwhile; 
	    ?>
	<?php
	}

}