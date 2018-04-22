<?php get_header() ?>
<h3>Singular Page</h3>
<div class="container">
    <div class="row">
            <?php

                if(have_posts()): // we have posts or not - checking

                        while(have_posts()):  // loop section
                                the_post();
                            get_template_part("template-parts/content",get_post_format());// content.php

                        endwhile;

                endif;

        ?>
    </div>
</div>

              
<?php get_footer() ?>