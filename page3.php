<?php
require "init.php";

if( !isset($_SESSION['new_sess']) ){
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

if( isset($_POST['p_budge']) ){
    App\Session::sess_create([
        'p_budge'                   => $_POST['p_budge'],
        'have_quote_others_company' => $_POST['have_quote_others_company'],
        'about_project'             => $_POST['about_project']
    ]);
}
else{
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

include "inc/header.php";
?>
<section id="sub_header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
            	<div class="main_title">
                    <h1>LET US KNOW ABOUT YOU</h1>
                    <p>Your information is secured and highly confidential with us only.</p>
                </div>
			</div>
		</div>
	</div>
</section><!-- End section -->
<section class="form_section">
	<div class="container margin_60 form_container">
    <div class="row">

        <div class="col-md-9 col-sm-12">
            <form id="quotation" action="certificate.php" method="POST">
                <div class="form_title">
                    <h3><strong><i class="fa fa-user"></i></strong>Personal info</h3>
                </div>
                <div class="step">
                	<div class="row">
                		<div class="col-md-12 col-sm-12">
                			<div class="form-group strong_text">
                				<strong>Please complete this Form in order to receive your $1000.00 Credit Certificate towards your project.</strong>
                			</div>
                		</div>
                	</div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>First name</label>
                                <input type="text" class="form-control required" id="f_name" name="f_name" placeholder="Enter your First Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control required" id="l_name" name="l_name" placeholder="Enter your Last Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter company name if any">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control required" id="phone_no" name="phone_no" placeholder="The best number to contact you" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>ALT NUMBER</label>
                                <input type="text" class="form-control" id="alt_phone_no" name="alt_phone_no" placeholder="Enter any other contact number">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control required" id="email_address" name="email_address" placeholder="Enter your email number" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End step -->

                <div class="form_title">
                    <h3><strong><i class="fa fa-pencil"></i></strong>Contact Info</h3>
                </div>
                <div class="step">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control required" name="address" id="address" placeholder="House Number & Street Name" required>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                    	<div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>AREA</label>
                                <input type="text" id="area" name="area" class="form-control" placeholder="what is your Area/community name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city" name="city" class="form-control required" placeholder="Enter City name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" id="country" name="country" class="form-control required" placeholder="Enter Country Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>GPS CORDINATES</label>
                                <input type="text" id="gps_cordinates" name="gps_cordinates" class="form-control" placeholder="what is your Area/community name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>Comments</label>
                                <textarea class="form-control" name="comments" rows="5" placeholder="Let us know anything about your project if you have any or any instructions"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                        	<div class="form-group message_text">
                        		<label for="" class="control-label"><strong>Please contact Yehans International If you have any questions at +233 302 51 2525</strong>
                                </label>
                        	</div>
                        </div>                        
                    </div>
                    <button type="submit" class="btn_1 medium">Let me have my Certificate NOW</button>
                    <!--End row -->
                </div>

            </form>
        </div>
        

        <div class="col-md-3 col-sm-9">
            <?php include "inc/sidebar.php"; ?>
        </div>
        

    </div>
    <!-- End row -->
</div>
</section>





<?php
    include "inc/footer.php";
?>