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

include "inc/mail.config.php";

include "inc/header.php";
?>
    <section class="certificate_section">
        <div class="container">
            <div class="main_certificate">
                <div class="certificate_all_content">
                    <div class="certificate_icon">
                        <div class="certificate_icon_left">
                            <i class="fa fa-snowflake-o"></i>
                        </div>
                        <div class="certificate_icon_right">
                            <i class="fa fa-snowflake-o"></i>
                        </div>
                    </div>
                    <div class="certificate_title">
                        <h1>CERTIFICATE OF CREDIT</h1>
                        <h3>This is to certify that</h3>
                        <h2><?php echo strtoupper(\App\Session::sess_get_fullname()); ?></h2>
                        <div class="certificate_image">
                            <img src="images/certi_logo.png" alt="">
                        </div>
                    </div>
                    <div class="certificate_body">
                        <p>Has been issued <u>$1000.00 USD</u> to be used towards up coming projects with Yehans International Company Limited. In accordance with our company Policies, the credit would be applied towards the final estimate price of the project. The Commencement of the project validates the certificate of credit. The certificate of Credit is Valid with the First month of Issue. An extension would be granted on a case to case situation. The credit certificate is Valid for any project of <u>$10,000 USD</u> or more. Any additional discounts provided by Yehans International due to promotional sales can be approved or declined by the sales Manager responsible for the project.</p>
                    </div>
                    <div class="certificate_footer">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="certificate_footer_content">
                                    <h2>Issue Date</h2>
                                    <p><?php echo date('d-m-Y'); ?></p>
                                </div>
                                <div class="certificate_footer_image">
                                    <img src="images/logo.jpg">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="footer_content certificate_footer_address">
                                    <p>Certification Number</p>
                                    <ul>
                                        <li><strong><u><?php echo $_SESSION['_can']; ?></u></strong></li>
                                    </ul>
                                    <p>Yehans International</p>
                                    <ul>
                                        <li>P. O. Box CT 5341, Cantonments, Accra.</li>
                                        <li>Local: 0 302 512 525</li>
                                        <li>International: +233 302 51 2525</li>
                                        <li> 
                                            <a href="mailto:info@yehansinternational.com">info@yehansinternational.com
                                            </a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="certificate_bottom_icon">
                        <div class="certificate_bottom_icon_left">
                            <i class="fa fa-snowflake-o"></i>
                        </div>
                        <div class="certificate_bottom_icon_right">
                            <i class="fa fa-snowflake-o"></i>
                        </div>
                    </div>
                </div>

                <form action="http://pdfy.net/convert-url-to-pdf.aspx" method="POST">
                    <input type="hidden" name="__VIEWSTATE" value="/wEPDwULLTIwMTAzNDc4OTZkZMC+uGGm8GWZOsAUyXkTeBOXjj2dfF+X/WmZfQS65ep0">
                    <input type="hidden" name="__VIEWSTATEGENERATOR" value="CB4902C0">
                    <input type="hidden" name="__EVENTVALIDATION" value="/wEdABAuQDteDOKhj+mwplL6xF/Qj55NMHCcZ+51Zz1AVv2R2tDSrJHHz7Q737CjoPnQgCLHHl9VAFGYECw2g2XSGwKHAlCBm35TN0vdbDYfHJ4qXiqiEz500JGKEADKqIHnglbTe7fkyWFvapUFCYJVo+i8wdZ6J05sLh7tQoyFDkQlc5cccJGKFwdGY1gMee+upf+T8dCvOJPGpquA/mxdfgYpPKZtr5H87XkzjaM+aeWl0qXWYNAbjzKN5n3TJ8MtF/RR8X38g90hHp9NYONM2EOm6cZ340TUOPsukudAsuEletfPAiOTPe0CaMzV3wooQw/oAEb+8VDRRWod+XHja9KYfXa/eMBdFspEu3qbpQZUyU/hhDuqZ498tShBdg+kiGc=">
                    <input type="hidden" name="ctl00$mainContent$TxtUrl" value="http://localhost/sales-funnel/random_certificate.php">
                    <input type="hidden" name="ctl00$mainContent$DdlPageSize" value="A4">
                    <input type="hidden" name="ctl00$mainContent$DdlPageOrientation" value="Portrait">
                    <input type="hidden" name="ctl00$mainContent$TxtWidth" value="1024">
                    <input type="hidden" name="ctl00$mainContent$TxtHeight" value="">
                    <input type="hidden" name="ctl00$mainContent$BtnCreatePdf" value="Create PDF">
                    <button type="submit" style="text-align: center;margin: 30px auto;display: block;padding: 10px 60px;border: 1px solid #c34999;background: #c34999;color: #fff;">DOWNLOAD</button>
                </form>


            </div>
        </div>
    </section>
<?php
    include "inc/footer.php";

    ob_start();
        include "inc/header.php";
        ?>
        <section class="certificate_section">
            <div class="container">
                <div class="main_certificate">
                    <div class="certificate_all_content">
                        <div class="certificate_icon">
                            <div class="certificate_icon_left">
                                <i class="fa fa-snowflake-o"></i>
                            </div>
                            <div class="certificate_icon_right">
                                <i class="fa fa-snowflake-o"></i>
                            </div>
                        </div>
                        <div class="certificate_title">
                            <h1>CERTIFICATE OF CREDIT</h1>
                            <h3>This is to certify that</h3>
                            <h2><?php echo strtoupper(\App\Session::sess_get_fullname()); ?></h2>
                            <div class="certificate_image">
                                <img src="images/certi_logo.png" alt="">
                            </div>
                        </div>
                        <div class="certificate_body">
                            <p>Has been issued <u>$1000.00 USD</u> to be used towards up coming projects with Yehans International Company Limited. In accordance with our company Policies, the credit would be applied towards the final estimate price of the project. The Commencement of the project validates the certificate of credit. The certificate of Credit is Valid with the First month of Issue. An extension would be granted on a case to case situation. The credit certificate is Valid for any project of <u>$10,000 USD</u> or more. Any additional discounts provided by Yehans International due to promotional sales can be approved or declined by the sales Manager responsible for the project.</p>
                        </div>
                        <div class="certificate_footer">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="certificate_footer_content">
                                        <h2>Issue Date</h2>
                                        <p><?php echo date('d-m-Y'); ?></p>
                                    </div>
                                    <div class="certificate_footer_image">
                                        <img src="images/logo.jpg">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="footer_content certificate_footer_address">
                                        <p>Certification Number</p>
                                        <ul>
                                            <li><strong><u><?php echo $_SESSION['_can']; ?></u></strong></li>
                                        </ul>
                                        <p>Yehans International</p>
                                        <ul>
                                            <li>P. O. Box CT 5341, Cantonments, Accra.</li>
                                            <li>Local: 0 302 512 525</li>
                                            <li>International: +233 302 51 2525</li>
                                            <li> 
                                                <a href="mailto:info@yehansinternational.com">info@yehansinternational.com
                                                </a> 
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="certificate_bottom_icon">
                            <div class="certificate_bottom_icon_left">
                                <i class="fa fa-snowflake-o"></i>
                            </div>
                            <div class="certificate_bottom_icon_right">
                                <i class="fa fa-snowflake-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
            include "inc/footer.php";
    $databaseHTML = ob_get_clean();
    
    $file = fopen("random_certificate.php","w");
    fwrite($file,$databaseHTML);
    fclose($file);

?>
