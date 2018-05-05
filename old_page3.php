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
    <section class="infor_form_header">
        <div class="container">
            <div class="info_form_title">
                <h1>LET US KNOW ABOUT YOU</h1>
                <h2>Your information is secured and highly confidential with us only.</h2>
            </div>
        </div>
    </section>
    <section class="info_form_section">
        <div class="container">
            <div class="main_info_form">
                <div class="info_form_body">
                    <p>Please complete this Form in order to receive your $1000.00 Credit Certificate towards your project. </p>
                    <form action="certificate.php" method="post">
                        <div class="row">
                            <div class="form-group">
                                <label for="f_name" class="col-md-2 control-label">First Name
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="f_name" id="f_name" placeholder="Enter your First Name" required>
                                </div>
                                <label for="l_name" class="col-md-2 control-label">Last Name</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Enter your Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_name" class="col-md-2 control-label">Company Name
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="company_name" id="company_name" placeholder="Enter company name if any">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone_no" class="col-md-2 control-label">Phone Number
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="The best number to contact you" required>
                                </div>
                                <label for="alt_phone_no" class="col-md-2 control-label">ALT NUMBER</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="alt_phone_no" name="alt_phone_no" placeholder="Enter any other contact number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email_address" class="col-md-2 control-label">Email Address
                                </label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email_address" id="email_address" placeholder="Enter your email number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-2 control-label">Address
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="House Number & Street Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="area" class="col-md-2 control-label">AREA 
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="area" id="area" placeholder="what is your Area/community name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" class="col-md-2 control-label">City
                                </label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="city" id="city" placeholder="Enter City name" required>
                                </div>
                                <label for="country" class="col-md-2 control-label">Country</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gps_cordinates" class="col-md-2 control-label">GPS CORDINATES 
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="gps_cordinates" id="gps_cordinates" placeholder="what is your Area/community name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="comments" class="col-md-2 control-label">Comments 
                                </label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="comments" rows="4" placeholder="Let us know anything about your project if you have any or any instructions"></textarea>
                                </div>
                            </div>
                            <div class="form-group label_text">
                                <label for="gps_cordinates" class="col-md-12 control-label">Please contact Yehans International If you have any questions at +233 302 51 2525 
                                </label>
                            </div>
                            <div class="form-group info_form_button col-md-12">
                                <button type="submit">Let me have my Certificate NOW </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
    include "inc/footer.php";
?>