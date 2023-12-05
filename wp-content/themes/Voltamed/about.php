<?php /* Template Name: About */ ?>
<?php
   get_header();
?>

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">About</h1>
                    <div class="divider mx-auto mb-4"></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>

 <section class="aboutsecty py-5">
 	<div class="container">
 		<div class="row">
 			<div class="col-md-6">
 				<div class="aboutsecimg">
 					<img src="<?php echo get_field('about_image'); ?>" alt="">
 				</div>
 			</div>
 			<div class="col-md-6">
 				<div class="aboutcnty">
 					<h3 class="pb-2"><?php echo get_field('about_title'); ?></h3>
					<?php echo get_field('about_content'); ?>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="teamsec pb-5">
 	<div class="container">
 		<div class="hdngsec mb-5">
         	<h4>Our Team</h4>
      	</div>
 		<div class="row">
<!--  			<div class="col-md-3">
 				<div class="teambx text-center mb-5">
 					<div class="teamimg">
 						<img src="https://webbersunited.com/cms/voltamed/wp-content/uploads/2023/07/team1.jpg" alt="">
 					</div>
 					<div class="teamcnt">
 						<p class="py-2">Board President</p>
 						<h5>Letishia Stillwell</h5>
 					</div>
 				</div>
 			</div> -->
			<?php
			$abt = CFS()->get('loop');
                  foreach($abt as $abtimg) {
			?>
			
 			<div class="col-md-3">
 				<div class="teambx text-center mb-5">
 					<div class="teamimg">
 						<img src="<?php echo $abtimg['team_Image'];?>" alt="">
 					</div>
 					<div class="teamcnt">
 						<p class="py-2"><?php echo $abtimg['team_designation'];?></p>
 						<h5><?php echo $abtimg['team_name'];?></h5>
 					</div>
 				</div>
 			</div>
			
			<?php } ?>
<!--  			<div class="col-md-3">
 				<div class="teambx text-center mb-5">
 					<div class="teamimg">
 						<img src="https://webbersunited.com/cms/voltamed/wp-content/uploads/2023/07/team3.jpeg" alt="">
 					</div>
 					<div class="teamcnt">
 						<p class="py-2">Board Vice President</p>
 						<h5>Victoria Varisco-Flores</h5>
 					</div>
 				</div>
 			</div> -->
<!--  			<div class="col-md-3">
 				<div class="teambx text-center mb-5">
 					<div class="teamimg">
 						<img src="https://webbersunited.com/cms/voltamed/wp-content/uploads/2023/07/team4.jpg" alt="">
 					</div>
 					<div class="teamcnt">
 						<p class="py-2">Board President</p>
 						<h5>Letishia Stillwell</h5>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-3">
 				<div class="teambx text-center">
 					<div class="teamimg">
 						<img src="https://webbersunited.com/cms/voltamed/wp-content/uploads/2023/07/team4.jpg" alt="">
 					</div>
 					<div class="teamcnt">
 						<p class="py-2">Andrews Nyanya</p>
 						<h5>Board Secretary</h5>
 					</div>
 				</div>
 			</div>
 			<div class="col-md-3">
 				<div class="teambx text-center">
 					<div class="teamimg">
 						<img src="https://webbersunited.com/cms/voltamed/wp-content/uploads/2023/07/team5.jpeg" alt="">
 					</div>
 					<div class="teamcnt">
 						<p class="py-2">Board Treasurer</p>
 						<h5>Kafui Mensah</h5>
 					</div>
 				</div>
 			</div> -->
 		</div>
 	</div>
 </section>

<?php 
   get_footer();
?>