

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

<br/>
<h4>Sample Image</h4>
<br/>
<img src="<?php echo get_option("owt_image_uploader") ?>" style="height: 200px;width:200px"/>