<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
			<aside id="aside" class="aside" role="complementary">
				<?php if ( !dynamic_sidebar("aside") ) : ?>
				<?php endif; ?>
			</aside>
			<footer id="footer" class="footer" role="contentinfo">
				<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
				<ul id="authentication" class="authentication">
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="#main">Back to main</a></li>
				</ul>
			</footer>
		</div>
		<script data-main="<?php echo get_template_directory_uri(); ?>/script/aether" src="<?php echo get_template_directory_uri(); ?>/script/external/requirejs.js"></script>
		<?php wp_footer(); ?>
	</body>
</html>