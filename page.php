<?php
get_header();


?>


<?php if(have_posts()):
while(have_posts()):the_post(); ?>
 <section class="slider d-flex align-items-center">
        <!-- <img src="images/slider.jpg" class="img-fluid" alt="#"> -->
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="slider-title_box">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-content_wrap">
                                    <h1>

<?php the_title(); ?>

</h1>
                                    <h5>Let's uncover the best places to eat, drink, and shop nearest to you.</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                           

                            <div class="col-md-10">
                                
                                    <?php the_content();?>

                               
                            
                                <div class="slider-link">
                                    <a href="#">Browse Popular</a><span>or</span> <a href="#">Recently Addred</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
<?php endwhile;
else:
	echo '<p>No Content Found</p>';
endif;?>

    <?php 
    get_footer();
/* write above here */
?>