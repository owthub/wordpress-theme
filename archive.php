<?php get_header() ?>
<h3>Archive Page</h3>
<?php

     if(is_author()){
         echo "Author Archive";
     }elseif(is_category()){
single_cat_title();  /// function gives info about category
     }elseif(is_day()){
echo "Day archive";
     }elseif(is_month()){
echo "Month Arhive";
     }elseif(is_year()){
echo "Year Archive";
     }

?>
<div class="container">
    <div class="row">
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
</div>

              
<?php get_footer() ?>