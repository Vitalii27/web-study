<?php

/**
 * WordPress theme settingппs API class
 *
 */
if (!class_exists('Homeful_Settings_API')):
	class Homeful_Settings_API
	{

		private $settings_api;

		function __construct()
		{
			$this->settings_api = new WeDevs_Settings_API;

			add_action('admin_init', array($this, 'admin_init'));
			add_action('admin_menu', array($this, 'admin_menu'));
		}

		function admin_init()
		{

			//set the settings
			$this->settings_api->set_sections($this->get_settings_sections());
			$this->settings_api->set_fields($this->get_settings_fields());

			//initialize settings
			$this->settings_api->admin_init();
		}

		function admin_menu()
		{
			add_options_page('Theme Settings', 'Theme Settings', 'delete_posts', 'settings_api_test', array(
				$this,
				'theme_setting_page'
			));
		}

		function get_settings_sections()
		{
			$sections = array(

				array(
					'id' => 'homeful_socials',
					'title' => __('Socials Settings', 'homeful')
				), array(
					'id' => 'footer',
					'title' => __('Footer Settings', 'homeful')
				), array(
					'id' => 'instagram_block',
					'title' => __('Instagram Settings', 'homeful')
				)


			);

			return $sections;
		}

		/**
		 * Returns all the settings fields
		 *
		 * @return array settings fields
		 */
		function get_settings_fields()
		{
			$settings_fields = array(

				'homeful_socials' => array(

					array(
						'name' => 'footer_facebook_icon',
						'label' => __('Facebook icon', 'homeful'),
						'type' => 'text',
						'default' => 'fa-facebook'
					),
					array(
						'name' => 'footer_facebook_link',
						'label' => __('Facebook link', 'homeful'),
						'type' => 'text',
						'default' => ''
					),
					array(
						'name' => 'footer_twitter_icon',
						'label' => __('Twitter icon', 'homeful'),
						'type' => 'text',
						'default' => 'fa-twitter'
					),
					array(
						'name' => 'footer_twitter_link',
						'label' => __('Twitter link', 'homeful'),
						'type' => 'text',
						'default' => ''
					),
					array(
						'name' => 'footer_pinterest_icon',
						'label' => __('Pinterest icon', 'homeful'),
						'type' => 'text',
						'default' => 'fa-pinterest-p'
					),
					array(
						'name' => 'footer_pinterest_link',
						'label' => __('Pinterest link', 'homeful'),
						'type' => 'text',
						'default' => ''
					),
					array(
						'name' => 'footer_instagram_icon',
						'label' => __('Instagram icon', 'homeful'),
						'type' => 'text',
						'default' => 'fa-instagram'
					),
					array(
						'name' => 'footer_instagram_link',
						'label' => __('Instagram link', 'homeful'),
						'type' => 'text',
						'default' => ''
					),


				),
				'footer' => array(
					array(
						'name' => 'footer_logo',
						'label' => __('Footer logo', 'homeful'),
						'type' => 'file',
						'default' => '',
					),
					array(
						'name' => 'footer_contact_title',
						'label' => __('Title Phone Block', 'homeful'),
						'type' => 'text',
						'default' => '',
					),
					array(
						'name' => 'footer_contact_tel',
						'label' => __('Tel', 'homeful'),
						'type' => 'text',
						'default' => '',
					),
					array(
						'name' => 'footer_contact_email',
						'label' => __('Email', 'homeful'),
						'type' => 'text',
						'default' => '',
					),		array(
						'name' => 'footer_contact_address',
						'label' => __('Title address', 'homeful'),
						'type' => 'text',
						'default' => '',
					),	array(
						'name' => 'footer_contact_address_text',
						'label' => __('Address', 'homeful'),
						'type' => 'text',
						'default' => '',
					),array(
						'name' => 'footer_copy_left',
						'label' => __('Copy left', 'homeful'),
						'type' => 'text',
						'default' => '',
					),array(
						'name' => 'footer_copy_right',
						'label' => __('Copy right', 'homeful'),
						'type' => 'text',
						'default' => '',
					)
				),
				'instagram_block' => array(
					array(
						'name'    => 'instagram_user',
						'label'   => __( 'Instagram user name', 'homeful' ),
						'type'    => 'text',
						'default' => ''
					),
					array(
						'name'    => 'instagram_token_id',
						'label'   => __( 'Instagram token id', 'homeful' ),
						'type'    => 'text',
						'default' => ''
					),
				)
			);

			return $settings_fields;
		}


		function theme_setting_page()
		{
			echo '<div class="wrap">';

			$this->settings_api->show_navigation();
			$this->settings_api->show_forms();

			echo '</div>';
		}

		/**
		 * Get all the pages
		 *
		 * @return array page names with key value pairs
		 */
		function get_pages()
		{
			$pages = get_pages();
			$pages_options = array();
			if ($pages) {
				foreach ($pages as $page) {
					$pages_options[$page->ID] = $page->post_title;
				}
			}

			return $pages_options;
		}

	}

	new Homeful_Settings_API();

endif;