<?php
require "init.php";

if( !isset($_SESSION['new_sess']) ){
    header("Location:index.php?invalid=1");
    App\Session::sess_destroy();
    die();
}

include "inc/header.php";
?>

<section class="step_section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4"></div>
            <div class="col-md-8 col-sm-8">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="red" id="wizard">
                        <form action="" method="">
                            <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                            <div class="wizard-header">
                                <h3 class="wizard-title">
		                        		Book a Room
		                        	</h3>
                                <h5>This information will let us know more about you.</h5>
                            </div>
                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#step_1" data-toggle="tab">Step 1</a></li>
                                    <li><a href="#step_2" data-toggle="tab">Step 2</a></li>
                                    <li><a href="#step_3" data-toggle="tab">Step 3</a></li>
                                    <li><a href="#step_4" data-toggle="tab">Step 4</a></li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="step_1">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h4 class="info-text">Building <span>Finishes</span> and <span>Installations</span></h4>
                                        </div>
                                        <div class="col-sm-11 col-sm-offset-1">
                                            <div class="input-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="aluminum" value="Aluminum Glazing & Gladding Works">
                                                    </label>
                                                    Aluminum Glazing & Gladding Works
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Physical" value="Physical Barriers">
                                                    </label>
                                                    Physical Barriers
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Collapsible" value="Collapsible Burglar proof Windows and Doors">
                                                    </label>Collapsible Burglar proof Windows and Doors
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Security_door" value="Security Doors">
                                                    </label>Security Doors
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Automated_garage" value="Automated Garage Doors">
                                                    </label>Automated Garage Doors
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="metal_fabrication" value="Metal Fabrication Works">
                                                    </label>Metal Fabrication Works
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Balustrades" value="Balustrades">
                                                    </label>Balustrades
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="regular_front" value="Regular Front Gates">
                                                    </label>Regular Front Gates
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="rollar_shutter" value="Roller Shutters">
                                                    </label>Roller Shutters
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Building_structures" value="Building Structures">
                                                    </label>Building Structures
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="road_block" value="Road Block Barricades">
                                                    </label>Road Block Barricades
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="acoustic_ceiling" value="Acoustic Ceilings">
                                                    </label>Acoustic Ceilings
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="alucubond_walls" value="Alucubond Walls">
                                                    </label>Alucubond Walls
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="toilet_tartioners" value="Toilet Partioners">
                                                    </label>Toilet Partioners
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Flooring" value="Flooring">
                                                    </label>Flooring
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Tiling" value="Tiling">
                                                    </label>Tiling
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Painting" value="Painting">
                                                    </label>Painting
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Commercial_construction" value="Commercial Construction">
                                                    </label>Commercial Construction
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Governmental_projects" value="Governmental Projects">
                                                    </label>Governmental Projects
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="step_2">
                                    <h4 class="info-text"><span>SECURITY</span> AND <span>SURVEILLANCE</span> SYSTEMS</h4>
                                    <div class="row">
                                        <div class="col-sm-11 col-sm-offset-1">
                                            <div class="input-group">
                                            	<div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Security_cameras" value="Security Cameras for Residential Buildings">
                                                    </label>Security Cameras for Residential Buildings
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Security_camera_for_commercial" value="Security Cameras for Commercial Buildings">
                                                    </label>Security Cameras for Commercial Buildings
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Building_intigation" value="Building Integration Management Security Systems">
                                                    </label>Building Integration Management Security Systems
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="building_management" value="Building Management Solutions">
                                                    </label>Building Management Solutions
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Fire_alarms" value="Fire Alarms">
                                                    </label>Fire Alarms
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="smoke_detector" value="Smoke Detectors">
                                                    </label>Smoke Detectors
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="accsess_control_system" value="Access Control Systems">
                                                    </label>Access Control Systems
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="instruction_detection" value="Intrusion detection Solutions">
                                                    </label>Intrusion detection Solutions
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Video_surveillance" value="Video Surveillance (CCTV)">
                                                    </label>Video Surveillance (CCTV)
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="hidden_carema" value="Hidden Cameras and Alarm Systems">
                                                    </label>Hidden Cameras and Alarm Systems
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="step_3">
                                    <div class="row">
                                        <h4 class="info-text">ENERGY<span> SAVINGS </span> AND <span>AUDITING</span> SERVICE</h4>
                                        <div class="col-sm-11 col-sm-offset-1">
                                            <div class="input-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Residential_energy" value="Residential Energy Auditing service">
                                                    </label>Residential Energy Auditing service
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Commercial_energy" value="Commercial Energy Auditing Service">
                                                    </label>Commercial Energy Auditing Service
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Airtron_device" value="Airtron Device and Installation Service">
                                                    </label>Airtron Device and Installation Service
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="Solar_system" value="Solar System Installation Service">
                                                    </label>Solar System Installation Service
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="step_4">
                                    <div class="row">
                                        <h4 class="info-text">Project Budget</h4>
                                        <div class="col-sm-11 col-sm-offset-1">
                                            <div class="input-group">
                                               <div class="form-group project_budget_div">
		                                          	<label class="control-label">What is your budget for this project ?</label><br>
		                                          	<input type="radio" id="project_budget" name="bu" class="">300$-500$<br>
		                                          	<input type="radio" id="project_budget" name="bu" class="">600$-1000$<br>
		                                          	<input type="radio" id="project_budget" name="bu" class="">More then 1000$
		                                        </div>
		                                        <div class="form-group project_budget_div">
		                                          	<label class="control-label">Do you have any quotations made from other companies ?</label><br>
		                                          	<input type="radio" id="project_budget" name="bu" class="">Yes<br>
		                                          	<input type="radio" id="project_budget" name="bu" class="">No
		                                        </div>
		                                        <div class="form-group project_budget_div">
		                                          	<label class="control-label">YOU NEED A SPECIFIC PROJECT DONE? TELL US ABOUT IT</label><br>
		                                          	<textarea class="form-control" name="about_project" rows="5"></textarea>
		                                        </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' value='Finish' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

                                    <div class="footer-checkbox">
                                        <div class="col-sm-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                                Subscribe to our newsletter
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- wizard container -->
            </div>
        </div>
        <!-- row -->
    </div>
    <!--  big container -->
</section>

<?php
    include "inc/footer.php";
?>