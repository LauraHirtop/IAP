<?php get_header(); ?>

<main>

    <div class="containerabout" id = "about">
        <div class="mainpart">
            <div class="card"><img src="/images/aboutcard.jpg" alt="image">
            </div>
            <div class="textabout">Duils mollis, est non commodo luctus, nisi erat portitor ligula, eget lacinia odio sem nec elit.</div>
        </div>
        <div class="sixpack"></div>
    </div>

    <div class="containerwork" id = "works">
    	Works
    </div>


    <div class="containeropinions">
        <div class="ourteam">
            <img src="images/Iconteam.jpg" alt="icon">
            <h2>MEET OUR TEAM</h2>
                <div class="slideshow-container">
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <div class="mySlides fade">
                        <span><?php get_template_part( 'template/card' );?></span>
                        <span><?php get_template_part( 'template/card' );?></span>
                        <span><?php get_template_part( 'template/card' );?></span>
                    </div>

                    <div class="mySlides fade">
                    <span><?php get_template_part( 'template/card' );?></span>
                    <span><?php get_template_part( 'template/card' );?></span>
                    <span><?php get_template_part( 'template/card' );?></span>
                    </div>

                    <div class="mySlides fade">
                    <span><?php get_template_part( 'template/card' );?></span>
                    <span><?php get_template_part( 'template/card' );?></span>
                    <span><?php get_template_part( 'template/card' );?></span>
                    </div>

                <!-- Next and previous buttons -->
                
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
        </div>

        <div>
            <h3>Testimonials</h3>
        </div>
    </div>
</main>

<?php get_footer(); ?>