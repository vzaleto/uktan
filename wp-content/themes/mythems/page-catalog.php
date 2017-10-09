
<?php /* Template Name: Catalog */ ?>

<?php get_header(); ?>
    <body>

      <!-- Static navbar -->
     
            <header>
              <div class="head-catalog_bg">
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
                   </div> 

                   <!--/.nav-collapse -->
                 </div>
               </nav>
              </div>
            </header>
             <main>
                <div class="catalog-content">
                  <div class="container">
                    <h3 class="item-title">CATALOG</h3>
                    <nav class="">
                      <ul class="nav navbar-nav navbar-center second-menu">
                        <li class="active"><a  href="">Cлоеные изделия</a></li>
                        <li><a href="">Бисквитные изделия</a></li>
                        <li><a href="">Заварные изделия</a></li>
                        <li><a href="">Кексы</a></li>
                        <li><a href="">Песочные изделия</a></li>
                        <li><a href="">Печенье</a></li>
                        <li><a href="">Торты</a></li>
                        <li><a href="">Разное</a></li>
                      </ul>
                    </nav>





                    <div class="row">
                    <table class="table">
                    <?php 
                            $args=array("post_type"=>"two_portfolio");
                              $two_portfolios = new WP_Query($args);
                            ?>
                             <?php if($two_portfolios->have_posts()) { ?>

                      

                          <?php
                           while($two_portfolios->have_posts()) { ?>
                           
                          <tr>
                            <?php for ($i = 1; $i <= 3; $i++) { ?>

                          <?php $two_portfolios->the_post(); ?>
                        <td class="">
                        
                          <div class="col-md-12 col-sm-12 cell-position">
                          <div class="inner-position">
                            <div class="inner-container">
                              <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->id); ?>" alt="">
                              <div class="caption">
                                <h3 class="title-caption">TITLE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                </p>
                                <ul class="bottom-description">
                                  <li><strong>Вес,г.:</strong>90</li>
                                  <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          </div>
                        </td>
                            <?php } ?>
                        <?php } ?>
                        <?php wp_reset_postdata(); ?>
                          <!-- <td class="center-td">
                           <div class="col-md-12 col-sm-12 cell-position">
                              <div class="inner-position">
                            <div class="inner-container">
                              <img class="img-responsive" src="img/pic-34a.png" alt="">
                              <div class="caption">
                                <h3 class="title-caption">TITLE</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                </p>
                                <ul class="bottom-description">
                                  <li><strong>Вес,г.:</strong>90</li>
                                  <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                            </div>
                          </td>
                          <td>
                            <div class="col-md-12 col-sm-12 cell-position">
                               <div class="inner-position">
                                <div class="inner-container">
                                  <img class="img-responsive" src="img/pic-35a.png" alt="">
                                  <div class="caption">
                                    <h3 class="title-caption">TITLE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                    </p>
                                    <ul class="bottom-description">
                                      <li><strong>Вес,г.:</strong>90</li>
                                      <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                                                  </tr>
                                                  <tr>
                          <td>
                            <div class="col-md-12 col-sm-12 cell-position">
                              <div class="inner-position">
                                <div class="inner-container">
                                  <img class="img-responsive" src="img/pic-36a.png" alt="">
                                  <div class="caption">
                                    <h3 class="title-caption">TITLE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                    </p>
                                    <ul class="bottom-description">
                                      <li><strong>Вес,г.:</strong>90</li>
                                      <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                                                   </td>
                          <td class="center-td">
                            <div class="col-md-12 col-sm-12 cell-position">
                              <div class="inner-position">
                                <div class="inner-container">
                                  <img class="img-responsive" src="img/pic-37.png" alt="">
                                  <div class="caption">
                                    <h3 class="title-caption">TITLE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                    </p>
                                    <ul class="bottom-description">
                                      <li><strong>Вес,г.:</strong>90</li>
                                      <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td>
                            <div class="col-md-12 col-sm-12 cell-position">
                              <div class="inner-position">
                                <div class="inner-container">
                                  <img class="img-responsive" src="img/pic-38.png" alt="">
                                  <div class="caption">
                                    <h3 class="title-caption">TITLE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                    </p>
                                    <ul class="bottom-description">
                                      <li><strong>Вес,г.:</strong>90</li>
                                      <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                                                </tr>
                                                <tr>
                                                  <td>
                          <div class="col-md-12 col-sm-12 cell-position">
                            <div class="inner-position">
                                <div class="inner-container">
                                  <img class="img-responsive" src="img/pic-39.png" alt="">
                                  <div class="caption">
                                    <h3 class="title-caption">TITLE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                    </p>
                                    <ul class="bottom-description">
                                      <li><strong>Вес,г.:</strong>90</li>
                                      <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                          </div>
                                                  </td>
                                                  <td class="center-td">
                          <div class="col-md-12 col-sm-12 cell-position">
                            <div class="inner-position">
                                <div class="inner-container">
                                  <img class="img-responsive" src="img/pic-40.png" alt="">
                                  <div class="caption">
                                    <h3 class="title-caption">TITLE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt eget magna et consectetur.<span class="text-hidden"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt   eget magna et consectetur.</span>
                                    </p>
                                    <ul class="bottom-description">
                                      <li><strong>Вес,г.:</strong>90</li>
                                      <li><strong>Кол-во в коробке,шт.:</strong> 50</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                          </div>
                                                  </td> 
                        <td></td>-->
                      </tr>
                       <?php } ?>
                    </table>
                    </div>

                  </div>
                </div>
                <div class="content_contact contact-inner">
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
                           <div class="img-contact"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(174); ?>" alt="
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
                  </div>
                </div>
             </main>
            <?php get_footer(); ?>