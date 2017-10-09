<?php get_header(); ?>
    <body<?php if ( !is_front_page() && !is_home() ) : ?> class="inside"<?php endif ?>>
  
      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-static-top navbar-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        
            <a class="navbar-brand" href="#index"><img src="<?php echo get_the_post_thumbnail_url(43); ?>" alt=""></a>

          </div>
          <div id="navbar" class="navbar-collapse collapse ">
            <ul class="nav navbar-nav navbar-right navbar-inner">
              <!-- <li><a href="catalog.html" title="Catalog">Catalog</a></li>
              <li><a href="">About</a></li>
              <li class="active"><a href="">Contact <span class="sr-only">(current)</span></a></li>
              <li><a href="donatello.html" title="Donatello">Donatello Cakes</a></li>
              <li class="item-leng active"><a href="">RU</a></li>
              <li class="item-leng"><a href="">UA</a></li> -->
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
    
      <header>
        <div class="head-page">
          <div class="box-bg">
            <div class="container">
              <div class="hed-content">
                <div class="logo-head"><img class="img-responsive" src="img/pic-2.png" alt=""></div>
                <p class="txt-head"><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt<br> eget magna et consectetur.</span>
                </p>
               </div>
              </div>
              <div class="img-bottom">
         
              <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(62); ?>" alt="">

              </div>
          </div>
        </div>
      </header>
      <main>
       <div class="inner-fix">
          <nav class="navbar nav-gallery menu-top menu-center" id="menu-center">
            <ul class="navbar-nav second-menu nav">
              <li class="active"><a class="" href="#new-product">New product</a></li>
              <li><a href="#categories">Categories</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#donatello">Donatello Cakes</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
      </div>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <div class="img-yellowCake"><img src="<?php echo get_the_post_thumbnail_url(92); ?>" alt=""></div>
            <!-- Indicators -->
            <div class="container" id="new-product">
             <?php 
                  $args=array(
                    "post_type"=>"slider"
                    );
                    $slides = new WP_Query($args);
                  ?>
              <ol class="carousel-indicators">

              <?php $slides_count = $slides->post_count; ?>
              <?php 
                  for($i=0; $i<$slides_count; $i++) { ?>
                    <?php
                      if($i==0) {
                        $active="active";
                      } else {
                        $active="";
                      }
                    ?>
                  
                        <li data-target="#carousel-example-generic" data-slide-to="<? echo $i; ?>" class="<?php echo $active; ?>"></li>
                     <?php }?>
              </ol>
              <!-- Wrapper for slides -->
               
                  <?php if($slides->have_posts()) { ?>
                    <div class="carousel-inner" role="listbox">
                    <?php
                       $i=0;
                          while($slides->have_posts()) { ?>
                            <?php $slides->the_post(); ?>
                              <?php 
                                 if($i==0) {
                                    $active="active";
                                 } else{
                                    $active="";
                                 }               
                              ?>
                <div class="item <?php echo $active; ?>">
                 <div class="inner-gallery">
                  <h3><strong><?php echo get_field('name1_description'); ?></strong> <?php echo get_field('name5'); ?></h3>
                  <h1><?php echo get_field('nam4'); ?></h1>
                  <?php $miniature_first_url = get_the_post_thumbnail_url($post->id); ?>
                   <div class="img-cake"><img class="img-responsive" src="<?php echo $miniature_first_url ?>" alt="" /></div>
                  <div class="inner-description">
                    <ul>
                      <li><?php echo get_field('name3_description'); ?></li>

                      <li><?php echo get_field('name-shet'); ?></li>
                      <li><?php echo get_field('name_description3'); ?></li>
                      <li><?php echo get_field('name2_description'); ?></li>
                        <li class="button"><a href="">More</a></li>
                      </ul>
                     
                    </div>
                    
                   
                  </div>
                  <div class="carousel-caption"></div>
                </div>
                <?php $i++; ?>
                  <?php } ?>
                  <?php wp_reset_postdata(); ?>   
              </div>  
               <?php } ?>
            </div>
            <div class="img-waitCake
            "><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(96); ?>" alt=""></div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="left-change"></span>
              <!-- <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="right-change"></span>
             <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="border_ivent"></div>
           <div class="btn_categories"><a href="" class="btn-black">View <span class="groe-up">ALL</span> catigries</a></div>

          <div class="miniature-inner" id="categories">
            <div class="container">
              <h3 class="categories-coke">Categories</h3>
               <?php 
                  $args=array(
                    "post_type"=>"portfolio"
                    );
                    $portfolios = new WP_Query($args);
                  ?>
                   <?php
                  if($portfolios->have_posts()) { ?>
              <div class="row row_inner">
               <?php
                     
                    while($portfolios->have_posts()) { ?>
                      <?php $portfolios->the_post(); ?>
                    <div class="col-xs-6 col-md-4">
                      <div class="item-block">
                      <?php $miniature_first_url = get_the_post_thumbnail_url($post->id); ?>
                        <img src="<?php echo $miniature_first_url ?>" alt="">
                        <div class="item-block_hover">
                          <a href="#" class="item-block_btn"><?php echo the_content(); ?></a>
                        </div>
                      </div>
                    </div>
                      <?php } ?>
                  <?php wp_reset_postdata(); ?>  
              </div>
               <?php } ?>
            </div>
          </div>
          <div class="img-miniature_bottom"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(98); ?>" alt=""></div>
          <div class="border_ivent"></div>
           <div class="btn_categories"><a href="" class="btown">View <span class="groe-up">ALL</span> catigries</a></div>
             <?php 
                 $args=array(
                  "post_type"=>"box"
                  );
                  $box = new WP_Query($args);
              ?>
              <?php
                if($box->have_posts()) { ?>
              <div class="miniature-inner contant-about" id="about">
               <?php 
                  while($box->have_posts()) { ?>
                  <?php $box->the_post(); ?>
                   <div class="container">
                    
                        <h2 class="title_about"><?php echo get_field('name11'); ?></h2>
                        <p><?php echo get_field('name22'); ?></p>
                        <p class="txt-line"><?php echo get_field('name33'); ?></p>
                        <div class="img-about"><img src="<?php echo get_the_post_thumbnail_url($post->id); ?>" class="img-responsive" alt=""></div>

                    </div>
                 <?php } ?>
                  <?php wp_reset_postdata(); ?>  
          </div>
          <?php } ?>
          <div class="parallax" id="donatello">
            <div class="img-parallax"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(108); ?>" alt="" /><div class="btn_parallax"><a href="">GO TO PAGE</a></div></div>
            
          </div>
          <div class="content_contact" id="contact">
            <div class="container">
                <h3 class="title_contact">Contact</h3>
                <div class="row">
                <div class="col-md-6">
                  <div class="content_left">
                     <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque egestas justo eu lacinia mollis. Vivamus porta, tortor id interdum porta, nibh mauris feugiat tellus, sit amet sagittis felis ipsum vitae lacus.</p>
                     <p class="text-content_2" >Duis eu mauris id nisl placerat bibendum. Morbi luctus, purus vel consectetur vehicula, lacus elit vulputate dolor, non imperdiet orci sem vel sapien.</p>
                     <ul class="inner_phone">
                       <li><span class="txt_contact">Email:</span>mymail@mail.com</li>
                       <li><span class="txt_contact">Phone:</span></li>
                       <li><span class="numb_contact_1">Kharkiv</span>+38 (050) 000 0000</li>
                       <li><span class="numb_contact_2">Kyev</span>+38 (050) 000 0000</li>
                     </ul>
                     <div class="img-contact"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(110); ?>" alt=""></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="content_right">
                    <form>
                      <p><input type="text" name="Full Name" placeholder="Full Name"></p>
                       <p><input type="text" name="Email" placeholder="Email"></p>
                        <textarea placeholder="Message" rows="8"></textarea>
                    </form>
                    <div class="btn-wite"><a type="submit" role="button" href="">Send</a></div>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </main>
      <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <?php endwhile; ?>
 <?php endif; ?>

    
  
   <?php get_footer(); ?>