<?php
require "init.php";

if( !isset($_SESSION['new_sess']) ){
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
                    <h1>WE ARE HERE TO HELP. TELL US ABOUT YOUR PROJECT</h1>
                    <p>Select the type of project you will be using the $1000.00 Certificate of Credit towards.</p>
                </div>
			</div>
		</div>
	</div>
</section><!-- End section -->
<section class="form_section">
        <div class="container margin_60 form_container">
            <div class="row">
                <div class="col-md-9 col-sm-12 ">
                    <form id="quotation" action="page3.php" method="POST">
                        <div class="form_title install_form">
                            <h3><strong><i class="fa fa-building"></i></strong>Installations</h3>
                            <p>Select which type of service do you want </p>
                        </div>
                        <div class="step">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group strong_text">
                                        <strong>Building <span>Finishes</span> and <span>Installations</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Aluminum Glazing & Gladding Works">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Aluminum Glazing & Gladding Works</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Physical Barriers">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Physical Barriers</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Collapsible Burglar proof Windows and Doors">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Collapsible Burglar proof Windows and Doors</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Security Doors">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Security Doors</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Automated Garage Doors">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Automated Garage Doors</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Metal Fabrication Works">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Metal Fabrication Works</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Balustrades">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Balustrades</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Regular Front Gates">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Regular Front Gates</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Roller Shutters">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Roller Shutters</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Building Structures">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Building Structures</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Road Block Barricades">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Road Block Barricades</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Acoustic Ceilings">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Acoustic Ceilings</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Alucubond Walls">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Alucubond Walls</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Toilet Partioners">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Toilet Partioners</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Flooring">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Flooring</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Tiling">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Tiling</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[]" value="Painting">
                                            <div class="state p-success">
                                                <svg class="svg svg-icon" viewBox="0 0 20 20">
                                                    <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
                                                </svg>
                                                <label>Painting</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <div class="pretty p-svg p-curve">
                                            <input type="checkbox" name="installations[] value=" Commercial Construction ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Commercial Construction</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="installations[] " value="Governmental Projects ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Governmental Projects</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--End step -->
                <div class="form_title ">
                    <h3><strong><i class="fa fa-lock"></i></strong>SURVEILLANCE</h3>
                </div>
                <div class="step ">
                    <div class="row ">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="form-group strong_text">
                                <strong><span>SECURITY</span> AND <span>SURVEILLANCE</span> SYSTEMS</span></strong>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Security Cameras for Residential Buildings ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Security Cameras for Residential Buildings</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Security Cameras for Commercial Buildings ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Security Cameras for Commercial Buildings</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Building Integration Management Security Systems ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Building Integration Management Security Systems</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Building Management Solutions ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Building Management Solutions</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Fire Alarms ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Fire Alarms</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Smoke Detectors ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Smoke Detectors</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Access Control Systems ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Access Control Systems</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Intrusion detection Solutions ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Intrusion detection Solutions</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Video Surveillance (CCTV) ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Video Surveillance (CCTV)</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="surveillance[]" value="Hidden Cameras and Alarm Systems ">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon " viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Hidden Cameras and Alarm Systems</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--End step -->
                <div class="form_title ">
                    <h3><strong><i class="fa fa-certificate"></i></strong>AUDITING</h3>
                </div>
                <div class="step ">
                    <div class="row ">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group strong_text form_strong">
                                <strong>ENERGY<span> SAVINGS </span> AND <span>AUDITING</span> SERVICE</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve">
                                    <input type="checkbox" name="auditting[]" value="Residential Energy Auditing service">
                                    <div class="state p-success">
                                        <svg class="svg svg-icon" viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Residential Energy Auditing service</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 ">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="auditting[]" value="Commercial Energy Auditing Service">
                                    <div class="state p-success">
                                        <svg class="svg svg-icon" viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Commercial Energy Auditing Service</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <div class="pretty p-svg p-curve">
                                    <input type="checkbox" name="auditting[]" value="Airtron Device and Installation Service">
                                    <div class="state p-success ">
                                        <svg class="svg svg-icon" viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Airtron Device and Installation Service</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group ">
                                <div class="pretty p-svg p-curve ">
                                    <input type="checkbox" name="auditting[]" value="Solar System Installation Service ">
                                    <div class="state p-success">
                                        <svg class="svg svg-icon" viewBox="0 0 20 20 ">
                                            <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z " style="stroke: white;fill:white; "></path>
                                        </svg>
                                        <label>Solar System Installation Service</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End step -->
                <div class="form_title form_strong">
                    <h3><strong><i class="fa fa-archive"></i></strong>Project Budget</h3>
                </div>
                <div class="step budget_label">
                    <div class="row ">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="form-group ">
                                <label>What is your budget for this project ?</label>
                                <label class="radio_content">$100-$1,000
                                  <input type="radio" name="p_budge" value="$100-$1,000" required>
                                  <span class="checkmark"></span>
                                </label>
                                <label class="radio_content ">$1,000-$5,000
                                  <input type="radio" name="p_budge" value="$1,000-$5,000">
                                  <span class="checkmark "></span>
                                </label>
                                <label class="radio_content">$5,000-$10,000
                                  <input type="radio" name="p_budge" value="$5,000-$10,000">
                                  <span class="checkmark"></span>
                                </label>
                                <label class="radio_content radio_mb">Over $10,000
                                  <input type="radio" name="p_budge" value="Over $10,000">
                                  <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 ">
                            <div class="form-group ">
                                <label>Do you have any quotations made from other companies ?</label>
                                <label class="radio_content">Yes
                                  <input type="radio" value="Yes" name="have_quote_others_company" required>
                                  <span class="checkmark"></span>
                                </label>
                                <label class="radio_content radio_mb">No
                                  <input type="radio" value="No" name="have_quote_others_company">
                                  <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label>YOU NEED A SPECIFIC PROJECT DONE? TELL US ABOUT IT</label>
                                <textarea class="form-control " name="about_project" rows="5 "></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                <label><strong>FOR MORE INFORMATION ABOUT OUR SERVICES AND PRODUCT LINES PLEASE CONTACT US AT +233 302 51 2525.</strong></label>
                            </div>
                        </div>
                    </div>
                <button type="submit" class="btn_1 medium">LETS CONTINUE</button>
            </div>

            </form>
        </div>
        <!-- End col-md-9 -->

            <div class="col-md-3 col-sm-9 col-xs-12">
                <?php include "inc/sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>





<?php
    include "inc/footer.php";
?>