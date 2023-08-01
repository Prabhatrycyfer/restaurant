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
class BdevsMenu extends \Elementor\Widget_Base {

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
		return 'bdevs-menu';
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
		return __( 'Menu', 'bdevs-elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Bdevs Menu widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-menu-toggle';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Bdevs Menu widget belongs to.
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
		return [ 'Menu' ];
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
				'label' => esc_html__( 'Menu', 'bdevs-elementor' ),
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

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_item',
			[
				'label' => esc_html__( 'Title', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'title',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_price',
			[
				'label' => esc_html__( 'Tab 01', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs1',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'title_1',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'price_1',
						'label'       => esc_html__( 'Price', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Price' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'description_1',
						'label'       => esc_html__( 'Description', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Description' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_price2',
			[
				'label' => esc_html__( 'Tab 02', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs2',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'title_2',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'price_2',
						'label'       => esc_html__( 'Price', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Price' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'description_2',
						'label'       => esc_html__( 'Description', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Description' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_price3',
			[
				'label' => esc_html__( 'Tab 03', 'bdevs-elementor' ),
			]
		);

		$this->add_control(
			'tabs3',
			[
				'label' => esc_html__( 'Items', 'bdevs-elementor' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => [
					[
						'name'        => 'title_3',
						'label'       => esc_html__( 'Title', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Title' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'price_3',
						'label'       => esc_html__( 'Price', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXT,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Price' , 'bdevs-elementor' ),
						'label_block' => true,
					],
					[
						'name'        => 'description_3',
						'label'       => esc_html__( 'Description', 'bdevs-elementor' ),
						'type'        => Controls_Manager::TEXTAREA,
						'dynamic'     => [ 'active' => true ],
						'default'     => esc_html__( 'Description' , 'bdevs-elementor' ),
						'label_block' => true,
					],
				],
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

		$this->end_controls_section();

	}

	public function render() {
		$settings  = $this->get_settings_for_display();
		extract($settings);
		?>

		<!-- works start -->
        <section id="works" class="section-all bg-dark">
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
                <!-- divider start -->
                <div class="divider-l"></div>
                <!-- divider end -->
                <!-- row start -->   
                <div class="row">
                    <!-- col start -->
                    <div class="col-lg-12">
                        <!-- items selector start -->
                        <div class="item-selector">
                        	<?php $i=0;
			                    foreach ( $settings['tabs'] as $item ) : 
			                    $i++;
							?>
                            <a href="#" class="item-button" data-target="menu-<?php echo $i;  ?>"><?php print wp_kses_post($item['title']); ?></a>
                        	<?php endforeach; ?>
                        </div>
                        <!-- items selector end -->
                        <!-- divider start -->
                        <div class="divider-l"></div>
                        <!-- divider end -->

                        <!-- items group 1 start -->
                        <div class="menu menu-visible" id="menu-1">
                        	<?php 
			                    foreach ( $settings['tabs1'] as $item ) : 
			                    
							?>
                            <div class="item">
                                <div class="item-wrapper">
                                    <!-- section title start -->
                                    <h3 class="item-name"><?php print wp_kses_post($item['title_1']); ?></h3>
                                    <span class="item-divider"></span>
                                    <span class="item-price"><?php print wp_kses_post($item['price_1']); ?></span>
                                    <!-- section title end -->
                                </div>
                                <!-- divider start -->
                                <div class="divider-m"></div>
                                <!-- divider end -->
                                <!-- section txt start -->
                                <p class="item-description"><?php print wp_kses_post($item['description_1']); ?></p>
                                <!-- section txt end -->
                            </div>
                        	<?php endforeach; ?>
                        </div>
                        <!-- items group 1 end -->
                        <!-- items group 2 start -->
                        <div class="menu" id="menu-2">
                            <?php 
			                    foreach ( $settings['tabs2'] as $item ) : 
			                    
							?>
                            <div class="item">
                                <div class="item-wrapper">
                                    <!-- section title start -->
                                    <h3 class="item-name"><?php print wp_kses_post($item['title_2']); ?></h3>
                                    <span class="item-divider"></span>
                                    <span class="item-price"><?php print wp_kses_post($item['price_2']); ?></span>
                                    <!-- section title end -->
                                </div>
                                <!-- divider start -->
                                <div class="divider-m"></div>
                                <!-- divider end -->
                                <!-- section txt start -->
                                <p class="item-description"><?php print wp_kses_post($item['description_2']); ?></p>
                                <!-- section txt end -->
                            </div>
                        	<?php endforeach; ?>
                        </div>
                        <!-- items group 2 end -->
                        <!-- items group 3 start -->
                        <div class="menu" id="menu-3">
                            <?php 
			                    foreach ( $settings['tabs3'] as $item ) : 
			                    
							?>
                            <div class="item">
                                <div class="item-wrapper">
                                    <!-- section title start -->
                                    <h3 class="item-name"><?php print wp_kses_post($item['title_3']); ?></h3>
                                    <span class="item-divider"></span>
                                    <span class="item-price"><?php print wp_kses_post($item['price_3']); ?></span>
                                    <!-- section title end -->
                                </div>
                                <!-- divider start -->
                                <div class="divider-m"></div>
                                <!-- divider end -->
                                <!-- section txt start -->
                                <p class="item-description"><?php print wp_kses_post($item['description_3']); ?></p>
                                <!-- section txt end -->
                            </div>
                        	<?php endforeach; ?>
                        </div>
                        <!-- items group 3 end -->
                    </div>
                    <!-- col end -->
                </div>
                <!-- row end -->
                <!-- divider start -->
                <div class="divider-xl"></div>
                <!-- divider end -->
            </div>
            <!-- container end -->
        </section>

		
	<?php
	}

}