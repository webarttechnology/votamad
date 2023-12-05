<?php /* Template Name: Covid 19 */

get_header();

 ?>

<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">Covid-19</h1>
                    <div class="divider mx-auto mb-4"></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item">Covid-19</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>


 <section class="mt-5 mb-5">
 	<div class="container">
 		<div class="row justify-content-center">
 			<div class="col-md-8">
				<div class="accordion" id="accordionExample">
					<?php
					$count = 0;
					$accordians = CFS()->get('accordian_loop');
					foreach($accordians as $accordian){
					?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="<?php echo ('heading-'.$count); ?>">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo ('#collapse-'.$count); ?>" aria-expanded="<?php if($count == 0): echo ('true'); else: echo ('false'); endif; ?>" aria-controls="<?php echo ('collapse-'.$count); ?>">
       <?php echo $accordian['accordian_question'];  ?>
      </button>
    </h2>
    <div id="<?php echo ('collapse-'.$count); ?>" class="accordion-collapse collapse <?php if($count == 0): echo ('show'); endif; ?>" aria-labelledby="<?php echo ('heading-'.$count); ?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <?php echo $accordian['accordian_answars'];  ?>
      </div>
    </div>
  </div>
					<?php $count++; } ?>

</div>
				<?php //echo get_field('covid_19_description'); ?>
<!--  				<h2>Who should get tested for COVID-19?</h2>
 				<ul>
 					<li>People who have symptoms of COVID-19</li>
 					<li>People who have had close contact (within 6 feet of an infected person for at least 15 minutes) with someone with confirmed COVID-19</li>
 				</ul>
 				<h2>What should you do if you test positive for COVID-19?</h2>
 				<ul>
 					<li>Self-quarantine/Isolate at home, pending test results</li>
 					<li>Self-quarantine/isolate at home to protect others from illness, if you test positive for COVID-19</li>
 					<li>Follow the advice of your health care provider.</li>
 				</ul>
 				<h2>What does it mean if you test negative for COVID-19?</h2>
 				<ul>
 					<li>If you tested negative for COVID-19, you probably were not infected at the time your sample was collected. The test result only means that you did not have COVID-19 at the time of testing. Continue to take steps to protect yourself.</li>
 				</ul>
 				<h2>Did you know…?</h2>
 				<p>There are two kinds of tests available for COVID-19: Viral tests and Antibody tests.</p>
 				<ul>
 					<li>A viral test tells you if you have a current infection.</li>
 					<li>An antibody test might tell you if you had a past infection.</li>
 				</ul>
 				<h2>What you need to know about COVID-19 testing:</h2>
 				
 				<ul>
 					<li>Open to anyone, with or without symptoms.</li>
 					<li>No out-of-pocket costs to individuals</li>
 					<li>Have health insurance information on-hand, but;</li>
 					<li>Individuals will not share any costs or copay.</li>
 					<li>Testing is still offered if health insurance info is not provided.</li>
 				</ul> -->
 			</div>
 		</div>
 	</div>
 </section>



 <?php get_footer(); ?>