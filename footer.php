<?php
/**
 * The template for displaying the footer
 * @package fregateisland
 */
?>
</main>
<footer>

	<div class="container footer">
	<div class="contact-section">
		<h4 class="heading heading__7">Support</h4>
		<p><a href="tel:<?php the_field('phone', 'options');?>"><?php the_field('phone', 'options');?></a></p>
		<p><a href="mailto:<?php the_field('email', 'options');?>"><?php the_field('email', 'options');?></a></p>
	</div>
	
	<div  class="menu-section">
		<h4 class="heading heading__7">Links</h4>
		<?php wp_nav_menu( array( 
			'theme_location' => 'footer-menu'
		) ); ?>
	</div>
</div>

</footer>
<div class="socket">
	<div class="container">
		<p class="copyright">&copy; Unique Fregate <?php echo date('Y');?>. All rights reserved</p>
		<div class="mandatory-links">
			<a href="/privacy">Privacy</a>
			<a href="/terms-conditions">Terms & Conditions</a>
		</div>
		<div class="silverless logo-holder">
			<a href="https://silverless.co.uk"><?php get_template_part('inc/img/silverless', 'logo');?></a>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
