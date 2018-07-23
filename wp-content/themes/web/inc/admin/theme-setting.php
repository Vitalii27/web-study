<?php

/**
 * WordPress theme settingппs API class
 *
 */
if (!class_exists('Web_Settings_API')):
    class Web_Settings_API
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
                    'id' => 'footer',
                    'title' => __('Футер', 'Web')
                ),
                array(
                    'id' => 'sidebar',
                    'title' => __('Сайтбар', 'Web')
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


                'footer' => array(
                    array(
                        'name' => 'footer_title',
                        'label' => __('Типы сайтов (заголовок)', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_elem',
                        'label' => __('Тип сайта1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link',
                        'label' => __('Ссылка1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_elem2',
                        'label' => __('Тип сайта2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link2',
                        'label' => __('Ссылка2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_elem3',
                        'label' => __('Тип сайта3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link3',
                        'label' => __('Ссылка3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_elem4',
                        'label' => __('Тип сайта4', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link4',
                        'label' => __('Ссылка4', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),

                    array(
                        'name' => 'footer_elem5',
                        'label' => __('Тип сайта5', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link5',
                        'label' => __('Ссылка5', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_elem6',
                        'label' => __('Тип сайта6', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link6',
                        'label' => __('Ссылка6', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_title2',
                        'label' => __('Услуги (заголовок)', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'footer_elem_service',
                        'label' => __('Услуга1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_service',
                        'label' => __('Ссылка1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_elem_service2',
                        'label' => __('Услуга2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_service2',
                        'label' => __('Ссылка2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),

                    array(
                        'name' => 'footer_elem_service3',
                        'label' => __('Услуга3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_service3',
                        'label' => __('Ссылка3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_elem_service4',
                        'label' => __('Услуга4', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_service4',
                        'label' => __('Ссылка4', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),

                    array(
                        'name' => 'footer_elem_service5',
                        'label' => __('Услуга5', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_service5',
                        'label' => __('Ссылка5', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),

                    array(
                        'name' => 'footer_elem_service6',
                        'label' => __('Услуга6', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_service6',
                        'label' => __('Ссылка6', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_title3',
                        'label' => __('О компании (заголовок)', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_about',
                        'label' => __('Страница1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_about',
                        'label' => __('Ссылка1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_about2',
                        'label' => __('Страница2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_about2',
                        'label' => __('Ссылка2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),

                    array(
                        'name' => 'footer_about3',
                        'label' => __('Страница3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_about3',
                        'label' => __('Ссылка3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_about4',
                        'label' => __('Страница4', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_about4',
                        'label' => __('Ссылка4', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_about5',
                        'label' => __('Страница5', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_about5',
                        'label' => __('Ссылка5', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_about6',
                        'label' => __('Страница6', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_link_about6',
                        'label' => __('Ссылка6', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_title_contact',
                        'label' => __('КОНТАКТНАЯ ИНФОРМАЦИЯ (заголовок)', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                    array(
                        'name' => 'footer_tel',
                        'label' => __('Телефон1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'footer_tel2',
                        'label' => __('Телефон2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'footer_address',
                        'label' => __('Адрес', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'footer_email1',
                        'label' => __('Email-1', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'footer_email2',
                        'label' => __('Email-2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ),
                ),
                'sidebar' => array(
                    array(
                        'name' => 'sidebar_link',
                        'label' => __('Ссылка', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_img',
                        'label' => __('Изображение', 'Web'),
                        'type' => 'file',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_text',
                        'label' => __('Текст', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_link2',
                        'label' => __('Ссылка2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_img2',
                        'label' => __('Изображение2', 'Web'),
                        'type' => 'file',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_text2',
                        'label' => __('Текст2', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_link3',
                        'label' => __('Ссылка3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_img3',
                        'label' => __('Изображение3', 'Web'),
                        'type' => 'file',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_text3',
                        'label' => __('Текст3', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_link4',
                        'label' => __('Ссылка4', 'Web'),
                        'type' => 'text',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_img4',
                        'label' => __('Изображение4', 'Web'),
                        'type' => 'file',
                        'default' => '',
                    ), array(
                        'name' => 'sidebar_text4',
                        'label' => __('Текст4', 'Web'),
                        'type' => 'text',
                        'default' => '',
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

    new Web_Settings_API();

endif;