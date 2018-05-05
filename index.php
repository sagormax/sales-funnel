<?php
require "init.php";

App\Session::sess_destroy();

include "inc/header.php";
?>
    <header class="header_section" id="header">
        <div class="container">
            <div class="header_content">
                <div class="header_contetn_info text-center">
                    <h1>Enter Your email to collect $1000.00 FREE Certificate of credit towards your next building project.</h1>
                    <form action="page2.php" method="post">
                        <input type="email" name="url" placeholder="Your Email Address" required>
                        <button type="submit">START NOW</button>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <section class="process_section">
      <div class="container">
        <div class="process_content">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h2>Are you Ready for your Next Project?</h2>
                </div>
                <div class="col-md-4 col-sm-4">
                    <a class="scrollto" href="#contact">Contact Us now</a>
                </div>
            </div>          
        </div>
      </div>
    </section>

    <section class="services_section" id="my_service">
        <div class="container">
            <div class="main_service">
                <div class="service_title ">
                    <h2>OUR <span>ASSURANCES</span></h2>
                </div>
                <div class="service_all_content">
                    <div class="row">
                        <div class="col-md-7 col-sm-6">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="service_content">
                                        <i class="fa fa-lightbulb-o"> </i>
                                        <div class="media-left">
                                          <h6>QUICK IN RESPONSE</h6>              
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="service_content">
                                        <i class="fa fa-certificate"> </i>
                                        <div class="media-left">
                                          <h6>SATISFACTION GUARANTEE</h6>              
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-6 col-sm-6">
                                    <div class="service_content">
                                        <i class="fa fa-desktop"> </i>
                                        <div class="media-left">
                                          <h6>COMPETITIVE QUOTATIONS</h6>              
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="service_content">
                                        <i class="fa fa-wrench"> </i>
                                        <div class="media-left">
                                          <h6>INDUSTRY KNOWLEDGE AND EXPERTISE</h6>              
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="service_content">
                                        <i class="fa fa-search"> </i>
                                        <div class="media-left">
                                          <h6>PROFESSIONAL APPROACH</h6>              
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="service_content">
                                        <i class="fa fa-cogs"> </i>
                                        <div class="media-left">
                                          <h6>HIGHT QUALITY WORK</h6>              
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="service_content_image">
                                <img src="images/services.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mail_content_section">
        <div class="mail_rgba">
            <div class="container">
                <div class="mail_content">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4">
                            <div class="mail_content_title">
                                <h2>RECEIVE $1000 DOLLARS FOR FREE</h2>
                            </div>
                            <div class="mail_content_body text-white">
                                <p>Enter Your email to collect $1000.00 FREE Certificate of credit towards your next building project. Depending on the scope of your project, you can receive up to 20% additional discount for your first installation project with Yehans International. Restrictions may apply. </p>
                                <a class="scrollto" href="#header">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial_section">
        <div class="container">
            <div class="main_testimonial">
                <div class="testimonial_title">
                    <h2>TESTIMONIALS</h2>
                </div>
                <div class="testimonial_all_content">
                    <div class="row">
                        <div class="responsive">
                            <div class="col-md-4">
                                <div class="testimonial_content text-center">
                                    <div class="testimonial_image">
                                        <img src="images/client/testimonial-1.jpg" alt="">
                                    </div>
                                    <div class="testimonial_details">
                                        <p>
                                        Yehans International , is a renowned expert in the manufacturing and installation of doors and windows, 
                                        garage doors and other new product engineering like the Building management solutions, 
                                        secuirty systems, and Energy Savings and Audit solutions. They have a unique and
                                        enviable ability to immediately connect with clients ideas, and
                                        turn those ideas into realities. The firm is especially skilled at 
                                        developing products that are economic to manufacture, yet offer high value.
                                        </p>
                                        <h4>Dr. KK Sarpong</h4>
                                        <h5>Ghana National Petroleum</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial_content text-center">
                                    <div class="testimonial_image">
                                        <img src="images/client/testimonial-2.jpg" alt="">
                                    </div>
                                    <div class="testimonial_details">
                                        <p>
                                            I absolutely can not stop smiling, I can't believe I just watched one of my dreams come to life because of you guys.
                                            I wish I could describe this feeling. It building looks incredible and the secuirty systems has given me some peace of mind.
                                        </p>
                                        <h4>Hon. John Abdulai Jinapor</h4>
                                        <h5>Electricity Company of Ghana</h5>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial_content text-center">
                                    <div class="testimonial_image">
                                        <img src="images/client/testimonial-3.jpg" alt="">
                                    </div>
                                    <div class="testimonial_details">
                                        <p>
                                            We save our toughest projects for Yehans International . 
                                            They understand our business and are pros at utilizing their technical creativity to consistently 
                                            deliver effective and produce great finish works for all our projects. They literally translate our ideas into reality. 
                                            There are a lot of companies who say they can, Yehans International  is one of a very few who really can.
                                        </p>
                                        <h4>Mrs. Abiola Bawuah</h4>
                                        <h5>Regional CEO for West Africa, UBA</h5>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial_content text-center">
                                    <div class="testimonial_image">
                                        <img src="images/client/testimonial-4.jpg" alt="">
                                    </div>
                                    <div class="testimonial_details">
                                        <p>
                                            I would like to thank Mr. Yeboah and the team for a great work done on our windows and doors installations. 
                                            I came to them with a very minimal concept of what I wanted and they designed and installed the best quality Windows and 
                                            doors within my budget..They had the forsight to see possible issues I could have in the future and came up with solutions
                                            that will save me a redesign in the future. This is a TOP NOTCH COMPANY. I would always recommend them to my business partners
                                        </p>
                                        <h4>Mr. Ekuorba Gyasi.</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="testimonial_content text-center">
                                    <div class="testimonial_image">
                                        <img src="images/client/testimonial-5.jpg" alt="">
                                    </div>
                                    <div class="testimonial_details">
                                        <p>
                                            Mr. Ahadzie and his team  was instrumental in helping me to design and source a sophisticated technological device to monitor our buildings. 
                                            It was a component that I had conceptualized for many years; however, I was not confident in my ability to make it a reality.
                                            By outsourcing the complex engineering tasks associated with this one component, I was able to keep my focus on the big picture. 
                                            We are now looking forward to a broad spectrum product launch. This software protects all our buildings from Fire and all emergency Alerts .
                                        </p>
                                        <h4>Mrs. Angela Kyerematen-Jimoh.</h4>
                                        <h5>CEO of IBM Ghana</h5>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="satisfied_client">
        <div class="satisfied_rgba">
            <div class="container">
                <div class="testimonial_title">
                    <h2 style="color: #fff;padding-top: 50px;">OUR SATISFIED CLIENTS</h2>
                </div>

                <div class="row">
                    <div class="all_client">
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/satis.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/ghana-Immigration-Service.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/ernest_chemist.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/kama.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/alpha-consult.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/satisfied-clients--images-4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/satisfied-clients--images-8.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/satisfied-clients--images-10.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/satisfied-clients--images-12.jpg" alt="">
                                </div>
                            </div>
                        </div><div class="col-md-3 col-sm-6">
                            <div class="clinett">
                                <div class="client_images">
                                    <img src="images/partner/satisfied-clients--images-14.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

    <footer class="footer_section" id="contact">
      <div class="container">
        <div class="main_footer">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="footer_image">
                    <img src="images/black-man-counting-money.jpg" alt="">
                  </div>
                </div>                  
                <div class="col-md-6 col-sm-6">
                  <div class="footer_content">
                    <h2>Contact Us</h2>
                    <p>Yehans International</p>
                    <ul>
                        <li><i class="fa fa-fax"></i>P. O. Box CT 5341</li>
                        <li><i class="fa fa-map-marker"></i>Cantonments, Accra.</li>
                        <li><i class="fa fa-phone"></i>Local: 0 302 512 525</li>
                        <li><i class="fa fa-phone"></i>International: +233 302 51 2525</li>
                        <li><i class="fa fa-envelope-open"></i>Email: info@yehansinternational.com</li>                        
                    </ul>
                  </div>
                </div>
            </div>
        </div>
      </div>
    </footer>

<?php
    include "inc/footer.php";
?>
