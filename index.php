<?php get_header();?>

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">

                <?php 
                     $args = array(
                        
                        'post_type'       => 'slider',
                        'posts_per_page'  => 3
                    );
                    $query = new WP_Query( $args );
                    while($query->have_posts()){
                        $query->the_post();

                        $slider_subtitle = get_field('slider_subtitle');
                        $slider_button_text = get_field('slider_button_text');
                        $slider_button_url = get_field('slider_button_url');
                    ?>
                        <div class="single-slider slider-height d-flex align-items-center" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-10 mx-auto">
                                        <div class="hero__caption">
                                            <p><?php the_field('slider_subtitle');?></p>
                                            <h1><?php the_title();?></h1>
                                            <!-- Hero-btn -->
                                            <div class="hero__btn">
                                                <a href="<?php the_field('slider_button_url');?>" class="btn hero-btn"><?php the_field('slider_button_text');?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                    wp_reset_postdata();
                ?>


                

            </div>
        </div>
        <!-- slider Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part( 'template-parts/partials/content', 'about' ); ?>
        <!-- We Trusted End-->

        <!-- Services Area Start-->
        <?php get_template_part( 'template-parts/partials/content', 'services' ); ?>
        <!-- Services Area End-->
        
        <!-- Request Back Start -->
        <?php get_template_part( 'template-parts/partials/content', 'request' ); ?>
        <!-- Request Back End -->
        
        <!-- Completed Cases Start -->
        <?php get_template_part( 'template-parts/partials/content', 'cases' ); ?>
        <!-- Completed Cases end -->
        
        <!-- Team-profile Start -->
        <?php get_template_part( 'template-parts/partials/content', 'team' ); ?>
        <!-- Team-profile End-->

        <!-- Testimonial Start -->
        <?php get_template_part( 'template-parts/partials/content', 'testimonial' ); ?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part( 'template-parts/partials/content', 'blog' ); ?>
        <!-- Recent Area End-->

        

    </main>
    <?php get_footer();?>