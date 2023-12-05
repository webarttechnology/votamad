<?php /* Template Name: Contact Template */

get_header();

?>
<section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">Contact Us</h1>
                    <div class="divider mx-auto mb-4"></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Home</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item"><a href="javascript:void(0)">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>
<section class="m-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <h2>E-mail </h2>
                    <a href="<?php echo get_field('email',65);?>"><?php echo get_field('email',65);?></a>
                </div>    
            </div>
            <div class="col-md-4">
                <div class="card">
                <i class="fa fa-phone-square" aria-hidden="true"></i>
                    <h2>Phone </h2>
                    <a href="<?php echo get_field('phone_number',65);?>"><?php echo get_field('phone_number',65);?></a>
                </div>    
            </div>  
            <div class="col-md-4">
                <div class="card">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h2>Address </h2>
                    <p><?php echo get_field('address',65);?></p>
                </div>    
            </div>           
        </div>
    </div>
</section>
<section class="m-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="c-form">
                    <h2 class="text-center">Leave Us Message</h2>
					<?php echo do_shortcode('[contact-form-7 id="127" title="Contact form 1"]'); ?>
<!--                     <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3 fnme">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3 fnme">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" placeholder="Subject" id="">
                        </div>
                        <div class="mb-3">
                            <label for="">Your Message</label>
                            <textarea type="text" class="form-control" placeholder="Your Message" id=""></textarea>
                        </div>
                        <div class="s-button">
                            <button type="button" class="btn btn-danger">Submit</button>
                        </div>
                    </form> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d423324.9598913211!2d-117.49035299999998!3d34.012403!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcb4f0a3baff8b%3A0x5a5c20b6e63ad725!2s9415%20Mission%20Blvd%20a%2C%20Riverside%2C%20CA%2092509!5e0!3m2!1sen!2sus!4v1690531236732!5m2!1sen!2sus" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();

?>