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
                <p>Select the type of project you will be using the $1000.00 Certificate of Credit towards.</p>
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
                                <li><input type="checkbox" name=""> Aluminum Glazing & Gladding Works</li>
                                <li><input type="checkbox" name=""> Physical Barriers </li>
                                <li><input type="checkbox" name=""> Collapsible Burglar proof Windows and Doors</li>
                                <li><input type="checkbox" name=""> Security Doors</li>
                                <li><input type="checkbox" name=""> Automated Garage Doors</li>
                                <li><input type="checkbox" name=""> Metal Fabrication Works </li>
                                <li><input type="checkbox" name=""> Balustrades</li>
                                <li><input type="checkbox" name=""> Regular Front Gates </li>
                                <li><input type="checkbox" name=""> Roller Shutters</li>
                                <li><input type="checkbox" name=""> Building Structures </li>
                                <li><input type="checkbox" name=""> Road Block Barricades </li>
                                <li><input type="checkbox" name=""> Acoustic Ceilings</li>
                                <li><input type="checkbox" name=""> Alucubond Walls</li>
                                <li><input type="checkbox" name=""> Toilet Partioners </li>
                                <li><input type="checkbox" name=""> Flooring </li>
                                <li><input type="checkbox" name=""> Tiling </li>
                                <li><input type="checkbox" name=""> Painting </li>
                                <li><input type="checkbox" name=""> Commercial Construction </li>
                                <li><input type="checkbox" name=""> Governmental Projects </li>
                            </ul>
                            <!-- <div class="common_button">
                                <a class="scrollto" href="#common_project_section">Click Here</a>
                            </div>  -->
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
                                <li><input type="checkbox" name="">Security Cameras for Residential Buildings </li>
                                <li><input type="checkbox" name="">Security Cameras for Commercial Buildings  </li>
                                <li><input type="checkbox" name="">Building Integration Management Security Systems </li>
                                <li><input type="checkbox" name="">Building Management Solutions </li>
                                <li><input type="checkbox" name="">Fire Alarms </li>
                                <li><input type="checkbox" name="">Smoke Detectors</li>
                                <li><input type="checkbox" name="">Access Control Systems </li>
                                <li><input type="checkbox" name="">Intrusion detection Solutions </li>
                                <li><input type="checkbox" name="">Video Surveillance (CCTV)</li>
                                <li><input type="checkbox" name="">Hidden Cameras and Alarm Systems  </li>
                            </ul>  
                            <!-- <div class="common_button security_button">
                                <a class="scrollto" href="#common_project_section">Click Here</a>
                            </div>  -->                             
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
                                <li><input type="checkbox" name="">Residential Energy Auditing service</li>
                                <li><input type="checkbox" name="">Commercial Energy Auditing Service</li>
                                <li><input type="checkbox" name="">Airtron Device and Installation Service </li>
                                <li><input type="checkbox" name="">Solar System Installation Service</li>
                            </ul> 
                            <!-- <div class="common_button">
                                <a class="scrollto" href="#common_project_section">Click Here</a>
                            </div>  -->                               
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
                    <div class="form-group">
                        <label for="">YOU NEED A SPECIFIC PROJECT DONE? TELL US ABOUT IT </label>
                        <textarea class="form-control" name="about_project" rows="5"></textarea>
                    </div> 
                    <div class="form-group strong_color">
                        <label for="information"><strong>FOR MORE INFORMATION ABOUT OUR SERVICES AND PRODUCT LINES PLEASE CONTACT US AT +233 302 51 2525.</strong></label>
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
