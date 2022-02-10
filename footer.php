<?php
    $footer_details = get_field('footer_details', 'option');
?>

<footer>
       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo $footer_details['footer_logo']['url'];?>" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p><?php echo $footer_details['footer_about'];?></p> 
                               </div>
                            </div> 
                            <!-- social -->
                            <div class="footer-social">  
                                <?php
                                    foreach ($footer_details['footer_socials'] as $footer_social){
                                ?>
                                    
                                    <a href="<?php echo $footer_social['footer_social_url'];?>">
                                        <i class="<?php echo $footer_social['footer_social_icon'];?>"></i>
                                    </a>
                                    
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <?php if (is_active_sidebar('footer-1')) {
                                   dynamic_sidebar( 'footer-1' );
                                    }
                                ?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <?php if (is_active_sidebar('footer-2')) {
                                   dynamic_sidebar( 'footer-2' );
                                    }
                                ?>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                           <?php
                                $footer_contact = get_field('footer_contact', 'option');
                            ?>
                               <h4><?php echo $footer_contact['footer_contact_tittle'];?></h4>
                               <ul>
                                <li><a href="#"><?php echo $footer_contact['footer_phone'];?></a></li>
                                <li><a href="#"><?php echo $footer_contact['footer_email'];?></a></li>
                                <li><a href="#"><?php echo $footer_contact['footer_address'];?></a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- footer-bottom aera -->
       <div class="footer-bottom-area footer-bg">
           <div class="container">
               <div class="footer-border">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-12 ">
                            <div class="footer-copy-right text-center">
                            <?php
                                $footer_copyright = get_field('footer_copyright', 'option');
                            ?>
                            <?php echo $footer_copyright;?>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
       </div>
       <!-- Footer End-->
   </footer>
   
	
        <?php wp_footer();?>
    </body>
</html>