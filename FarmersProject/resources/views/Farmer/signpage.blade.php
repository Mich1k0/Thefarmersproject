<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Get Shit Done Bootstrap Wizard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-boat.jpg')">
    <!--   Creative Tim Branding   -->
    <a href="http://creative-tim.com">
         <div class="logo-container">
            <div class="logo">
                <img src="assets/img/new_logo.png">
            </div>
            <div class="brand">
                Creative Tim
            </div>
        </div>
    </a>

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">
                <div class="card wizard-card" data-color="azzure" id="wizard">
                    <form action="" method="">
                <!--        You can switch ' data-color="azzure" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>LIST</b> YOUR BOAT <br>
                        	   <small>This information will let us know more about your boat.</small>
                        	</h3>
                    	</div>
						<div class="wizard-navigation">
							<ul>
	                            <li><a href="#details" data-toggle="tab">Details</a></li>
	                            <li><a href="#captain" data-toggle="tab">Captain</a></li>
	                            <li><a href="#description" data-toggle="tab">Description</a></li>
	                        </ul>
						</div>
                        <div class="tab-content">
                            <div class="tab-pane" id="details">
                              <div class="row">
                                  <div class="col-sm-12">
                                    <h4 class="info-text"> Let's start with the basic details</h4>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                        <label>What city is your boat in?</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Where is your boat located?">
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                        <label>Boat Type</label>
                                        <select class="form-control">
                                            <option disabled="" selected="">- boat type -</option>
                                            <option>Power</option>
                                            <option>Sail</option>
                                            <option>Paddle</option>
                                        </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-5 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Year Manufacture</label>
                                          <select class="form-control">
                                            <option disabled="" selected="">- year -</option>
                                            <option>2008</option>
                                            <option>2009</option>
                                            <option>2010</option>
                                            <option>2011</option>
                                            <option>2012</option>
                                            <option>2013</option>
                                            <option>2014</option>
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-sm-5">
                                      <div class="form-group">
                                          <label>Daily Price</label>
                                          <div class="input-group">
                                              <input type="text" class="form-control">
                                              <span class="input-group-addon">$</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="captain">
                                <h4 class="info-text">Do you include a captain? </h4>
                                <div class="row">
                                    <div class="col-sm-10 col-sm-offset-1">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Renters you approve will be able to take this boat">
                                                <input type="radio" name="job" value="Design">
                                                <div class="icon">
                                                    <i class="fa fa-life-ring"></i>
                                                </div>
                                                <h6>No Captain</h6>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you or a certified captain will be included.">
                                                <input type="radio" name="job" value="Code">
                                                <div class="icon">
                                                    <i class="fa fa-male"></i>
                                                </div>
                                                <h6>Includes Captain</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="description">
                                <div class="row">
                                    <h4 class="info-text"> Drop us a small description </h4>
                                    <div class="col-sm-6 col-sm-offset-1">
                                         <div class="form-group">
                                            <label>Boat description</label>
                                            <textarea class="form-control" placeholder="" rows="9">
                                            </textarea>
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                         <div class="form-group">
                                            <label>Example</label>
                                            <p class="description">"The boat really nice name is recognized as being a really awesome boat. We use it every sunday when we go fishing and we catch a lot. It has some kind of magic shield around it."</p>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wizard-footer">
                            	<div class="pull-right">
                                    <input type='button' class='btn btn-next btn-fill btn-info btn-wd btn-sm' name='next' value='Next' />
                                    <input type='button' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Finish' />
                                </div>
                                <div class="pull-left">
                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div> <!-- row -->
    </div> <!--  big container -->

    <div class="footer">
        <div class="container">
             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
        </div>
    </div>


</div>

</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>
