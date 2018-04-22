<?php get_header("about") ?> <!-- header-about.php-->

<h3>Home Page</h3>
<div class="container">
    <div class="row">
            <div class="col-sm-10">
              <?php

                if(have_posts()): // we have posts or not - checking

                        while(have_posts()):  // loop section
                                the_post();
                     //get_post_format(): Aside => aside -> content-aside.php
                     //get_post_format(): Link => link -> content-link.php
                     //get_post_format(): Gallery => gallery -> content-gallery.php
                     // default : content.php
                     // content-{post-formats}.php > content.php > index.php
                            get_template_part("template-parts/content",get_post_format());// content.php

                        endwhile;

                endif;

        ?>
            </div>
            <div class="col-sm-2">
               
                <?php get_sidebar("home"); // sidebar-home20.php ?>
            </div>
    </div>
</div>

              
<?php get_footer("about") ?>
