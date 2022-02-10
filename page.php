<?php 
    /*
    Template Name: Page Page
    */ 
    get_header();
?>
<!-- Breadcumb Area Start-->
<?php get_template_part( 'template-parts/partials/content', 'breadcumb' ); ?>
<!-- Breadcumb Area End-->

<section class="custom-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4><?php the_title();?></h4>
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>