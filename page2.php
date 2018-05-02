<?php
require "init.php";

if( !isset($_SESSION['new_sess']) ){
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

include "inc/header.php";
?>

    <header class="page2_header">
        <div class="container">
            <div class="page2_header_information">
                <h1>WE ARE HERE TO HELP. TELL US ABOUT YOUR PROJECT</h1>
                <h2>select the type of project you will be using the $1000.00 Certificate of Credit towards.</h2>
            </div>
        </div>
    </header>
    <section class="building_finish_section">
        <div class="container">
            <div class="all_building">
                <div class="building_finish_title">
                    <h2>Building <span>Finishes</span> and <span>Installations</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="buildig_finish_content">
                            <ul>
                                <li><i class="fa fa-certificate"></i> Aluminum Glazing & Gladding Works</li>
                                <li><i class="fa fa-certificate"></i>Physical Barriers </li>
                                <li><i class="fa fa-certificate"></i>Collapsible Burglar proof Windows and Doors</li>
                                <li><i class="fa fa-certificate"></i>Security Doors</li>
                                <li><i class="fa fa-certificate"></i>Automated Garage Doors</li>
                                <li><i class="fa fa-certificate"></i>Metal Fabrication Works </li>
                                <li><i class="fa fa-certificate"></i>Balustrades</li>
                                <li><i class="fa fa-certificate"></i>Regular Front Gates </li>
                                <li><i class="fa fa-certificate"></i>Roller Shutters</li>
                                <li><i class="fa fa-certificate"></i>Building Structures </li>
                                <li><i class="fa fa-certificate"></i>Road Block Barricades </li>
                                <li><i class="fa fa-certificate"></i>Acoustic Ceilings</li>
                                <li><i class="fa fa-certificate"></i>Alucubond Walls</li>
                                <li><i class="fa fa-certificate"></i>Toilet Partioners </li>
                                <li><i class="fa fa-certificate"></i>Flooring </li>
                                <li><i class="fa fa-certificate"></i>Tiling </li>
                                <li><i class="fa fa-certificate"></i>Painting </li>
                                <li><i class="fa fa-certificate"></i>Commercial Construction </li>
                                <li><i class="fa fa-certificate"></i>Governmental Projects </li>
                            </ul>
                            <div class="common_button">
                                <a class="scrollto" href="#common_project_section">Click Here</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="building_finish_images">
                            <img src="images/building.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="security_section">
        <div class="container">
            <div class="all_building">
                <div class="building_finish_title">
                    <h2><span>SECURITY</span> AND <span>SURVEILLANCE</span> SYSTEMS </h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="building_finish_images">
                            <img src="images/lead_original.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="security_content">
                            <ul>
                                <li><i class="fa fa-camera-retro"></i>Security Cameras for Residential Buildings </li>
                                <li><i class="fa fa-camera-retro"></i>Security Cameras for Commercial Buildings  </li>
                                <li><i class="fa fa-camera-retro"></i>Building Integration Management Security Systems </li>
                                <li><i class="fa fa-camera-retro"></i>Building Management Solutions </li>
                                <li><i class="fa fa-camera-retro"></i>Fire Alarms </li>
                                <li><i class="fa fa-camera-retro"></i>Smoke Detectors</li>
                                <li><i class="fa fa-camera-retro"></i>Access Control Systems </li>
                                <li><i class="fa fa-camera-retro"></i>Intrusion detection Solutions </li>
                                <li><i class="fa fa-camera-retro"></i>Video Surveillance (CCTV)</li>
                                <li><i class="fa fa-camera-retro"></i>Hidden Cameras and Alarm Systems  </li>
                            </ul>  
                            <div class="common_button security_button">
                                <a class="scrollto" href="#common_project_section">Click Here</a>
                            </div>                              
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <section class="energy_section">
        <div class="container">
            <div class="all_building">
                <div class="building_finish_title">
                    <h2>ENERGY<span> SAVINGS </span> AND <span>AUDITING</span> SERVICE </h2>
                </div>
                <div class="row">                    
                    <div class="col-md-6 col-sm-6">
                        <div class="energy_content">
                            <ul>
                                <li><i class="fa fa-eye"></i>Residential Energy Auditing service</li>
                                <li><i class="fa fa-eye"></i>Commercial Energy Auditing Service</li>
                                <li><i class="fa fa-eye"></i>Airtron Device and Installation Service </li>
                                <li><i class="fa fa-eye"></i>Solar System Installation Service</li>
                            </ul> 
                            <div class="common_button">
                                <a class="scrollto" href="#common_project_section">Click Here</a>
                            </div>                                
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="building_finish_images">
                            <img src="images/dv1961037.jpg" alt="">
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    <section class="insert_project_section" id="common_project_section">
        <div class="container">
            <div class="main_project_section">
                <form action="page3.php" method="post">
                    <div class="form-group">
                        <label for="email">What is your budget for this project ?</label>
                        <input type="text" class="form-control" name="p_budge" id="p_budge" required>
                    </div>
                    <div class="form-group">
                        <label for="radio">Do you have any quotations made from other companies ?</label>
                        <div>
                            <label>                       
                                <input type="radio" class="radio_click" name="have_quote_others_company" id="quation1" value="1">Yes 
                                <input type="radio" class="radio_click" name="have_quote_others_company" id="quation2" value="0">No
                            </label>
                        </div>
                        <input type="text" class="form-control radio_input" name="" style="display: none;">                      
                    </div>
                    <!-- <div class="form-group">
                        <label for="file">Do you have any documents for us to review? </label>
                        <input type="file" name="">
                    </div> -->
                    <div class="form-group strong_color">
                        <label for="information"><strong>FOR MORE INFORMATION ABOUT OUR SERVICES AND PRODUCT LINES PLEASE CONTACT US AT +233 302 51 2525.</strong></label>
                    </div>
                    <div class="form-group">
                        <label for="">YOU NEED A SPECIFIC PROJECT DONE? TELL US ABOUT IT </label>
                        <textarea class="form-control" name="about_project" rows="5"></textarea>
                    </div>   
                    <div class="insert_project_button">
                        <button type="submit">LETS CONTINUE</button>
                    </div> 
                </form>
            </div>
        </div>
    </section>    
<?php
    include "inc/footer.php";
?>
