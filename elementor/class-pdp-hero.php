<?php

class PDP_Hero extends \Elementor\Widget_Base {
	public function get_name(){
		return 'pdp_hero';
	}

	public function get_title(){
		return __( 'PDP Hero', 'pdp' );
	}

	public function get_icon(){
		return 'fa fa-code';
	}

	public function get_categories(){
		return ['general'];
	}

	protected function _register_controls(){
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Контент', 'pdp' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image',
			[
				'label'         => __( 'Изображение', 'pdp' ),
				'type'          => \Elementor\Controls_Manager::MEDIA,
				'default'       => [
					'url'           => \Elementor\Utils::get_placeholder_image_src(),
				]
			]
		);

		$this->add_control(
			'title',
			[
				'label'         => __( 'Заголовок', 'pdp' ),
				'type'          => \Elementor\Controls_Manager::TEXT,
				'placeholder' 	=> __( 'Введите заголовок', 'pdp' )
			]
		);

		$this->add_control(
			'subtitle',
			[
				'label' 		=> __( 'Подзаголовок', 'pdp' ),
				'type' 			=> \Elementor\Controls_Manager::TEXT,
				'placeholder' 	=> __( 'Введите подзаголовок', 'pdp' ),
			]
		);

		$this->add_control(
			'btn_title',
			[
				'label' 		=> __( 'Заголовок кнопки', 'pdp' ),
				'type' 			=> \Elementor\Controls_Manager::TEXT,
				'placeholder' 	=> __( 'Введите заголовок кнопки', 'pdp' ),
			]
		);

		$this->add_control(
			'btn_link',
			[
				'label' 		=> __( 'Ссылка кнопки', 'pdp' ),
				'type' 			=> \Elementor\Controls_Manager::TEXT,
				'placeholder' 	=> __( 'Введите ссылку кнопки', 'pdp' ),
			]
		);

		$this->end_controls_section();
	}

	protected function render(){
		$settings = $this->get_settings_for_display();

		$image = wp_get_attachment_image( $settings['image']['id'], 'full' );

		echo "
			<div class='hero'>
            	<div class='hero__content'>
                	<div class='hero__subheading'>{$settings['subtitle']}</div>
                	<h1 class='hero__heading'>{$settings['title']}</h1>
                        
		";

		if( $settings['btn_title'] && $settings['btn_link'] ){
			echo "<a href='{$settings['btn_link']}' class='button hero__action'>{$settings['btn_title']}</a>";
		}

		echo "
                </div>
                {$image}
            </div>
        ";
	}

	protected function _content_template(){

	}
}