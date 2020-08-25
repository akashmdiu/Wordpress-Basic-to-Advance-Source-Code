<?php
/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';
function cmb2_custom_fields(){
     $letest_works = new_cmb2_box( array(
		'id'            => 'letest_work_metabox',
		'title'         => __( 'Letest Work Metabox', 'timer_master' ),
		'object_types'  => array( 'letest_works', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
    // Regular text field
	$letest_works -> add_field( array(
		'name'       => __( 'Demo', 'timer_master' ),
		'desc'       => __( 'Input your demo title', 'timer_master' ),
		'id'         => 'demo_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$letest_works -> add_field( array(
		'name'       => __( 'detail', 'timer_master' ),
		'desc'       => __( 'Input your details title', 'timer_master' ),
		'id'         => 'detail_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );   
    
	$letest_works -> add_field( array(
		'name'       => __( 'Protfolio url', 'timer_master' ),
		'desc'       => __( 'Input your protfolio url', 'timer_master' ),
		'id'         => 'protfolio_url',
		'type'       => 'text_url',
	) );
    
	$letest_works -> add_field( array(
		'name'       => __( 'Protfolio title', 'timer_master' ),
		'desc'       => __( 'Input your protfolio title', 'timer_master' ),
		'id'         => 'protfolio_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
    
	$letest_works -> add_field( array(
		'name'       => __( 'Protfolio sub title', 'timer_master' ),
		'desc'       => __( 'Input your sub protfolio title', 'timer_master' ),
		'id'         => 'protfolio_sub_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
    
    $offers_metabox = new_cmb2_box( array(
		'id'            => 'offer_metabox',
		'title'         => __( 'Offer Metabox', 'timer_master' ),
		'object_types'  => array( 'offers', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
	$offers_metabox -> add_field( array(
		'name'       => __( 'offer icon name', 'timer_master' ),
		'desc'       => __( 'Input your ion icon name', 'timer_master' ),
		'id'         => 'ion_icon',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
	$offers_metabox -> add_field( array(
		'name'       => __( 'offer animation name', 'timer_master' ),
		'desc'       => __( 'Input your wow animation name', 'timer_master' ),
		'id'         => 'offer_animation',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
    
	$offers_metabox -> add_field( array(
		'name'       => __( 'Data wow duration time', 'timer_master' ),
		'desc'       => __( 'Input your wow duration time', 'timer_master' ),
		'id'         => 'data_wow_duration',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
	$offers_metabox -> add_field( array(
		'name'       => __( 'Data wow delay time', 'timer_master' ),
		'desc'       => __( 'Input your wow delay time', 'timer_master' ),
		'id'         => 'data_wow_delay',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
    
    $different_metabox = new_cmb2_box( array(
		'id'            => 'different_metabox',
		'title'         => __( 'Why we are different Metabox', 'timer_master' ),
		'object_types'  => array( 'page', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
        'show_on'       => array(
            'key'   => 'id',
            'value' => 97
        )
	) );
    // Regular text field
	$group_field = $different_metabox -> add_field( array(
		'name'       => __( 'Group Content', 'timer_master' ),
		'id'         => 'group_content',
		'type'       => 'group',
	) );
	$different_metabox -> add_group_field($group_field, array(
		'name'       => __( 'Set Here Content', 'timer_master' ),
		'desc'       => __( 'Input your content', 'timer_master' ),
		'id'         => 'content',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$different_metabox -> add_group_field($group_field, array(
		'name'       => __( 'Animation delay', 'timer_master' ),
		'desc'       => __( 'Input your animation delay time', 'timer_master' ),
		'id'         => 'animate_delay',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
    
     $simple_post = new_cmb2_box( array(
		'id'            => 'simple_post_metabox',
		'title'         => __( 'Simple Post Metabox', 'timer_master' ),
		'object_types'  => array( 'simple_post', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
    // Regular text field
	$simple_post -> add_field( array(
		'name'       => __( 'post delay time', 'timer_master' ),
		'desc'       => __( 'Input your simple post delay time', 'timer_master' ),
		'id'         => 'simple_post_delay',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
     $simple_post = new_cmb2_box( array(
		'id'            => 'team_member_metabox',
		'title'         => __( 'Team Member Metabox', 'timer_master' ),
		'object_types'  => array( 'team_member', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
    // Regular text field
	$simple_post -> add_field( array(
		'name'       => __( 'Member name', 'timer_master' ),
		'desc'       => __( 'Input your member name', 'timer_master' ),
		'id'         => 'member_name',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
    
     $what_we_do = new_cmb2_box( array(
		'id'            => 'what_we_do_metabox',
		'title'         => __( 'What We Do Metabox', 'timer_master' ),
		'object_types'  => array( 'what_we_do', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
    // Regular text field
	$what_we_do -> add_field( array(
		'name'       => __( 'do icon name', 'timer_master' ),
		'desc'       => __( 'Input do icon name', 'timer_master' ),
		'id'         => 'do_icon',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$what_we_do -> add_field( array(
		'name'       => __( 'do wow delay time', 'timer_master' ),
		'desc'       => __( 'Input do delay time', 'timer_master' ),
		'id'         => 'do_wow_delay',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$what_we_do -> add_field( array(
		'name'       => __( 'do title', 'timer_master' ),
		'desc'       => __( 'Input do title', 'timer_master' ),
		'id'         => 'do_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$what_we_do -> add_field( array(
		'name'       => __( 'do description', 'timer_master' ),
		'desc'       => __( 'Input do description', 'timer_master' ),
		'id'         => 'do_desc',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$simple_post -> add_field( array(
		'name'       => __( 'Member position', 'timer_master' ),
		'desc'       => __( 'Input your member position', 'timer_master' ),
		'id'         => 'member_position',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$simple_post -> add_field( array(
		'name'       => __( 'Member description', 'timer_master' ),
		'desc'       => __( 'Input your member description', 'timer_master' ),
		'id'         => 'member_desc',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
    $social_link = $simple_post -> add_field( array(
		'name'       => __( 'Member Social link', 'timer_master' ),
		'id'         => 'member_social_link',
		'type'       => 'group',
	) );
    
	$simple_post -> add_group_field($social_link, array(
		'name'       => __( 'Member social icon', 'timer_master' ),
		'desc'       => __( 'Input your member social icon name', 'timer_master' ),
		'id'         => 'social_icon',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$simple_post -> add_group_field($social_link, array(
		'name'       => __( 'Member social link', 'timer_master' ),
		'desc'       => __( 'Input your member social link', 'timer_master' ),
		'id'         => 'social_link',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
    $feature_works = new_cmb2_box( array(
		'id'            => 'feature_work_metabox',
		'title'         => __( 'Feature Work Metabox', 'timer_master' ),
		'object_types'  => array( 'feature_work', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
    // Regular text field
	$feature_works -> add_field( array(
		'name'       => __( 'Demo', 'timer_master' ),
		'desc'       => __( 'Input your feature demo title', 'timer_master' ),
		'id'         => 'f_demo_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$feature_works -> add_field( array(
		'name'       => __( 'feature detail', 'timer_master' ),
		'desc'       => __( 'Input your feature details title', 'timer_master' ),
		'id'         => 'f_detail_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );   

    
	$feature_works -> add_field( array(
		'name'       => __( 'Feature Protfolio title', 'timer_master' ),
		'desc'       => __( 'Input your feature protfolio title', 'timer_master' ),
		'id'         => 'f_protfolio_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
	$feature_works -> add_field( array(
		'name'       => __( 'feature Protfolio title url', 'timer_master' ),
		'desc'       => __( 'Input your feature protfolio title url', 'timer_master' ),
		'id'         => 'f_protfolio_title_url',
		'type'       => 'text_url',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) ); 
    
	$feature_works -> add_field( array(
		'name'       => __( 'feature Protfolio sub title', 'timer_master' ),
		'desc'       => __( 'Input your feature sub protfolio title', 'timer_master' ),
		'id'         => 'f_protfolio_sub_title',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
    
    $gallery = new_cmb2_box( array(
		'id'            => 'gallery_metabox',
		'title'         => __( 'Gallery Metabox', 'timer_master' ),
		'object_types'  => array( 'gallery', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
    // Regular text field
	$gallery -> add_field( array(
		'name'       => __( 'Demo Label', 'timer_master' ),
		'desc'       => __( 'Input your demo title', 'timer_master' ),
		'id'         => 'demo_label',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
    $contact_options = new_cmb2_box( array(
		'id'            => 'contact_metabox',
		'title'         => __( 'Contact Option Metabox', 'timer_master' ),
		'object_types'  => array( 'contact_options', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, 
	) );
    // Regular text field
	$contact_options -> add_field( array(
		'name'       => __( 'Contact icon name', 'timer_master' ),
		'desc'       => __( 'Input your contact ion ios icon name', 'timer_master' ),
		'id'         => 'contact_icon',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$contact_options -> add_field( array(
		'name'       => __( 'Contact Description', 'timer_master' ),
		'desc'       => __( 'Input your contact description', 'timer_master' ),
		'id'         => 'contact_desc',
		'type'       => 'textarea',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
	$contact_options -> add_field( array(
		'name'       => __( 'Contact Wow Delay', 'timer_master' ),
		'desc'       => __( 'Input your contact wow delay time', 'timer_master' ),
		'id'         => 'contact_wow_delay',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats',
	) );
}
add_action('cmb2_admin_init', 'cmb2_custom_fields');