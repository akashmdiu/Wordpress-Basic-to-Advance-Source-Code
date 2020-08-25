<?php

namespace ElementorAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Image_Size;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */
class TeamMember extends Widget_Base
{

    public function get_name()
    {
        return 'team-member';
    }

    public function get_title()
    {
        return __('Team Member', 'elementor-addons');
    }

    public function get_icon()
    {
        return 'fa fa-user';
    }

    public function get_categories()
    {
        return ['custom-addons'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'team_member',
            [
                'label' => __('Team Member', 'elementor-addons'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'member_per_row',
            [
                'label' => __('Member Per Row', 'plugin-domain'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '4',
                'options' => [
                    '3'  => __('4', 'plugin-domain'),
                    '4' => __('3', 'plugin-domain'),
                    '6' => __('2', 'plugin-domain'),
                    '12' => __('1', 'plugin-domain'),
                ],
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'team_member_image',
            [
                'label' => __('Choose Image', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'team_member_name',
            [
                'label' => __('Name', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Jonathon Andrew', 'elementor-addons'),
                'label_block' => true
            ]
        );
        $repeater->add_control(
            'member_designation',
            [
                'label' => __('Designation', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('CEO/Project Manger', 'elementor-addons'),
                'label_block' => true
            ]
        );
        $repeater->add_control(
            'member_description',
            [
                'label' => __('Description', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('CEO/Project Manger', 'elementor-addons'),
                'label_block' => true
            ]
        );
        $repeater->add_control(
            'social_link_heading',
            [
                'label' => __('Social Url', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $repeater->add_control(
            'member_facebook_link',
            [
                'label' => __('Facebook Link', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'elementor-addons'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'member_twitter_link',
            [
                'label' => __('Twitter Link', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'elementor-addons'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'member_linkedin_link',
            [
                'label' => __('Linkedin Link', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'elementor-addons'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater->add_control(
            'member_google_plus_link',
            [
                'label' => __('Google Plus Link', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'elementor-addons'),
                'show_external' => true,
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );




        $this->add_control(
            'member_list',
            [
                'label' => __('Repeater List', 'elementor-addons'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'team_member_name' => __('Jonathon Andrew', 'elementor-addons'),
                        'team_member_designation' => __('CEO/Project Manager', 'elementor-addons'),
                    ],
                    [
                        'team_member_name' => __('Steve Jobs', 'elementor-addons'),
                        'team_member_designation' => __('CEO/Founder', 'elementor-addons'),
                    ],

                ],
                'title_field' => '{{{ team_member_name }}}',
            ]
        );

        $this->end_controls_section();


        $this->end_controls_tabs();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="col-md-3">
            <div class="team-member wow fadeInLeft animated" data-wow-duration="500ms" data-wow-delay=".3s" style="visibility: visible; animation-duration: 500ms; animation-delay: 0.3s; animation-name: fadeInLeft;">
                <div class="team-img">
                    <img src="images/team/team-1.jpg" class="team-pic" alt="">
                </div>
                <h3 class="team_name">Jonathon Andrew</h3>
                <p class="team_designation">CEO, Project Manager</p>
                <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                <p class="social-icons">
                    <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                    <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                    <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                    <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                </p>
            </div>
        </div>

<?php


    }
}
