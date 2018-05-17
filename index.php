<?php get_header();?>
<?php get_template_part('menu');?>
	<div id="body">
		<div id="featured">

			<img src="<?php echo get_template_directory_uri(); ?>/images/the-beacon.jpg" alt="">
      <div>
				<h2>the beacon to all mankind</h2>
				<span>Our website templates are created with</span>
				<span>inspiration, checked for quality and originality</span>
				<span>and meticulously sliced and coded.</span>
				<a href="blog-single-post.html" class="more">read more</a>
			</div>
		</div>
		 
		<ul>
			<li>
				<a href="gallery.html">

					<img src="<?php echo get_template_directory_uri(); ?>/images/the-father.jpg" alt="">



					<span>the father</span>
				</a>
			</li>
			<li>
				<a href="gallery.html">

					<img src="<?php echo get_template_directory_uri(); ?>/images/the-actor.jpg" alt="">



					<span>the actor</span>
				</a>
			</li>
			<li>
				<a href="gallery.html">

					<img src="<?php echo get_template_directory_uri(); ?>/images/the-nerd.jpg" alt="">



					<span>the nerd</span>
				</a>
			</li>
		</ul>
	</div>
	<div id="footer">
	<?php get_footer();?>
	</div>
<?php wp_footer(); ?>
</body>
</html>
