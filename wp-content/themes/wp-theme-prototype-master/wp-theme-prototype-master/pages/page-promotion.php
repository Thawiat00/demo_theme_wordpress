<?php 
/**  
*Template Name: promotion
*/ 
?>

<?php get_header(); ?>

<div class="promotion_wrap">
 <div class="container">
    <!-- promotion banner -->
    <section class="main-promotion-banner">
        <img src="<?php echo get_template_directory_uri() ?> /img/main-promotion.jpg" alt="">
    </section>
    <!-- content -->

    <section class="main-promotion-content">
        <article class="page-content">
        <h3>Summer jelly Bag Set</h3>
        <p>User experience hypotheses 
            series A financing supply chain
             pivot mass market leverage conversion prototype.
              Business-to-consumer startup niche market long tail iteration agile development
               direct mailing. Handshake A/B testing termsheet marketing pivot business model canvas.
                Twitter virality low hanging fruit MVP
             founders.
        </p>
        <ul>
            <li>Marketing graphical user interface stock interaction design</li>
            <li>Low hanging fruit A/B testing gen-z branding business plan burn rate termsheet business-to-business bootstrapping. </li>
            <li>Advisor hackathon burn rate accelerator venture incubator.</li>
        </ul>
        </article>
    </section>

    <!-- share -->
    <section class="main-promotion-sharing-center">
        <p>Share to your friends</p>
        <ul class="sharing-list">
            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri()?>/img/icon-facebook_1.png" alt="facebook_share">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri()?>/img/icon-twitter_1.png" alt="twitter_share">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo get_template_directory_uri()?>/img/icon-line_1.png" alt="line_share">
                </a>
            </li>
        </ul>
    </section>
    <section class="main-promotion-related">
        <div class="row">
            <!--banner1 -->
            <div class="col-lg-4">
              <div class="related-item">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/img/promotion-banner1.jpg " alt="promotion_banner1">
                </a>
                <h3><a href="#">Buy 1 Get 1 Free</a></h3>
                <p>12/07/2021</p>
               </div>
            </div>
            <!--banner2 -->
            <div class="col-lg-4">
              <div class="related-item">
              <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/img/promotion-banner2.jpg " alt="promotion_banner1">
                </a>
                <h3><a href="#">Earn 23 Bonus Stars</a></h3>
                <p>10/07/2021</p>
              </div>
            </div>
            <!--banner3 -->
            <div class="col-lg-4">
               <div class="related-item">
                  <a href="#">
                    <img src="<?php echo get_template_directory_uri() ?>/img/promotion-banner3.jpg " alt="promotion_banner1">
                  </a>
                  <h3><a href="#">Choux Cream Dreamland</a></h3>
                  <p>02/07/2021</p>
               </div>
            </div>
        </div>
    </section>

 </div>

</div>

<?php get_footer(); ?>
