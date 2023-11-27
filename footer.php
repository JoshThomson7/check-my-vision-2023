	<?php do_action('before_footer'); ?>

	<footer role="contentinfo">
		<div class="footer__menus">
			<div class="max__width">
				
				<?php
				while (have_rows('footer_menus', 'options')) : the_row();

					$footer_menu = get_sub_field('footer_menu');
				?>
					<article class="footer__menu">
						<?php if ($footer_menu) : ?>
							<h5><?php echo $footer_menu->name; ?> <i class="fas fa-chevron-down"></i></h5>
							<?php wp_nav_menu(array('menu' => $footer_menu->name, 'container' => false)); ?>
						<?php endif; ?>
					</article>

				<?php endwhile; ?>
			</div>
		</div>

		<div class="subfooter">
			<div class="max__width">

				<div class="subfooter--left">
					<small>&copy; <?php bloginfo('name') ?> <?php echo date('Y'); ?></small>
				</div><!-- subfooter--left -->

				<div class="subfooter--right">
					<small><a href="https://thomson-website-solutions.com/" target="_blank">Powered by Thomson Website Solutions</a></small>
				</div><!-- subfooter--left -->

			</div><!-- max__width -->
		</div><!-- subfooter -->
	</footer>

	<div class="spotlight-search">
		<div class="spotlight-search--content">
			<a href="#" class="spotlight-close"><i class="fal fa-times"></i></a>

			<h2>Search Check My Vision</h2>
			<form action="<?php echo esc_url(home_url()); ?>">
				<input type="text" name="s" placeholder="ie. Partners" />
				<button type="submit" class="button primary"><i class="fal fa-search"></i></button>
			</form>
		</div>
	</div>

	</div><!-- #page -->

	<?php wp_footer(); ?>
	
	</body>

	</html>