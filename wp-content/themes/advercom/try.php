<div class="owl-carousel home-main">
    <div class="slide slide-1">
        <div class="main-text" style="background-image: url('/stratium-adv/wp-content/uploads/2018/10/slider-sample-bg.jpg')">
            <div class="inner-text">
                <h2>Reach a Bigger Market</h2>
                <h4><span>Try OOH [ Out-of-home Advertising ]</span></h4>
            </div>
        </div>
        <div class="sub-text has-dots">
            <div class="small-image">
                <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-ooh.svg">
            </div>
            <div class="text">
                <div class="first">
                    <p>Let the public know that you exist!</p>
                </div>
                <div class="big-image">
                    <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-ooh.svg">
                </div>
                <div class="last">
                    <p>Discover the power of OOH.</p>
                    <a href="#" title="Contact Us" class="circular-button">Contact Us for More Info</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-2">
        <div class="main-text" style="background-image: url('/stratium-adv/wp-content/uploads/2018/10/slider-sample-bg.jpg')">
            <div class="inner-text">
                <h2>Make your name recognizable</h2>
                <h4><span>Get a Distinct Signage</span></h4>
            </div>
        </div>
        <div class="sub-text has-dots">
            <div class="small-image">
                <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-signages.svg">
            </div>
            <div class="text">
                <div class="first">
                    <p>Discover the power of Signages.</p>
                </div>
                <div class="big-image">
                    <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-signages.svg">
                </div>
                <div class="last">
                    <p>Get Noticed!</p>
                    <a href="#" title="Contact Us" class="circular-button">Contact Us for More Info</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-3">
        <div class="main-text" style="background-image: url('/stratium-adv/wp-content/uploads/2018/10/slider-sample-bg.jpg')">
            <div class="inner-text">
                <h2>Let People See Your Content</h2>
                <h4><span>Avail our Large Format Printing Services</span></h4>
            </div>
        </div>
        <div class="sub-text has-dots">
            <div class="small-image">
                <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-large-format-printing.svg">
            </div>
            <div class="text">
                <div class="first">
                    <p>vibrant, high quality printing!</p>
                </div>
                <div class="big-image">
                    <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-large-format-printing.svg">
                </div>
                <div class="last">
                    <p>Need Large Format Printing?</p>
                    <a href="#" title="Contact Us" class="circular-button">Contact Us for More Info</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-4">
        <div class="main-text" style="background-image: url('/stratium-adv/wp-content/uploads/2018/10/slider-sample-bg.jpg')">
            <div class="inner-text">
                <h2>You think it. We build it.</h2>
                <h4><span>Avail our Kiosk & Module Fabrication Services</span></h4>
            </div>
        </div>
        <div class="sub-text has-dots">
            <div class="small-image">
                <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-kiosk-and-module-fabrication.svg">
            </div>
            <div class="text">
                <div class="first">
                    <p>Furnitures, Carts, and More!</p>
                </div>
                <div class="big-image">
                    <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-kiosk-and-module-fabrication.svg">
                </div>
                <div class="last">
                    <p>Got something in mind?</p>
                    <a href="#" title="Contact Us" class="circular-button">Contact Us for More Info</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slide slide-5">
        <div class="main-text" style="background-image: url('/stratium-adv/wp-content/uploads/2018/10/slider-sample-bg.jpg')">
            <div class="inner-text">
                <h2>Need a Snug Office Space?</h2>
                <h4><span>Avail our Interior Fitouts Services</span></h4>
            </div>
        </div>
        <div class="sub-text has-dots">
            <div class="small-image">
                <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-interior-fitouts.svg">
            </div>
            <div class="text">
                <div class="first">
                    <p>Modern & lively business spaces?</p>
                </div>
                <div class="big-image">
                    <img src="/stratium-adv/wp-content/themes/pao/assets/images/advercom/white-icon-interior-fitouts.svg">
                </div>
                <div class="last">
                    <p>Try our Interior Services!</p>
                    <a href="#" title="Contact Us" class="circular-button">Contact Us for More Info</a>
                </div>
            </div>
        </div>
    </div>
</div>

<h1 class="blog-title">
    <a href="<?php echo get_bloginfo( 'wpurl' );?>">
        <?php echo get_bloginfo( 'name' ); ?>
    </a>
</h1>


if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        get_template_part( 'content', get_post_format() );
    endwhile;
endif;

