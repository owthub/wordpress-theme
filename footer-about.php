<!---footer-->
<footer>
    <h3>Footer About Page</h3>

        <div class="copyright">
            <?php 
            $page_id = get_option("owt_setting_footer_link");
            ?>
            &copy; <?php echo get_option('owt_first_footer_setting'); ?> <a href="<?php echo get_the_permalink($page_id); ?>" target="_blank"><?php echo get_option("owt_first_footer_link") ?></a>
        </div>

</footer>

<!--back to top--->
<a style="display: none;" href="javascript:void(0);" class="scrollTop back-to-top" id="back-to-top">
    <span><i aria-hidden="true" class="fa fa-angle-up fa-lg"></i></span>
    <span>Top</span>
</a>
</div>
<?php wp_footer(); ?>
</body>
</html>