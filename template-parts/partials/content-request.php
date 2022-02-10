<?php
    $request_title = get_field('request_title', 'option');
    $request_description = get_field('request_description', 'option');
    $request_button_url = get_field('request_button_url', 'option');
    $request_button_text = get_field('request_button_text', 'option');
?>

<!-- Request Back Start -->
<div class="request-back-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-8 mx-auto text-center">
                        <div class="request-content">
                            <h3><?php echo $request_title;?></h3>
                            <p><?php echo $request_description;?></p>
                            <a href="<?php echo $request_button_url;?>" class="btn trusted-btn"><?php echo $request_button_text;?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Request Back End -->