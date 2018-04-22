<?php get_header() ?>
<h3>Products page File</h3>
<div class="container">
    <div class="row">
            <?php

                if(have_posts()): // we have posts or not - checking

                        while(have_posts()):  // loop section
                                the_post();
                            ?>
<h3><?php the_title() ?></h3>
<p><?php the_content() ?></p>
                            <?php
                        endwhile;

                endif;

        ?>
    </div>
</div>

              
<?php get_footer() ?>