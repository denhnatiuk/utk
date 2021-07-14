<?php
/**
 * TGMPA
 *
 * @package utk
 * @since   1.0.0
 */
 // defined('ABSPATH') or die('Cheatin\' Uh?');

/**
 * Include TGM plugin activation class.
 *
 * @since 1.0.0
 */
require_once get_template_directory() . '/inc/tgmpa/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'utk_register_required_plugins' );

function utk_register_required_plugins() {
	$config = array(
		'id'           => 'utk',             // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'utk' ),
			'menu_title'                      => __( 'Install Plugins', 'utk' ),
			'installing'                      => __( 'Installing Plugin: %s', 'utk' ),
			'updating'                        => __( 'Updating Plugin: %s', 'utk' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'utk' ),
			'notice_can_install_required'     => _n_noop(
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'utk'
			),
			'notice_can_install_recommended'  => _n_noop(
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'utk'
			),
			'notice_ask_to_update'            => _n_noop(
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'utk'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'utk'
			),
			'notice_can_activate_required'    => _n_noop(
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'utk'
			),
			'notice_can_activate_recommended' => _n_noop(
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'utk'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'utk'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'utk'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'utk'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'utk' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'utk' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'utk' ),
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'utk' ),
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'utk' ),
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'utk' ),
			'dismiss'                         => __( 'Dismiss this notice', 'utk' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'utk' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'utk' ),

			'nag_type'                        => 'notice-info', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
	);
	$plugins = array(
		// array(
    //         'name' => esc_html__('Contact Form 7', 'utk'),
    //         'slug' => 'contact-form-7',
    //         'required' => false,
    //     ),
    //     array(
    //         'name' => esc_html__('Secondary title', 'utk'),
    //         'slug' => 'envato-market',
    //         'source' => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
    //         'external_url' => 'http://envato.github.io/wp-envato-market/',
    //         'required' => true,
    //     ),
        array(
        	'name'               => 'Secondary Title Plugin', // The plugin name.
        	'slug'               => 'secondary-title', // The plugin slug (typically the folder name).
        	'source'             => get_template_directory() . '/inc/tgmpa/plugins/secondary-title.zip', // The plugin source.
        	'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        	'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        	'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        	'external_url'       => 'https://downloads.wordpress.org/plugin/secondary-title.zip', // If set, overrides default API URL and points to an external URL.
        	'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
				array(
        	'name'               => 'WP Migrate DB', // The plugin name.
        	'slug'               => 'wp-migrate-db', // The plugin slug (typically the folder name).
        	'source'             => get_template_directory() . '/inc/tgmpa/plugins/wp-migrate-db.zip', // The plugin source.
        	'required'           => false, // If false, the plugin is only 'recommended' instead of required.
        	'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
        	'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        	'external_url'       => 'https://downloads.wordpress.org/plugin/wp-migrate-db.1.0.11.zip', // If set, overrides default API URL and points to an external URL.
        	'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        )
		// EXAMPLES:
		// array(
		// 	'name'               => 'TGM Example Plugin', // The plugin name.
		// 	'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
		// 	'source'             => get_template_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
		// 	'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		// 	'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		// 	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		// 	'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		// 	'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		// ),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		// array(
		// 	'name'         => 'TGM New Media Plugin', // The plugin name.
		// 	'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
		// 	'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
		// 	'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		// ),

		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		// array(
		// 	'name'      => 'Adminbar Link Comments to Pending',
		// 	'slug'      => 'adminbar-link-comments-to-pending',
		// 	'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
		// ),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		// array(
		// 	'name'      => 'BuddyPress',
		// 	'slug'      => 'buddypress',
		// 	'required'  => false,
		// ),

		// This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// 'wordpress-seo-premium'.
		// By setting 'is_callable' to either a function from that plugin or a class method
		// `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// recognize the plugin as being installed.
		// array(
		// 	'name'        => 'WordPress SEO by Yoast',
		// 	'slug'        => 'wordpress-seo',
		// 	'is_callable' => 'wpseo_init',
		// ),

	);
	tgmpa( $plugins, $config );
}
