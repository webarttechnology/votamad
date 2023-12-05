<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
while(have_posts()):the_post();
?>
<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize"><?php the_title(); ?></h1>
                    <div class="divider mx-auto mb-4"></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>


  <section class="aboutsecty py-5">
    <div class="container">
        <div class="row">
            <?php if(get_the_post_thumbnail_url(get_the_ID()) !=''){ ?>
            <div class="col-md-6">
                <div class="aboutsecimg">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());  ?>" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutcnty">
                    <h3 class="pb-2"><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            </div>
        <?php } 
        else{
            ?>
               <div class="col-md-12">
                <div class="aboutcnty">
                    <?php the_content(); ?>
                </div>
            </div>
       <?php  
            }


        ?>
        </div>
    </div>
 </section>


<?php
endwhile;


get_footer();
