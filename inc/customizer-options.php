<?php
/**
 * Defines customizer options
 *
 * @package utk
 */
// remove ueless standart features
function remove_customizer_settings( $wp_customize ) {
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
}
add_action( 'customize_register', 'remove_customizer_settings', 20 );

function utk_options() {

	// Theme defaults
	$primary_color = '#fabe1a';
	$secondary_color = '#222';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;


	//
	// $section = 'contacts';

	// $setions[] =  array(
	// 	'id' => $section,
	// 	'title' =>__('contacts','demo'),
	// 	'priority' => '30',
	// 	'description' => __( 'Example section description.', 'demo' )
	// 	);
	// $options['contacts'] = array(
	// 	'id' => 'contacts',
	// 	'label'   => __( 'upload', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'upload',
	// 	'default' => '',
	// );



	// Logo
	// $section = 'logo';

	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Image Example', 'demo' ),
	// 	'priority' => '30',
	// 	'description' => __( 'Example section description.', 'demo' )
	// );

	// $options['logo'] = array(
	// 	'id' => 'logo',
	// 	'label'   => __( 'Logo', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'image',
	// 	'default' => ''
	// );

	// // File Upload
	// $section = 'upload';

	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'File Upload Example', 'demo' ),
	// 	'priority' => '30',
	// 	'description' => __( 'Example section description.', 'demo' )
	// );

	// $options['upload'] = array(
	// 	'id' => 'upload',
	// 	'label'   => __( 'upload', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'upload',
	// 	'default' => '',
	// );

	// // Colors
	// $section = 'colors';

	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Colors', 'demo' ),
	// 	'priority' => '80'
	// );

	// $options['primary-color'] = array(
	// 	'id' => 'primary-color',
	// 	'label'   => __( 'Primary Color', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'color',
	// 	'default' => $primary_color,
	// );

	// $options['secondary-color'] = array(
	// 	'id' => 'secondary-color',
	// 	'label'   => __( 'Secondary Color', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'color',
	// 	'default' => $secondary_color,
	// );

	// $options['border'] = array(
	// 	'id' => 'border',
	// 	'label'   => __( 'Border Color', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'color',
	// 	'default' => $primary_color,
	// );

	// // Typography
	// $section = 'typography';
	// $font_choices = customizer_library_get_font_choices();

	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Typography', 'demo' ),
	// 	'priority' => '80'
	// );

	// $options['primary-font'] = array(
	// 	'id' => 'primary-font',
	// 	'label'   => __( 'Primary Font', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'select',
	// 	'choices' => $font_choices,
	// 	'default' => 'Monoton'
	// );

	// $options['secondary-font'] = array(
	// 	'id' => 'secondary-font',
	// 	'label'   => __( 'Secondary Font', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'select',
	// 	'choices' => $font_choices,
	// 	'default' => 'Merriweather'
	// );

	// // More Examples
	// $section = 'examples';

	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'More Examples', 'demo' ),
	// 	'priority' => '90'
	// );

	// $options['example-text'] = array(
	// 	'id' => 'example-text',
	// 	'label'   => __( 'Example Text Input', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// );

	// $options['example-url'] = array(
	// 	'id' => 'example-url',
	// 	'label'   => __( 'Example URL Input', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'url',
	// );

	// $options['example-checkbox'] = array(
	// 	'id' => 'example-checkbox',
	// 	'label'   => __( 'Example Checkbox', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'checkbox',
	// 	'default' => 0,
	// );

	// $choices = array(
	// 	'choice-1' => 'Choice One',
	// 	'choice-2' => 'Choice Two',
	// 	'choice-3' => 'Choice Three'
	// );

	// $options['example-select'] = array(
	// 	'id' => 'example-select',
	// 	'label'   => __( 'Example Select', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'select',
	// 	'choices' => $choices,
	// 	'default' => 'choice-1'
	// );

	// $options['example-radio'] = array(
	// 	'id' => 'example-radio',
	// 	'label'   => __( 'Example Radio', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'radio',
	// 	'choices' => $choices,
	// 	'default' => 'choice-1'
	// );

	// $options['example-textarea'] = array(
	// 	'id' => 'example-textarea',
	// 	'label'   => __( 'Example Textarea', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'textarea',
	// 	'default' => __( 'Example textarea text.', 'demo'),
	// );

	// $options['example-range'] = array(
	// 	'id' => 'example-range',
	// 	'label'   => __( 'Example Range Input', 'demo' ),
	// 	'section' => $section,
	// 	'type'    => 'range',
	// 	'input_attrs' => array(
	//         'min'   => 0,
	//         'max'   => 10,
	//         'step'  => 1,
	//         'style' => 'color: #0a0',
	// 	)
	// );

	// Panel
	$panel = 'utk-theme';

	$panels[] = array(
		'id' => $panel,
		'title' => __( 'Настройки темы utk', 'utk' ),
		'priority' => '100'
	);

	$section = 'panel-section1';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Контакты', 'utk' ),
		'priority' => '10',
		'panel' => $panel
	);

	$options['panel-text-tel'] = array(
		'id' => 'panel-text-tel',
		'label'   => __( 'Телефон', 'utk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( '+380503942811', 'utk')
	);
	$options['panel-text-email'] = array(
		'id' => 'panel-text-email',
		'label'   => __( 'Email', 'utk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'admin@utk.net.ua', 'utk')
	);
	$options['panel-text-address'] = array(
		'id' => 'panel-text-address',
		'label'   => __( 'Адрес', 'utk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'вулиця Автомобільна, 2, Миколаїв, Миколаївська область, 54007', 'utk')
	);
	$options['panel-text-reqiusits'] = array(
		'id' => 'panel-text-requisits',
		'label'   => __( 'Реквизиты', 'utk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'ЄДРПОУ 38436360, св. ПДВ № 200107129, ІПН. 384363614231 Р/р. 26002053207852 в ПАТ КБ «Приватбанк» , МФО 326610', 'utk')
	);
	// $options['panel-text-gmapsapi'] = array(
	// 	'id' => 'panel-text-gmapsapi',
	// 	'label'   => __( 'Google Maps API key', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'AIzaSyC6Am2xjvlTJqFWvrM6xp7DZ3zMDNmlyRw', 'utk')
	// );
	// $options['panel-text-gmapsplace'] = array(
	// 	'id' => 'panel-text-gmapsplace',
	// 	'label'   => __( 'Google Place key', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'ChIJeYcUul7LxUARTDZq_pTmtp4', 'utk')
	// );
	// $section = 'panel-section2';
	//
	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Email', 'utk' ),
	// 	'priority' => '11',
	// 	'panel' => $panel
	// );
	//
	// $options['email-panel-text'] = array(
	// 	'id' => 'email-panel-text',
	// 	'label'   => __( 'Email в футере', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'utk@gmail.com', 'utk')
	// );
	// $options['email-panel-text2'] = array(
	// 	'id' => 'email-panel-text2',
	// 	'label'   => __( 'Email директора', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'utk@gmail.com', 'utk')
	// );
	// $options['email-panel-text3'] = array(
	// 	'id' => 'email-panel-text3',
	// 	'label'   => __( 'Email на странице контактов', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'director@utk.com', 'utk')
	// );
	//
	// $section = 'panel-section3';
	//
	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Адрес', 'utk' ),
	// 	'priority' => '12',
	// 	'panel' => $panel
	// );
	//
	// $options['address-panel-text'] = array(
	// 	'id' => 'address-panel-text',
	// 	'label'   => __( 'Адрес офиса', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'ул. Автомобильная 2, Николаев, Николаевская область', 'utk')
	// );

	// $section = 'panel-section4';
	//
	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Ccылки на соцсети', 'utk' ),
	// 	'priority' => '13',
	// 	'panel' => $panel
	// );

	// $options['social-text1'] = array(
	// 	'id' => 'social-text1',
	// 	'label'   => __( 'Название соцсети', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'Fb', 'utk')
	// );

	// $options['fb-url'] = array(
	// 	'id' => 'fb-url',
	// 	'label'   => __( 'Facebook URL', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'url',
	// 	'default' => __( 'https://www.facebook.com/utk.digirtal/', 'utk')
	// );

	// $options['social-image1'] = array(
	// 	'id' => 'social-image1',
	// 	'label'   => __( 'Иконка', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'image',
	// 	'default' => __( '../wp-content/themes/utk/static/images/fb.png', 'utk')
	// );

	// $options['social-text2'] = array(
	// 	'id' => 'social-text2',
	// 	'label'   => __( 'Название соцсети', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'Vk', 'utk')
	// );

	// $options['vk-url'] = array(
	// 	'id' => 'vk-url',
	// 	'label'   => __( 'Vkontakte URL', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'url',
	// 	'default' => __( 'https://vk.com/utk_digital', 'utk')
	// );

	// $options['social-image2'] = array(
	// 	'id' => 'social-image2',
	// 	'label'   => __( 'Иконка', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'image',
	// 	'default' => __( './wp-content/themes/utk/static/images/vk.png', 'utk')
	// );

	// $options['social-text3'] = array(
	// 	'id' => 'social-text3',
	// 	'label'   => __( 'Название соцсети', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'INS', 'utk')
	// );

	// $options['ins-url'] = array(
	// 	'id' => 'ins-url',
	// 	'label'   => __( 'Instagram URL', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'url',
	// 	'default' => __( 'https://www.instagram.com/utk_digital/', 'utk')
	// );

	// $options['social-image3'] = array(
	// 	'id' => 'social-image3',
	// 	'label'   => __( 'Иконка', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'image',
	// 	'default' => __( './wp-content/themes/utk/static/images/ins.png', 'utk')
	// );

	// $options['social-text4'] = array(
	// 	'id' => 'social-text4',
	// 	'label'   => __( 'Название соцсети', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'Be', 'utk')
	// );

	// $options['be-url'] = array(
	// 	'id' => 'be-url',
	// 	'label'   => __( 'Behance URL', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'url',
	// 	'default' => __( 'https://www.behance.net/utk', 'utk')
	// );

	// $options['social-image4'] = array(
	// 	'id' => 'social-image4',
	// 	'label'   => __( 'Иконка', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'image',
	// 	'default' => __( './wp-content/themes/utk/static/images/be.png', 'utk')
	// );

	// $section = 'panel-section5';
	//
	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Skype ID', 'utk' ),
	// 	'priority' => '13',
	// 	'panel' => $panel
	// );
	//
	// 	$options['skype-id'] = array(
	// 	'id' => 'skype-id',
	// 	'label'   => __( 'Skype ID', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'largo20041989', 'utk')
	// );
	//
	// $section = 'panel-section6';
	//
	// $sections[] = array(
	// 	'id' => $section,
	// 	'title' => __( 'Параметры Mailchimp', 'utk' ),
	// 	'priority' => '13',
	// 	'panel' => $panel
	// );
	//
	// 	$options['mailchimp-baseurl'] = array(
	// 	'id' => 'mailchimp-baseurl',
	// 	'label'   => __( 'Mailchipm Base URL', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'url',
	// 	'default' => __( 'mc.us11.list-manage.com', 'utk')
	// );
	//
	// 	$options['mailchimp-uuid'] = array(
	// 	'id' => 'mailchimp-uuid',
	// 	'label'   => __( 'Mailchimp UUID', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'YOUR_UUID_GOES_HERE', 'utk')
	// );
	//
	// 	$options['mailhcimp-lid'] = array(
	// 	'id' => 'mailhcimp-lid',
	// 	'label'   => __( 'Mailchimp LID', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'text',
	// 	'default' => __( 'YOUR_LID_GOES_HERE', 'utk')
	// );

	// homepage panel
	$panel = 'utk-homepage';

	$panels[] = array(
		'id' => $panel,
		'title' => __( 'Главная страница', 'utk' ),
		'priority' => '10'
	);

	$section = 'utk-homepage-section1';

	$sections[] = array(
		'id' => $section,
		'title' => __( 'hero-section', 'utk' ),
		'priority' => '10',
		'panel' => $panel
	);

	$options['hero-section-header'] = array(
		'id' => 'hero-section-header',
		'label'   => __( 'Header', 'utk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'ЮЖНАЯ ТРАНСПОРТНАЯ КОМПАНИЯ', 'utk')
	);

	$options['hero-section-header-sup'] = array(
		'id' => 'hero-section-header-sup',
		'label'   => __( 'Header-sup', 'utk' ),
		'section' => $section,
		'type'    => 'text',
		'default' => __( 'КАЧЕСТВЕННАЯ И СВОЕВРЕМЕННАЯ ДОСТАВКА ВАШЕЙ ПРОДУКЦИИ', 'utk')
	);

	// TODO: DYNAMICLY GENERATED CSS FOR INCLUDE CSS STYLES WITH ADMIN PANEL

	// $options['hero-section-image'] = array(
	// 	'id' => 'social-image3',
	// 	'label'   => __( 'Background', 'utk' ),
	// 	'section' => $section,
	// 	'type'    => 'image',
	// 	'default' => __( './wp-content/themes/utk/static/images/ins.png', 'utk')
	// );

		// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'utk_options' );
