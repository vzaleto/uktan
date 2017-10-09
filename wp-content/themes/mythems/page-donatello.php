<?php /* Template Name: Donatello */ ?>
<?php get_header(); ?>


    <body>

      <!-- Static navbar -->
      <header>
        <div class="head-donatello_bg">
          <div class="parallax">
            <nav class="navbar navbar-default navbar-static-top navbar-top">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="http://uktan/"><img src="<?php echo get_the_post_thumbnail_url(43); ?>" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse ">
                  <ul class="nav navbar-nav navbar-right navbar-inner">
                   <?php
                      $args=array(
                       'theme_location'=>'top',
                       'menu_class'=>'nav navbar-nav navbar-right'
                      );
                        wp_nav_menu($args);
                      ?> 
                 </ul>
               </div><!--/.nav-collapse -->
             </div>
           </nav>
           <div class="img-parallax"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(108); ?>" alt=""></div>
          </div>
       </div>
     </header>
     <main>
       <div class="content-page">
         <div class="container">
           <div class="contant-about">

               <?php
              query_posts(array('post__in' => array(166))); //массив постов которые нужно вывести
              while ( have_posts() ) : the_post(); ?>
                   <h3 class="title-line_chery"><?php echo the_title(); ?></h3>
                           
                  <?php the_content(); ?>

                  <p><?php echo the_field('name1_description'); ?></p>
                      <p class="txt-line"><?php echo the_field('content_desc'); ?></p>
                        <div class="img-about"><img src="<?php echo get_the_post_thumbnail_url($post->id); ?>" class="img-responsive" alt=""></div>
                      <?php endwhile; 
              wp_reset_query();
              ?>
           </div>
         </div>
         <div class="border_ivent"></div>
         <div class="thambneil">
           <div class="item-inner_photos">
            <div class="container">
              <h3 class="item-title_photo">PHOTO</h3>

              <?php
                  $args=array("post_type"=>"thre_portfolio");

                  $thre_portfolios = new WP_Query($args);
                  
                  if($thre_portfolios->have_posts()) { ?>

                    <div class="row">

                  <?php  while($thre_portfolios->have_posts()) {

                          $thre_portfolios->the_post(); ?>

                  <div class="col-xs-6 col-md-4">
                     <div class="img-inner">
                        <div class="item-hover">
                          <a href="">
                            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->id) ?>" alt="">
                          </a>
                       </div>
                     </div>
                     </div>
                  <?php  }
                   wp_reset_postdata(); ?>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>

          </div>
          <div class="btn_categories btn-photo"><a href="" class="btown">More photos</a></div>
          <div class="content_contact contact-inner">
                <div class="container">
                  <?php
              query_posts(array('post__in' => array(184))); //массив постов которые нужно вывести
              while ( have_posts() ) : the_post(); ?>
                    <h3 class="title_contact"><?php the_title(); ?></h3>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="content_left">
                           <?php the_content(); ?>
                           <p class="text-content_2" ><?php echo the_field('content_desc'); ?></p>
                           <ul class="inner_phone">
                             <li><span class="txt_contact"><?php echo the_field('content2'); ?></span><?php echo the_field('content3'); ?></li>
                             <li><span class="txt_contact"><?php echo the_field('content4'); ?></span></li>
                             <li><span class="numb_contact_1"><?php echo the_field('content5'); ?></span><?php echo the_field('content6'); ?></li>
                             <li><span class="numb_contact_2"><?php echo the_field('content7'); ?></span><?php echo the_field('content8'); ?></li>
                           </ul>
                           <div class="img-contact"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(171); ?>" alt="
                           "></div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="content_right">
                          <form>
                            <p><input type="text" name="Full Name" placeholder="Full Name"></p>
                             <p><input type="text" name="Email" placeholder="Email"></p>
                              <textarea placeholder="Message" rows="8"></textarea>
                          </form>
                          <div class="btn-wite" ><a type="submit" role="button" href="">Send</a></div>
                        </div>
                      </div>
                    </div>
                             <?php endwhile; 
              wp_reset_query();
              ?>
                </div>
          </div>
      </main>
     <?php get_footer(); ?>