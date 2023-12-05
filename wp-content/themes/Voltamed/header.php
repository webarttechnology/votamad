<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
     
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      <!------Custom CSS------->
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css">
      <!------Responsive CSS------->
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/stellarnav.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section class="header_sec pt-3 pb-4">
         <div class="container">
            <div class="hdrtop">
               <div class="row align-items-center">
                  <div class="col-md-2">
                     <div class="hdlogo">
                        <a href="<?php echo get_site_url(); ?>">
                          <img src="<?php echo get_field('site_logo',65);?>" alt="">
                        </a>
                     </div>
                     <h5 class="text-center">VoltaMed</h5>
                  </div>
                  <div class="col-md-10 text-end">
                     <div class="tp_menu d-inline-block me-2">
                        <ul>
                           <li><a href="#">Find Your Way <i class="fa fa-map-o ms-2" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li><a href="#">My Patient Portal <i class="bi bi-arrow-right ms-2"></i>
                              </a>
                           </li>
                           <li><a href="#">Giving <i class="bi bi-heart-fill ms-2"></i></a></li>
                           <li><a href="#">Find Us on Social <i class="bi bi-share-fill ms-2"></i> </a></li>
                        </ul>
                     </div>
                     <div class="srchbr d-inline-block">
                        <form action="">
                           <input type="text" class="form-control" placeholder="Search">
                           <div class="icn">
                              <i class="fa fa-search" aria-hidden="true"></i>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="hdrbtm mt-4">
               <div class="row align-items-center">
                  <div class="col-md-10">
                     <div class="stellarnav">
                        <!-- <ul>
                           <li>
                              <a href="" class="active">HOME</a>
                              <ul>
                                 <li><a href="#">Option 1</a></li>
                                 <li><a href="#">Option 2</a></li>
                                 <li><a href="#">Option 3</a></li>
                                 </ul>
                           </li>
                           <li>
                              <a href="">ABOUT</a>
                           </li>
                           <li><a href="">OUR SERVICES</a></li>
                           <li>
                              <a href="">COVID-19</a>
                           </li>
                           <li>
                              <a href="">PATIENT</a>
                           </li>
                           <li>
                              <a href="">BLOG</a>
                           </li>
                           <li><a href="">DONATION</a></li>
                        </ul> -->
                         <?php wp_nav_menu( array('menu' => 'Footer_Menu', 'container' => '', 'items_wrap' => '<ul>%3$s</ul>' )); ?>
                     </div>
                  </div>
                  <div class="col-md-2">
                        <a href="<?php echo get_site_url(); ?>/contact" class="slctbtn">Contact Us</a>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>