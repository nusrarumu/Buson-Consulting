<?php 
    /*
    Template Name: About Page
    */ 
    get_header();
?>

    <main>

        <!-- Breadcumb Area Start-->
        <?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>
        <!-- Breadcumb Area End-->

        <!-- We Trusted Start-->
        <?php get_template_part( 'template-parts/partials/content', 'about' ); ?>
        <!-- We Trusted End-->
      
        <!-- Testimonial Start -->
        <?php get_template_part( 'template-parts/partials/content', 'testimonial' ); ?>
        <!-- Testimonial End -->

        <!-- Recent Area Start -->
        <?php get_template_part( 'template-parts/partials/content', 'blog' ); ?>
        <!-- Recent Area End-->

    </main>
    <?php get_footer();?>