<?php get_header();
?>
        <!-- 
        ================================================== 
            Global Page Section Start
        ================================================== -->
        
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Full width blog</h2>
                            <ol class="breadcrumb">
                                <li>
                                    <a href="<?php echo site_url(); ?>">
                                        <i class="ion-ios-home"></i>
                                        Home
                                       
                                    </a>
                                </li>
                                <li class="active"><?php wp_title(''); ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>


<!--=====================================
=            Full Width Blog            =
======================================-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <?php 
                    if(have_posts()){
                        while(have_posts()) : the_post();?>
                            <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div class="blog-post-image">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('blog-img',array('class' => 'img-responsive')); ?></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span><?php the_time('M d, y | g:i a'); ?></span>
                                        <span>by <a href=""><?php the_author_posts_link(); ?></a></span>
                                        <span><a href="<?php the_permalink(); ?>"><?php the_tags(); ?></a></span>
                                        <span><a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
                                    </div>
                                    <p><?php the_excerpt('60'); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-dafault btn-details">Continue Reading</a>
                                </div>

                            </article>
                       <?php endwhile;
                    }
                ?>
                
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>