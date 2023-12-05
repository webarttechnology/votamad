<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<section class="footer_sec pt-5 pb-2">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-3 d-none">
                  <!-- <ul>
                     <li><a href="#">Services and Locations</a></li>
                     <li><a href="#">My Patient Portal</a></li>
                     <li><a href="#">Patient Advocate</a></li>
                  </ul> -->
                  <p class="text-white"><?php echo get_field('footer_text',65); ?></p>
               </div>
               <div class="col-md-3 d-none">
                  <ul>
                     <li>Behavioral Health <br> <a href="tel:<?php echo get_field('phone_number',65);?>"><?php echo get_field('phone_number',65);?></a></li>
                     <li>Community Health Centers <br> <a href="mailto:<?php echo get_field('email',65);?>"><?php echo get_field('email',65);?></a></li>
                  </ul>
               </div>
               <div class="col-md-4 text-center">
                  <ul>
                     <li>Call Medical Center <br> <a href="tel:<?php echo get_field('phone_number',65);?>"><?php echo get_field('phone_number',65);?></a></li>
                     <li>Call Community Health Centers <br> <a href="mailto:<?php echo get_field('email',65);?>"><?php echo get_field('email',65);?></a></li>
                  </ul>
               </div>

               <div class="col-md-4 text-center">
                  <h3>Hours of operation</h3>
                  <ul>
                     <li><i class="bi bi-caret-right pe-2"></i> Monday - Friday:  9:00 AM - 5:00 PM</li>
                     <li><i class="bi bi-caret-right pe-2"></i> Saturdays: 9:00 AM - 2:00 PM </li>
                     <li><i class="bi bi-caret-right pe-2"></i> Sundays: Closed</li>
                  </ul>
               </div>



               <div class="col-md-3 d-none">
                  <div class="footlogo">
                     <!-- <img src="images/ft_logo.png" alt=""> --> 
                     <h3 class="text-white text-center">VoltaMed</h3>
                  </div>
                  <ul class="text-center my-4">
                     <li><a href="#">Find Us on Social <i class="bi bi-share-fill"></i> </a></li>
                     <li><a href="#">Giving <i class="bi bi-heart-fill"></i></a></li>
                  </ul>
               </div>
            </div>
            <div class="ftrbtm py-4">
               <div class="row">
                  <div class="col-md-12 text-center">
                     <ul>
                        <li>© 2023 VoltaMed All Rights Reserved</li>
                        <li><a href="#">Privacy Practices </a></li>
                        <li><a href="#">Patient Rights</a></li>
                        <li><a href="#">Terms of Use</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>

         <!-------- JS Files----------> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/js/stellarnav.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            jQuery('.stellarnav').stellarNav({
               theme: 'dark',
               breakpoint: 960,
               position: 'right',
               phoneBtn: '18009997788',
               locationBtn: 'https://www.google.com/maps'
            });
         });
      </script>
      <script>
         $(document).ready(function() {
            $drawerRight = $('.cart-drawer-right');
            $cart_list = $('.cart-drawer-btn, .cart-drawer-close-btn');
               
            $cart_list.click(function() {
               $(this).toggleClass('active');
               $('body').toggleClass('cart-drawer-pushtoleft');
               $drawerRight.toggleClass('cart-drawer-open');
            });
         });
      </script>
		
<?php wp_footer(); ?>

</body>
</html>
