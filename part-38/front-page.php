<?php get_header(); ?>
<!--==================================================
Slider Section Start
================================================== -->
<section id="hero-area" style="backgroud:url("<?php echo $timer_master['background_image']['url']; ?>") no-repeat 50%">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="block wow fadeInUp" data-wow-delay=".3s">
                <!-- Slider -->
                <section class="cd-intro">
                    <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                    <span><?php echo $timer_master['your_biodata']; ?></span><br>
                    <span class="cd-words-wrapper">
                      
                       <?php 
                        $x = 0;
                            if(is_array($timer_master['your_works'])){
                                foreach($timer_master['your_works'] as $single_work){
                                $x++; ?>
                                    <b class="<?php if($x == 1){echo "is-visible";}?>"><?php echo $single_work['title']?></b>
                               <?php }
                            }
                        ?>
                        
                    </span>
                    </h1>
                    </section> <!-- cd-intro -->
                    <!-- /.slider -->
                    <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                        <?php echo $timer_master['your_exprience'];?>
                    </h2>
                    <?php 
                        if(is_array($timer_master['works_url'])){
                            foreach($timer_master['works_url'] as $single_link){?>
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="<?php echo $single_link['url']; ?>"><?php echo $single_link['title']; ?></a>
                           <?php }
                        }else{
                            echo "please input only one Link";
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section><!--/#main-slider-->

<!--
==================================================
About Section Start
================================================== -->
<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                    <h2>
                   <?php 
                    $text = "About Me";
                        esc_html__( "About", "timermaster" );
                   ?> 

                   <img src="<?php echo  esc_url('.....') ?>" alt="<?php echo esc_attr__( 'image1', "timermaster" );  ?>">
                    </h2>
                    <p>
                       <?php echo $timer_master['a_desc1']; ?>
                    </p>
                    <p>
                        <?php echo $timer_master['a_desc2']; ?>
                    </p>
                </div>
                
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                    <img src="<?php echo $timer_master['a_thumb']['url']?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#about -->


<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="works" class="works">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php echo $timer_master['l_heading']; ?></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                <?php echo $timer_master['l_desc']; ?>
            </p>
        </div>
        <div class="row">
           
           <?php 
                $query = new WP_Query(array(
                    'post_type' => 'letest_works',
                    'post_per_page' => -1,
                    'order' => 'ASC',
                ));
                if($query -> have_posts()){
                    while($query -> have_posts()) : $query -> the_post();
                    $demo_title = get_post_meta(get_the_ID(), 'demo_title', true);
                    $detail_title = get_post_meta(get_the_ID(), 'detail_title', true);
                    $protfolio_title = get_post_meta(get_the_ID(), 'protfolio_title', true);
                    $protfolio_url = get_post_meta(get_the_ID(), 'protfolio_url', true);
                    $protfolio_sub_title = get_post_meta(get_the_ID(), 'protfolio_sub_title', true);
                    $post_fency = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                ?>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                   <?php the_post_thumbnail('letest_work', array('class' => 'img-responsive'));?>
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="<?php echo $post_fency[0]; ?>"><?php echo $demo_title; ?></a>
                                            <a target="_blank" href="<?php echo $protfolio_url; ?>"><?php echo $detail_title; ?></a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="<?php echo $protfolio_url; ?>">
                                    <?php echo $protfolio_title; ?>
                                </a>
                                </h4>
                                <p>
                                    <?php echo $protfolio_sub_title; ?>
                                </p>
                                </figcaption>
                            </figure>
                        </div>
                    <?php endwhile;
                }else{
                    echo "no post";
                }
            ?>
            
        </div>
    </div>
</section> <!-- #works -->
<!--
==================================================
Portfolio Section Start
================================================== -->
<section id="feature">
    <div class="container">
        <div class="section-heading">
            <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php echo $timer_master['offer_heading']; ?></h1>
            <p class="wow fadeInDown" data-wow-delay=".5s">
                <?php echo $timer_master['offer_desc']; ?>
            </p>
        </div>
        <div class="row">
           
           <?php
                $query = new WP_Query(array(
                    'post_type' => 'offers',
                    'post_per_page' => -1,
                    'order' => 'ASC',
                ));
                if($query -> have_posts()){
                    while($query -> have_posts()) : $query -> the_post();
                    $ion_icon = get_post_meta(get_the_ID(), 'ion_icon', true);
                    $offer_animation = get_post_meta(get_the_ID(), 'offer_animation', true);
                    $data_wow_duration = get_post_meta(get_the_ID(), 'data_wow_duration', true);
                    $data_wow_delay = get_post_meta(get_the_ID(), 'data_wow_delay', true);
                    ?>
                       
                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow <?php echo $offer_animation; ?> animated" data-wow-duration="<?php echo $data_wow_duration; ?>" data-wow-delay="<?php echo $data_wow_delay; ?>">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-<?php echo $ion_icon; ?>-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo the_title(); ?></h4>
                                    <p><?php echo the_content(); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                }else{
                    echo "no post";
                }
            ?>
            
        </div>
    </div>
</section> <!-- /#feature -->

  <?php get_footer(); ?>