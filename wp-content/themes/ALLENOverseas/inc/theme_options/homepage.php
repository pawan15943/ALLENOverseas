<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
// Home Page Utility
$template_path = 'home.php';
// Advantge Section
Container::make('post_meta', __('Section 1 : Add Advantage Section Content Here', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_1', 'Enable This Section'),
        Field::make('text', 'advantge_title', 'Enter Title'),
        Field::make('text', 'advantge_description', 'Enter Description'),

    ))
    ->add_fields(array(
        Field::make('complex', 'inner_text', 'Section Image')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'advantage_image', 'Advantage Icon')->set_width(25)->set_value_type('url'),
                Field::make('text', 'advantage_alt', 'Alt Value')->set_width(25),
                Field::make('text', 'advantage_inner_title', 'Advantage Title')->set_width(25),
                Field::make('textarea', 'advantage_description', 'Advantage Description')->set_width(25),
            )),
    ));

// Achivement Section
Container::make('post_meta', __('Section 2 : Our Achivements', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_2', 'Enable'),
        Field::make('text', 'achivement_title', 'Title'),
    ))
    ->add_fields(array(
        Field::make('complex', 'sec_2_content', 'Section Image')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'achivement_image', 'Achivements Icon')->set_width(25)->set_value_type('url'),
                Field::make('text', 'achivement_alt', 'Alt Value')->set_width(25),
                Field::make('text', 'achivement_count', 'Achivements Count')->set_width(25),
                Field::make('textarea', 'achivement_description', 'Achivements Description')->set_width(25),
            )),
    ));

// Our Top Rankers
Container::make('post_meta', __('Section 3 : Our Top Rankers', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_3', 'Enable'),
        Field::make('text', 'our_top_rankers_title', 'Title'),
        Field::make('text', 'our_top_rankers_description', 'Enter Description'),
    ))
        ->add_fields(array(
            Field::make('complex', 'sec_3_content', 'Section Image')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('image', 'our_top_rankers_st_image', 'Student Image')->set_width(25)->set_value_type('url'),
                    Field::make('text', 'our_top_rankers_alt', 'Alt Value')->set_width(25),
                    Field::make('text', 'our_top_rankers_st_name', 'Student Name')->set_width(25),
                    Field::make('textarea', 'our_top_rankers_exam', 'Exam Name')->set_width(25),
                )),

        ));


    Container::make('post_meta', __('Section 4 : Glance Session', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_4', 'Enable'),
        Field::make('text', 'glance_session_title', 'Title'),
    ))
    ->add_fields(array(
        Field::make('complex', 'sec_4_content', 'Section Image')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'glance_session_thumb', 'Student Image')->set_width(25)->set_value_type('url'),
                Field::make('text', 'glance_session_alt', 'Alt Value')->set_width(25),
                Field::make('text', 'glance_session_link', 'Link'),
            ))
    ));

Container::make('post_meta', __('Section 5 : Toppers Talk Show', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_5', 'Enable'),
    ))
    ->add_fields(array(
        Field::make('complex', 'sec_5_content', 'Section Image')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'toppes_talk_title', 'Title'),
                Field::make('text', 'toppes_talk_des', 'Small Description'),
                Field::make('image', 'toppes_talk_thumb', 'Student Image')->set_width(25)->set_value_type('url'),
                Field::make('text', 'toppes_talk_alt', 'Alt Value')->set_width(25),
                Field::make('text', 'toppes_talk_link', 'Link'),
                Field::make('textarea', 'toppes_talk_description', 'Description'),
            ))
    ));


Container::make('post_meta', __('Section 6 : Events', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_6', 'Enable'),
        Field::make('text', 's_6_title', 'Title'),
        Field::make('textarea', 's_6_description', 'Description'),
    ));

Container::make('post_meta', __('Section 7 : Centers', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_7', 'Enable'),
        Field::make('text', 's_7_title', 'Title'),
        Field::make('textarea', 's_7_description', 'Description'),
        Field::make('textarea', 'centers_description', 'Description'),
    ));

Container::make('post_meta', __('Section 8 : Add Physical Address', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_8', 'Enable'),
        Field::make('text', 's_8_title', 'Title'),
        Field::make('textarea', 's_8_description', 'Description'),
    ))
    ->add_fields(array(
        Field::make('complex', 'sec_8_content', 'Address')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('text', 'address_title', 'Address Title'),
                Field::make('textarea', 'address_info', 'Address '),
                Field::make('textarea', 'address_contact', 'Address Contact'),
            ))
    ));

Container::make('post_meta', __('Section 9 : Student Feedback', 'crb'))
    ->show_on_template($template_path)
    ->add_fields(array(
        Field::make('checkbox', 'enable_sec_9', 'Enable'),
        Field::make('text', 's_9_title', 'Title'),
        Field::make('textarea', 's_9_description', 'Description'),
    ))
    ->add_fields(array(
        Field::make('complex', 'sec_9_content', 'Address')
            ->set_layout('tabbed-horizontal')
            ->add_fields(array(
                Field::make('image', 'st_feedback_thumb', 'Student Image')->set_width(30)->set_value_type('url'),
                Field::make('text', 'st_feedback_alt', 'Alt Value')->set_width(30),
                Field::make('text', 'st_feedback_link', 'Link')->set_width(30),
            ))
    ))
    ->add_fields(array(
        Field::make('image', 'st_feedback_form_image', 'Form Image')->set_width(30)->set_value_type('url'),
        Field::make('text', 'st_feedback_form_alt', 'Alt Value')->set_width(30),
        Field::make('checkbox', 'enable_sec_9_form', 'Enable'),
        Field::make('text', 's_9_form_title', 'Form Title'),
        Field::make('text', 's_9_form_description', 'Form Description'),
        Field::make('text', 's_9_short_code', 'Short Code'),
        Field::make('textarea', 's_9_msg', 'Form Message (Show When you not want to show form)'),
    ));

