				<footer class="footer" role="contentinfo">
					<p class="footer-copyright">&copy; 2008-<?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved. <?php if (is_user_logged_in()) : ?>
    <a class="login-link" href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a>
<?php else : ?>
    <a class="login-link" href="<?php echo wp_login_url(get_permalink()); ?>">Login</a>
<?php endif;?></p>
				</footer> <!-- end .footer -->

			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>

		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtRbUtVxfPgnq7YvJUNmjwUg9f1zF2Wxc"></script>
	</body>
</html> <!-- end page -->
