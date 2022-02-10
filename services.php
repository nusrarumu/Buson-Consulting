<?php 
    /*
    Template Name: Services Page
    */ 
    get_header();
?>
    <main>

        <!-- Breadcumb Area Start-->
        <?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>
        <!-- Breadcumb Area End-->

        <!-- Services Area Start-->
        <?php get_template_part( 'template-parts/partials/content', 'services' ); ?>
        <!-- Services Area End-->
        

        <!-- Recent Area Start -->
        <?php get_template_part( 'template-parts/partials/content', 'blog' ); ?>
        <!-- Recent Area End-->

    </main>
   <?php get_footer();?>