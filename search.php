<?php 
    /*
    Template Name: Search Page
    */ 
    get_header();
?>
<!-- Breadcumb Area Start-->
<?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>
<!-- Breadcumb Area End-->

<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php get_search_form(); ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();?>