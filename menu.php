<div id="header">
  
  						
  <?php if ( function_exists( 'get_option_tree') ) : if( get_option_tree( 'logo_uploader') ) : ?>
  					<a href="<?php bloginfo('home'); ?>"><img src="<?php get_option_tree( 'logo_uploader', '', 'true' ); ?>" alt=""/></a>
  				<?php else : ?>  
              <a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg"/></a>
  			<?php endif; endif; ?>

         <?php wp_nav_menu(array(
  					 'menu'=>'Primary menu',
  					 'menu_class'=>'',
  					 'menu_id'=>'' ))
  					 ?>



</div>

<!-- slide show coding start from here ,
i cut out the slide image code to .txt file in desktop!-->
