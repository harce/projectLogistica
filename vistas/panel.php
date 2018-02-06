<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login Page - ExeLogistica</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css?v=1.2.1" rel="stylesheet"/>
</head>

<body class="index-page">
    <br><br><br>
    <div class="main main-raised">
        <nav class="navbar navbar-inverse" role="navigation-demo">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#pablo">Operaciones</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navigation-example-2">
                  <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#pablo">
                                Discover
                            </a>
                        </li>
                        <li>
                            <a href="#pablo">
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="#pablo" class="btn btn-rose btn-raised btn-fab btn-fab-mini" data-toggle="dropdown">
                                <i class="material-icons">email</i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#pablo" class="profile-photo dropdown-toggle" data-toggle="dropdown">
                                <div class="profile-photo-small">
                                    <img src="assets/img/faces/avatar.jpg" alt="Circle Image" class="img-circle img-responsive">
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">
                                    Dropdown header
                                </li>
                                <li>
                                    <a href="#pablo">Me</a>
                                </li>
                                <li>
                                    <a href="#pablo">Settings and other stuff</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="login-page.html">Sign out</a></li>
                            </ul>
                        </li>
                   </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-->
        </nav>
        <div class="col-md-12">
            <img src="../assets/img/logotipo-exe%20logistica-lte.fw.png" width="250">
            <h3></h3>
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav nav-pills nav-pills-danger nav-stacked">
                      <li class="active"><a href="#tab1" data-toggle="tab">Reporte de Viajes</a></li>
                      <li><a href="#tab2" data-toggle="tab">Cat&aacute;logo de Unidades</a></li>
                      <li><a href="#tab3" data-toggle="tab">Carta de Porte</a></li>
                    </ul>
                </div>
                <div class="col-md-10">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <h3><small>Captura de Reporte de Viajes</small></h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker"/>
                                    </div>
                                    <select class="selectpicker" data-style="btn btn-inverse btn-round" title="Unidad" data-size="7">
                                        <option disabled selected>Unidad</option>
                                        <option value="2">Tailer</option>
                                        <option value="3">Camion</option>
                                    </select>
                                </div>
                                <div class="col-md-8">
                                    <select class="selectpicker" data-style="btn btn-inverse btn-round" title="Operador" data-size="7">
                                        <option disabled selected>Operador</option>
                                        <option value="2">Heber Alejandro Arce Sanchez</option>
                                        <option value="3">Operador 2</option>
                                    </select>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Caja</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Tractor</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                          Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                          <br /><br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
                        </div>
                        <div class="tab-pane" id="tab3">
                            Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                            <br /><br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="../assets/js/moment.min.js"></script>

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="../assets/js/bootstrap-datetimepicker.js" type="text/javascript"></script>

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="../assets/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="../assets/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
	<script src="../assets/js/jasny-bootstrap.min.js"></script>

	<!-- Plugin For Google Maps -->
	<script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>



	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js?v=1.2.1" type="text/javascript"></script>

	<!-- Fixed Sidebar Nav - JS For Demo Purpose, Don't Include it in your project -->
	<script src="../assets/assets-for-demo/modernizr.js" type="text/javascript"></script>
	<script src="../assets/assets-for-demo/vertical-nav.js" type="text/javascript"></script>
    
    <script type="text/javascript">

		$(document).ready(function(){

			materialKit.initFormExtendedDatetimepickers();

		});
	</script>
</html>