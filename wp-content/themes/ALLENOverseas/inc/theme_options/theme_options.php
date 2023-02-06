<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make('theme_options', __('Theme Options'))
    ->set_icon('dashicons-admin-settings')
    ->add_tab(__('Overseas Support Info'), array(
        Field::make('complex', 'support_contact', 'Support Contact')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'country_name', 'Country Name')->set_width(50),
                Field::make('text', 'contact_no', 'Contact No')->set_width(50),
                Field::make('text', 'email_address', 'Email Id')->set_width(50),
                Field::make('text', 'popup_link', 'Popup Link')->set_width(50),
            )),
    ))
    ->add_tab(__('Manage Popup & Registration'), array(
        Field::make('text', 'crb_email3', 'Notification Email'),
        Field::make('text', 'crb_phone3', 'Phone Number'),
    ))
    ->add_tab(__('API Url'), array(
        Field::make('text', 'crb_email4', 'Notification Email'),
        Field::make('text', 'crb_phone4', 'Phone Number'),
    ))
    ->add_tab(__('Footer'), array(
        Field::make('text', 'label_ft_menu_1', 'Footer Menu 1 label')->set_width(25),
        Field::make('text', 'label_ft_menu_2', 'Footer Menu 2 label')->set_width(25),
        Field::make('text', 'label_ft_menu_3', 'Footer Menu 3 label')->set_width(25),
        Field::make('text', 'label_ft_menu_4', 'Footer Menu 4 label')->set_width(25),
        Field::make('text', 'label_ft_menu_5', 'Footer Menu 5 label')->set_width(25),
        Field::make('text', 'label_ft_menu_6', 'Footer Menu 6 label')->set_width(25),
        Field::make('text', 'label_ft_menu_7', 'Footer Menu 7 label')->set_width(25),
        Field::make('text', 'label_ft_menu_8', 'Footer Menu 8 label')->set_width(25),
        Field::make('text', 'footer_email', 'Footer Email Address')->set_width(50),
        Field::make('text', 'footer_phone', 'Footer Contact Number')->set_width(50),

        Field::make('complex', 'footer_address', 'Footer Address')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'address_title', 'Address Title')->set_width(50),
                Field::make('textarea', 'address_description', 'Address Description')->set_width(50),
            )),
        Field::make('complex', 'social_menu', 'Social Menu')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'social', 'Social Media')->set_width(25),
                Field::make('text', 'icon_class', 'Icon Class')->set_width(25),
                Field::make('text', 'icon_link', 'Icon link')->set_width(25),
                Field::make('checkbox', 'icon_target', 'Target Blank')->set_width(25),
            )),
        Field::make('complex', 'app_links', 'Our Apps')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'app_image', 'App Icon')->set_width(20)->set_value_type('url'),
                Field::make('text', 'app_alt', 'App Alt Value')->set_width(20),
                Field::make('text', 'app_link', 'App link')->set_width(60),
            )),
        Field::make('complex', 'payment_partners', 'Our Payment Partners')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'pp_image', 'Payment Partners Icon')->set_width(20)->set_value_type('url'),
                Field::make('text', 'pp_alt', 'Payment Partners Alt Value')->set_width(20),
                Field::make('text', 'pp_link', 'Payment Partners link')->set_width(60),
            )),
        Field::make('text', 'footer_copyright', 'Footer Copyright'),


    ));
