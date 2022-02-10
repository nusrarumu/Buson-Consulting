<?php 
    /*
    Template Name: 404 Page
    */ 
    get_header();
?>

<!--================Content Area =================-->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="404-page">
                <h1 class="page-title"><?php _e( '404', 'buson' ); ?></h1>
                <h1 class="m-3"><?php _e( 'Sorry! Page Not Found', 'buson' ); ?></h1>
                <?php get_search_form(); ?>
                <a href="<?php echo site_url();?>" class="btn btn-primary m-3">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<!--================Content Area =================-->

<?php get_footer();?>