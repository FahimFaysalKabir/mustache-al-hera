<div id="header">

  <a href="http://localhost/wordpress" >
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="">
  </a>

  						<?php wp_nav_menu(array(
  					 'menu'=>'Primary menu',
  					 'menu_class'=>'',
  					 'menu_id'=>'' ))
  					 ?>

</div>
