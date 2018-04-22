<!DOCTYPE html>
<html <?php echo language_attributes(); ?>>
    <head>
        <meta charset="<?php echo get_bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        <title><?php echo get_bloginfo('name')." | ".get_bloginfo('description') ?></title>
       <?php wp_head(); ?>
       <style>
          html{ margin-top:0px !important; }
          .owt-container{
              margin-top:20px;
              padding:10px;
              border: 1px solid black;
          }
       </style>
    </head>
    <body>
        <div id="page">
            <!---header top-->
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">                          
                        </div>
                        <div class="col-md-6">
                            <div class="social-grid">
                                <ul class="list-unstyled text-right">
                                    <li><a><i class="fa fa-facebook"></i></a></li>
                                    <li><a><i class="fa fa-twitter"></i></a></li>
                                    <li><a><i class="fa fa-linkedin"></i></a></li>
                                    <li><a><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header-->
            <header class="header-container">
                <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    
                                    <a href="index.html"><span>vacay</span>home</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right">
                                    <button type="button" class="book-now-btn" style="background-color: <?php echo get_option('owt_color_picker_id'); ?>">Book Now</button>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <!--ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" class="active"><span>Home</span></a></li>
                                            <li><a data-hover="About"  href="about.html"><span>About</span></a></li>
                                            <li><a data-hover="Rooms"  href="rooms.html"><span>Rooms</span></a></li>
                                            <li><a data-hover="Gallery"  href="gallery.html"><span>Gallery</span></a></li>
                                            <li><a data-hover="Dinning" href="dinning.html"><span>Dinning</span></a></li>
                                            <li><a data-hover="News" href="news.html"><span>News</span></a></li>
                                            <li><a data-hover="Contact Us" href="contact.html"><span>contact Us</span></a></li>
                                        </ul-->
<?php

 /*if(has_nav_menu("header")){ //true
     wp_nav_menu(array(
        "theme_location" => "header",
        "menu_class"=>"owt_class",
        "menu_id"=> "owt_id",
        "container_class"=>"owt_parent_class",
        "container_id"=>"owt_parent_id",
        "before"=>"before anchor tag",
        "link_before"=>"anchor before text"
    ));
  }*/

  $locationDetails = get_nav_menu_locations(); 
  $menuID = $locationDetails['header']; // header = menu-items = 5, locations = 2

  $primaryMenuItems = wp_get_nav_menu_items($menuID);
?>
 <ul class="list-unstyled nav1 cl-effect-10">
    <?php
        foreach($primaryMenuItems as $key=>$value){
        ?>
           <li><a data-hover="<?php echo $value->title; ?>"  href="<?php echo $value->url; ?>"><span><?php echo $value->title; ?></span></a></li>
        <?php
        }
    ?>
</ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn" style="background-color: <?php echo get_option('owt_color_picker_id'); ?>">Book Now</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
