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
class BdevsContact extends \Elementor\Widget_Base {

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
		return 'bdevs-contact';
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
		return __( 'Contact', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Contact widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-headphones';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Contact widget belongs to.
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
		return [ 'contact', 'carousel' ];
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
				'label' => esc_html__( 'Contact', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'number',
			[
				'label'       => __( 'Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'		=> __('Number', 'bdevs-elementor'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'subheading',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'		=> __('This is subheading', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'		=> __('This is heading', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'button',
			[
				'label'       => __( 'Button', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'		=> __('Button', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_contact',
			[
				'label' => esc_html__( 'Contact Info', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'icon',
						'label'       => esc_html__( 'Icon', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Icon' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'contact_info',
						'label'       => esc_html__( 'Contact Info', 'bdevs-elementor' ),
						'type'        => Controls_Manager::WYSIWYG,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Contact Info' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_form',
			[
				'label' => esc_html__( 'Contact Form', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'number_2',
			[
				'label'       => __( 'Number', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'		=> __('Number', 'bdevs-elementor'),
				'label_block' => true,
			]
		);

		$this->add_control(
			'subheading_2',
			[
				'label'       => __( 'Subheading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXT,
				'default'		=> __('This is subheading', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'heading_2',
			[
				'label'       => __( 'Heading', 'bdevs-elementor' ),
				'type'        => Controls_Manager::TEXTAREA,
				'default'		=> __('This is heading', 'bdevs-elementor'),
				'label_block' => true,
			]
		);	

		$this->add_control(
			'shortcode',
			[
				'label'   => esc_html__( 'Contact Form', 'bdevs-elementor' ),
				'type'    => Controls_Manager::TEXTAREA,
				'dynamic' => [ 'active' => true ],
				'default'		=> __('Contact Form', 'bdevs-elementor'),
				'description' => esc_html__( 'Add your contact form here', 'bdevs-elementor' ),
				'label_block' => true,
			]
		);

		$this->end_controls_section();

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
			'show_wave',
			[
				'label'   => esc_html__( 'Show Wave Animation', 'bdevs-elementor' ),
				'type'    => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);	

		$this->end_controls_section();

	}

	public function render() {

		$settings  = $this->get_settings_for_display();
		extract($settings);
		?>
		<section id="contact" class="section-all">
            <!-- container start -->
            <div class="container-fluid">
                <!-- row start -->
                <div class="row">
                    <!-- parallax wrapper start -->
                    <div class="parallax parallax-all parallax-contact" data-parallax-speed="0.75">
                        <!-- parallax borders start -->
                        <div class="borders"></div>
                        <!-- parallax borders end -->
                        <!-- parallax overlay start -->
                        <div class="parallax-overlay"></div>
                        <!-- parallax overlay end -->
                        <!-- parallax content start -->
                        <div class="parallax-content">
                        	<?php if ( $settings['show_subheading'] ) : ?>
                            <!-- section subtitle start -->
                            <h2 class="hero-subheading">
                                <span><?php print wp_kses_post($settings['number']); ?></span><?php print wp_kses_post($settings['subheading']); ?>
                            </h2>
                            <!-- section subtitle end -->
                        	<?php endif; ?>
                            <!-- divider start -->
                            <div class="divider-m"></div>
                            <!-- divider end -->
                            <!-- section title start -->
                            <h2 class="hero-heading">
                                <?php print wp_kses_post($settings['heading']); ?>
                            </h2>
                            <!-- section title end -->
                            <!-- divider start -->
                            <div class="divider-l"></div>
                            <!-- divider end -->
                            <!-- contact info start -->
                            <div class="contact-info-wrapper">
                            	<?php $i=0;
				                    foreach ( $settings['tabs'] as $item ) : 
				                    $i++;
								?>
								<?php if($i % 3 == 2){ ?>
                                <!-- col start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="contact-info-description">
                                        <i class="<?php print wp_kses_post($item['icon']); ?> contact-info-description-img large"></i> <span class="contact-info-text"><?php print wp_kses_post($item['contact_info']); ?></span>
                                    </div>
                                    <!-- divider start -->
                                    <div class="divider-m visible-mobile-devices"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            	<?php }else{ ?>
                            	<!-- col start -->
                                <div class="col-md-4 col-sm-12">
                                    <div class="contact-info-description">
                                        <i class="<?php print wp_kses_post($item['icon']); ?> contact-info-description-img"></i> <span class="contact-info-text"><?php print wp_kses_post($item['contact_info']); ?></span>
                                    </div>
                                    <!-- divider start -->
                                    <div class="divider-m visible-mobile-devices"></div>
                                    <!-- divider end -->
                                </div>
                                <!-- col end -->
                            	<?php } ?>
                           	 	<?php endforeach; ?>
                                <!-- col start -->
                                <div class="col-md-12 col-sm-12">
                                    <!-- divider start -->
                                    <div class="divider-l"></div>
                                    <!-- divider end -->
                                    <div class="contact-info-description">
                                        <!-- button start -->
                                        <div class="more-wraper-center contact-modal-launcher">
                                            <div class="more-button-bg-center more-button-circle"></div>
                                            <div class="more-button-txt-center">
                                                <span><?php print wp_kses_post($settings['button']); ?></span>
                                            </div>
                                        </div>
                                        <!-- button end -->
                                    </div>
                                </div>
                                <!-- col end -->
                            </div>
                            <!-- contact info end -->
                        </div>
                        <!-- parallax content end -->
                        <?php if ( $settings['show_wave'] ) : ?>
                        <!-- waves start -->
                        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                            <defs>
                                <path id="gentle-wave-5" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                            </defs>
                            <g class="parallax">
                                <use xlink:href="#gentle-wave-5" x="48" y="0" fill="rgba(255, 255, 255, 0.7" />
                                <use xlink:href="#gentle-wave-5" x="48" y="3" fill="rgba(255, 255, 255, 0.5)" />
                                <use xlink:href="#gentle-wave-5" x="48" y="5" fill="rgba(255, 255, 255, 0.3)" />
                                <use xlink:href="#gentle-wave-5" x="48" y="7" fill="#fff" />
                            </g>
                        </svg>
                        <!-- waves end -->
                    	<?php endif; ?>
                    </div>
                    <!-- parallax wrapper end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </section>

		<!-- contact modal start -->
        <div class="contact-modal">
            <!-- container start -->
            <div class="container">
                <!-- center container start -->
                <div class="center-container-contact-modal">
                    <!-- center block start -->
                    <div class="center-block-contact-modal">
                        <!-- row start -->
                        <div class="row center-block-contact-modal-padding-top">
                            <div class="col-lg-12">
                            	<?php if ( $settings['show_subheading'] ) : ?>
                                <!-- section subtitle start -->
                                <h2 class="hero-subheading hero-subheading-dark">
                                    <span><?php print wp_kses_post($settings['number_2']); ?></span><?php print wp_kses_post($settings['subheading_2']); ?>
                                </h2>
                                <!-- section subtitle end -->
                            	<?php endif; ?>
                                <!-- divider start -->
                                <div class="divider-m"></div>
                                <!-- divider end -->
                                <!-- section title start -->
                                <h2 class="hero-heading hero-heading-dark">
                                    <?php print wp_kses_post($settings['heading_2']); ?>
                                </h2>
                                <!-- section title end -->
                                <!-- divider start -->
                                <div class="divider-l"></div>
                                <!-- divider end -->
                            </div>
                        </div>
                        <!-- row end -->
                        <!-- row start -->
                        <div class="row contact-modal-wrapper">
                            <!-- col start -->
                            <div>
                                <!-- contact form start -->
                                <div id="contact-form">
                                    <?php print do_shortcode(html_entity_decode( $settings['shortcode'] )); ?>
                                </div>
                                <!-- contact form end -->
                            </div>
                            <!-- col end -->
                        </div>
                        <!-- row end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->
                        <!-- row start -->
                        <div class="row center-block-contact-modal-padding-bottom">
                            <div class="col-lg-12">
                                <!-- contact modal closer start -->
                                <div class="contact-modal-closer">
                                    <span class="ion-close"></span>
                                </div>
                                <!-- contact modal closer end -->
                            </div>
                        </div>
                        <!-- row end -->
                    </div>
                    <!-- center block end -->
                </div>
                <!-- center container end -->
            </div>
            <!-- container end -->
        </div>
        <!-- contact modal end -->
	<?php
	}

}