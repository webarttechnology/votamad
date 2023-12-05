<?php /* Template Name: Home */ ?>
<?php
   get_header();
?>

<section class="brnsec" style="background-image: url(<?php echo get_field('banner_img'); ?>); !important">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="info">
               <h1><?php echo get_field('banner_hdng'); ?></h1>
               <p><?php echo get_field('banner_para'); ?></p>
               <div class="btnprt pt-3">
                  <a href="<?php echo get_field('banner_button_link'); ?>" class="cmnbtn"><?php echo get_field('banner_button_text'); ?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="vsrty_sec">
   <div class="container">
      <div class="lkng_sec">
         <div class="row">
            <div class="col-md-10">
               <form action="">
                  <div class="mb-3 posty">
                     <input type="text" class="form-control" placeholder="I'm looking for">
                     <div class="icny">
                        <i class="fa fa-search" aria-hidden="true"></i>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-md-2">
               <div class="btnprt">
                  <a href="#" class="cmnbtn">Search</a>
               </div>
            </div>
         </div>
         <div class="icnsec pt-3 text-center">
            <div class="row justify-content-center">
               <?php 
                  $fields = CFS()->get( 'search_section_loop' );
                  foreach ( $fields as $field ) {
                  
                  ?>
               <div class="col-md-3">
                  <div class="icnybxzy">
                     <img src="<?php echo $field['search_section_loop_img'];?>" alt="">
                  </div>
                  <p class="py-3"><?php echo $field['search_section_loop_content'];?></p>
               </div>
               <?php } ?>
               <!-- <div class="col-md-2">
                  <div class="icnybxzy">
                     <img src="<?php echo get_template_directory_uri();?>/images/img2.png" alt="">
                  </div>
                  <p class="py-3">Consultation</p>
                  </div>
                  <div class="col-md-2">
                  <div class="icnybxzy">
                     <img src="<?php echo get_template_directory_uri();?>/images/img3.png" alt="">
                  </div>
                  <p class="py-3">Highest Quality</p>
                  </div>
                  <div class="col-md-2">
                  <div class="icnybxzy">
                     <img src="<?php echo get_template_directory_uri();?>/images/img4.png" alt="">
                  </div>
                  <p class="py-3">Always Smiling</p>
                  </div>
                  <div class="col-md-2">
                  <div class="icnybxzy">
                     <img src="<?php echo get_template_directory_uri();?>/images/img5.png" alt="">
                  </div>
                  <p class="py-3">Lorem Ipsum Dolor</p>
                  </div>
                  <div class="col-md-2">
                  <div class="icnybxzy">
                     <img src="<?php echo get_template_directory_uri();?>/images/img6.png" alt="">
                  </div>
                  <p class="py-3">Lorem Ipsum Dolor</p>
                  </div> -->
            </div>
         </div>
      </div>
   </div>
</section>
<section class="mybox py-5">
   <div class="container">
      <div class="row">
         <?php 
            $cmnbxs = CFS()->get('common_box_loop');
            foreach ( $cmnbxs as $cmnbx ) {
            
            ?> 
         <div class="col-md-4">
            <div class="hoverbx">
               <img src="<?php echo $cmnbx['common_box_img'];?>" alt="">
               <div class="hovercnt">
                  <h3><?php echo $cmnbx['common_box_hdng'];?></h3>
                  <p class="pt-1"><?php echo $cmnbx['common_box_para'];?></p>
               </div>
            </div>
         </div>
         <?php } ?>
         <!-- <div class="col-md-4">
            <div class="hoverbx">
               <img src="<?php echo get_template_directory_uri();?>/images/bx1.jpg" alt="">
               <div class="hovercnt">
                  <h3>Healthy Individuals</h3>
                  <p class="pt-1">Volta Medical group (VoltaMed) is a California professional medical corporation with the focus of rendering primary, family and specialty clinic services to all individuals regardless of race, ethnicity, religion, creed, sexuality or socioeconomic status.</p>
               </div>
            </div>
            </div>
            <div class="col-md-4">
            <div class="hoverbx">
               <img src="<?php echo get_template_directory_uri();?>/images/bx1.jpg" alt="">
               <div class="hovercnt">
                  <h3>Healthy Community</h3>
                  <p class="pt-1">Volta Medical group (VoltaMed) is a California professional medical corporation with the focus of rendering primary, family and specialty clinic services to all individuals regardless of race, ethnicity, religion, creed, sexuality or socioeconomic status.</p>
               </div>
            </div>
            </div> -->
      </div>
   </div>
</section>
<section class="covid_sec" style="background-image: url(<?php echo get_field('family_img'); ?>); !important">
   <div class="container">
      <div class="row">
         <div class="col-md-7">
            <div class="info">
               <h1><?php echo get_field('family_hdng'); ?></h1>
               <p><?php echo get_field('family_para'); ?></p>
               <div class="btnprt pt-3">
                  <a href="<?php echo get_field('family_button_link');?>" class="cmnbtn"><?php echo get_field('family_button_text');?></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="locn_sec">
   <div class="container-fluid">
   <div class="row">
      <div class="col-md-5 ps-5">
         <div class="hdngsec py-5">
            <h4>About VoltaMed</h4>
         </div>
         <div class="locncnt">
            <h5><?php echo get_field('about_hdng'); ?></h5>
            <p><?php echo get_field('about_cnt'); ?></p>
         </div>
      </div>
      <div class="col-md-7 px-0">
         <div class="mapsec">
            <?php echo get_field('about_map'); ?>
         </div>
      </div>
   </div>
</section>
<section class="resrc_sec py-5">
   <div class="container">
      <div class="hdngsec mb-5">
         <h4>Resources</h4>
      </div>
      <div class="row justify-content-center">
		  <?php 
                  $rsrbxs = CFS()->get('resource_box_loop');
                  foreach($rsrbxs as $rsrbx) {
                  
                  ?>
         <div class="col-md-2 col-sm-3">
<!--             <div class="icnmain pt-3"> -->
                
               <div class="icnybx mb-5">
                  <a href="#">
                     <div class="icnimg">
                        <img src="<?php echo $rsrbx['resource_box_image'];?>" alt="">
                     </div>
                     <h5>
                  <a href="#"><?php echo $rsrbx['resource_box_hdng'];?></a></h5>
                  <p><?php echo $rsrbx['resource_box_content'];?></p>
                  </a>
               </div>
                                    
               
<!--             </div> -->
            <div class="icnmain">
               <?php 
                 // $boxrsrs = CFS()->get('resource_scnd_box_loop');
               //   foreach($boxrsrs as $borsr) {
                  
                  ?>
<!--                <div class="icnybx mb-5">
                  <a href="#">
                     <div class="icnimg">
                        <img src="<?php //echo $borsr['resource_scnd_box_img'];?>" alt="">
                     </div>
                     <h5>
                  <a href="#"><?php //echo $borsr['resource_scnd_box_hdng'];?></a></h5>
                  <p><?php //echo $borsr['resource_box_content'];?></p>
                  </a>
               </div> -->
               <?php //} ?> 
            </div>
         </div>
		  <?php } ?>
      </div>
   </div>
</section>

<?php 
   get_footer();
?>