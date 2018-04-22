  <div class="col-sm-12 owt-container post-link">
  <h3>Post Link</h3>
          <div class="col-sm-4">
             <?php
             
                 if(has_post_thumbnail()){ // true
                     the_post_thumbnail('small-thumbnail');
                 }else{
                     ?>
<img src="<?php echo get_template_directory_uri().'/images/no-image.jpg' ?>" style="height:120px;width:120px;"/>
                     <?php
                 }
              ?>
          </div>
          <div class="col-sm-8">
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p><?php the_time('F j, Y g:i a') ?> |<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php 
                
                  $categories = get_the_category();
                  $separator = ", ";
                  $catoptions = '';
                  foreach($categories as $category){
                      $catoptions .= "<a href='".get_category_link($category->term_id)."'/>".$category->cat_name."</a>".$separator;
                  }
echo trim($catoptions,$separator);
               ?></p>
              <p><?php the_content() ?></p>
          </div>
       </div>