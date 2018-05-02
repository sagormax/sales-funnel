<?php
require "init.php";

if( !isset($_SESSION['new_sess']) ){
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

if( isset($_POST['f_name']) ){
    App\Session::sess_create($_POST);
    $_SESSION['_can'] = time().date('/m/Y');
}
else{
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

include "inc/header.php";
?>
    <section class="certificate_section">
        <div class="container">
            <div class="main_certificate">
                <div class="certificate_all_content">
                    <div class="certificate_title">
                        <h1>CERTIFICATE OF CREDIT</h1>
                        <h3>This is to certify that</h3>
                        <h2><?php echo strtoupper(\App\Session::sess_get_fullname()); ?></h2>
                    </div>
                    <div class="certificate_body">
                        <p>Has been issued $1000.00 USD to be used towards up coming projects with Yehans International Company Limited.<br><br> In accordance with our company Policies, the credit would be applied towards the final estimate price of the project. The Commencement of the project validates the certificate of credit.<br><br> The certificate of Credit is Valid with the First month of Issue. An extension would be granted on a case to case situation. The credit certificate is Valid for any project of $10,000 USD or more.<br><br> Any additional discounts provided by Yehans International due to promotional sales can be approved or declined by the sales Manager responsible for the project.</p>
                    </div>
                    <div class="certificate_footer">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="certificate_footer_content">
                                    <h2>Issue Date</h2>
                                    <p><?php echo date('d-m-Y'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="certificate_footer_content">
                                    <h2>Certification Approval Number</h2>
                                    <p><?php echo $_SESSION['_can']; ?></p>
                                </div>
                            </div>
                        </div><div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="certificate_footer_image">
                                    <img src="images/badge22.png">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="footer_content">
                                    <p>Yehans International</p>
                                    <ul>
                                        <li>P. O. Box CT 5341</li>
                                        <li>Cantonments, Accra.</li>
                                        <li>Local: 0 302 512 525</li>
                                        <li>International: +233 302 51 2525</li>
                                        <li>Email: info@yehansinternational.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include "inc/footer.php";
?>