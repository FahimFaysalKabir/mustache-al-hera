<?php

add_action( 'admin_init', 'custom_theme_options', 1 );

function custom_theme_options() {

  $saved_settings = get_option( 'option_tree_settings', array() );
  

  $custom_settings = array(
    'sections'        => array(
      array(
        'id'          => 'general',
        'title'       => 'Site Setting'
      ),
      array(
        'id'          => '',
        'title'       => ''
      )
    ),
    'settings'        => array(
      array(
        'id'          => 'logo_uploader',
        'label'       => 'upload your logo',
        'desc'        => 'Best logo size 200*50 pixel',
        'type'        => 'upload',
        'section'     => 'general'
      )
    )
  );

  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}
 ?>