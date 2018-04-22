

<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'right-sidebar' ); ?>
	</ul>
<?php endif; ?>


<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	<ul id="sidebar">
		<?php dynamic_sidebar( 'left-sidebar' ); ?>
	</ul>
<?php endif; ?>
