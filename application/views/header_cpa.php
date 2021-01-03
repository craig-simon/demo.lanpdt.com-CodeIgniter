<!doctype html>
<html>

<head>
	<title>CPA2GO</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/front/cpa/css/bootstrap_4.3.1.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/front/cpa/css/bootstrap-drawer.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/front/cpa/css/fontawsome.min.css">
	<!-- Google Font CSS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">
	<!-- Global CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/front/cpa/css/global.css" type="text/css">
	<!-- Header CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/front/cpa/css/header.css" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/front/cpa/css/expert.css" type="text/css">
	<link rel="stylesheet" href="<?=base_url()?>assets/front/cpa/css/media.css" type="text/css">
	<!-- Jquery Libs -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Bootstrap Js -->
	<script src="<?=base_url()?>assets/front/cpa/js/popper.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/front/cpa/js/bootstrap_4.3.1.js" type="text/javascript"></script>
	<!-- Custom Js -->
	<script src="<?=base_url()?>assets/front/cpa/js/custom.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/front/cpa/js/bootstrap-drawer.js" type="text/javascript"></script>
	<link rel="icon" href="<?=base_url()?>assets/images/favicon.ico" type="image/gif" sizes="16x16">
</head>

<body>
	<!-- Header Section -->
	<?php 
		$method = $this->router->fetch_method();
		$user_data = $this->session->userdata('user_front');
	?>

	<div class="loader"></div>
	<header id="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="logo">
						<a href="<?=base_url().'open_ticket_cpa'?>">
							<img src="<?=base_url()?>assets/front/cpa/image/main_logo.png" alt="header_logo" title="logo" />
						</a>
					</div>
					<div class="navigation">
						<nav class="navbar navbar-dark p-0">
							
							<button class="navbar-toggler noti_btn" type="button" data-toggle="drawer" data-target="#collapsibleNavbar">
								<span class="navbar-toggler-icon noti_active">
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
											<g>
												<g>
													<path stroke="#333333" stroke-miterlimit="10" d="M468.684,412.352c-52.248-23.562-54.231-124.701-54.281-127.264
			v-67.856c0-65.311-39.963-121.469-96.759-145.377C317.527,38.281,290.13,11,256.483,11s-61.028,27.281-61.16,60.854
			c-56.795,23.909-96.759,80.067-96.759,145.377v67.856c-0.032,2.563-2.033,103.687-54.281,127.264
			c-5.952,2.68-9.227,9.16-7.854,15.525c1.372,6.383,7.026,10.93,13.558,10.93H182.46c2.728,14.914,9.788,28.804,20.585,40.045
			C217.396,493.783,236.378,502,256.483,502s39.087-8.217,53.438-23.148c10.797-11.241,17.873-25.131,20.585-40.045h132.472
			c6.531,0,12.188-4.547,13.56-10.93C477.909,421.512,474.652,415.03,468.684,412.352z M256.483,38.695
			c15.228,0,28.092,10.21,32.126,24.132c-10.385-2.149-21.114-3.282-32.126-3.282c-10.995,0-21.743,1.133-32.109,3.282
			C228.392,48.905,241.255,38.695,256.483,38.695z M126.293,285.17v-67.938c0-71.676,58.415-129.992,130.19-129.992
			c71.792,0,130.19,58.316,130.19,129.992v68.055c0.018,2.083,0.347,23.975,5.869,50.908h-272.12
			C125.945,309.229,126.276,287.303,126.293,285.17z M256.483,474.322c-21.164,0-39.633-15.245-45.568-35.517h91.137
			C296.115,459.077,277.646,474.322,256.483,474.322z M88.81,411.128c11.028-13.889,18.816-30.589,24.306-47.222h286.735
			c5.489,16.617,13.276,33.315,24.306,47.222H88.81z M256.483,106.667c-59.655,0-108.184,48.462-108.184,108.026
			c0,7.647,6.2,13.847,13.855,13.847c7.655,0,13.872-6.2,13.872-13.847c0-44.304,36.095-80.34,80.456-80.34
			c7.655,0,13.872-6.2,13.872-13.848C270.355,112.859,264.139,106.667,256.483,106.667z" />
												</g>
											</g>
										</svg>
									</i>
								</span>
							</button>
							
							<ul class="navbar-nav-profile">
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

										<?php $img_url = !empty($user_data->user_image) ? base_url().'uploads/user_images/'.$user_data->user_image : base_url().'assets/images/unknown-512.png'; ?>

										<div class="profile-img">
											<div class="profile_img_div" style="background-image: url('<?=$img_url?>');"></div>
										</div>
										<p class="profile-text"><?=$user_data->first_name.' '.$user_data->last_name?></p>
									</a>
									<div class="dropdown-menu nav_dropdown_box" aria-labelledby="navbarDropdownMenuLink">
										<a class="dropdown-item nav_dropdown_box_link <?php if($method == 'cpa_profile'){ ?>active<?php }?>" href="<?=base_url('cpa_profile')?>">Profile</a>
										<a class="dropdown-item nav_dropdown_box_link" href="javascript:;" data-toggle="modal" data-target="#change_password">Change Password</a>
										<a class="dropdown-item nav_dropdown_box_link" href="<?=base_url('logout')?>">Log Out</a>
									</div>
								</li>
							</ul>
							<button class="navbar-toggler navigtion_bar" type="button" data-toggle="collapse" data-target="#expert_tab_nav_box">
								<span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
							</button>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Content Section -->
	<div id="expert">
		<div class="container">
			<div class="row">
				<!-- Tabbing Panel Create -->
				<div class="expert_tab_nav navbar-expand-sm d-flex flex-wrap col-lg-12 col-md-12 col-sm-12 col-12">
					<div id="expert_tab_nav_box" class="collapse navbar-collapse">
						<div class="expert_tab_nav_box d-flex col-lg-12 col-md-12 col-sm-12 col-12 p-0">
							<!-- box -->
							<div class="etn_box text-center">
								<a class="<?php if($method == 'open_tkt_cpa') { echo 'active'; } ?>" href="<?=base_url('open_ticket_cpa')?>">
									<div class="etn_content">
										<div class="etnc_icon">
											<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
												<g>
													<defs>
														<rect id="SVGID_1_" x="21.398" y="7.855" width="465.102" height="498.291" />
													</defs>
													<clipPath id="SVGID_2_">
														<use xlink:href="#SVGID_1_" overflow="visible" />
													</clipPath>
													<path clip-path="url(#SVGID_2_)" d="M370.202,315.134c0-4.584-3.722-8.305-8.305-8.305h-49.829c-4.584,0-8.306,3.721-8.306,8.305
		s3.722,8.304,8.306,8.304h49.829C366.48,323.438,370.202,319.719,370.202,315.134" />
													<path clip-path="url(#SVGID_2_)" d="M336.982,99.208V57.684c0-4.583-3.722-8.305-8.305-8.305c-4.584,0-8.305,3.721-8.305,8.305
		v41.524c0,22.896,18.627,41.525,41.524,41.525h74.742v157.791c0,4.584,3.722,8.305,8.306,8.305s8.305-3.721,8.305-8.305V132.428
		c0-4.584-3.721-8.305-8.305-8.305h-83.048C348.159,124.123,336.982,112.945,336.982,99.208" />
													<path clip-path="url(#SVGID_2_)" d="M361.896,207.171h-66.439c-4.584,0-8.305,3.721-8.305,8.305s3.721,8.304,8.305,8.304h66.439
		c4.584,0,8.305-3.72,8.305-8.304C370.202,210.892,366.48,207.171,361.896,207.171" />
													<path clip-path="url(#SVGID_2_)" d="M270.543,215.476c0-4.584-3.721-8.305-8.305-8.305H212.41c-4.584,0-8.304,3.721-8.304,8.305
		s3.72,8.305,8.304,8.305h49.829C266.822,223.781,270.543,220.061,270.543,215.476" />
													<path clip-path="url(#SVGID_2_)" d="M212.409,257c-4.584,0-8.305,3.721-8.305,8.305s3.72,8.305,8.305,8.305h16.61
		c4.583,0,8.304-3.721,8.304-8.305S233.603,257,229.019,257H212.409z" />
													<path clip-path="url(#SVGID_2_)" d="M212.409,173.952h83.048c4.583,0,8.305-3.721,8.305-8.305c0-4.584-3.722-8.304-8.305-8.304
		h-83.048c-4.584,0-8.305,3.72-8.305,8.304C204.104,170.231,207.825,173.952,212.409,173.952" />
													<path clip-path="url(#SVGID_2_)" d="M262.238,273.61h83.048c4.583,0,8.305-3.721,8.305-8.305s-3.722-8.305-8.305-8.305h-83.048
		c-4.584,0-8.305,3.721-8.305,8.305S257.654,273.61,262.238,273.61" />
													<path clip-path="url(#SVGID_2_)" d="M312.067,356.658c-4.584,0-8.305,3.72-8.305,8.304s3.721,8.305,8.305,8.305h16.609
		c4.583,0,8.306-3.721,8.306-8.305s-3.723-8.304-8.306-8.304H312.067z" />
													<path clip-path="url(#SVGID_2_)" d="M278.848,306.829h-66.438c-4.584,0-8.305,3.721-8.305,8.305s3.721,8.304,8.305,8.304h66.438
		c4.584,0,8.305-3.72,8.305-8.304S283.432,306.829,278.848,306.829" />
													<path clip-path="url(#SVGID_2_)" d="M278.848,356.658h-66.438c-4.584,0-8.305,3.72-8.305,8.304s3.721,8.305,8.305,8.305h66.438
		c4.584,0,8.305-3.721,8.305-8.305S283.432,356.658,278.848,356.658" />
													<path clip-path="url(#SVGID_2_)" d="M476.577,349.939l-16.608-16.61c-12.766-12.764-32.217-12.739-44.963,0L306.195,442.14
		c-1.554,1.554-2.433,3.671-2.433,5.871v49.829c0,4.584,3.72,8.305,8.304,8.305h49.829c2.201,0,4.318-0.88,5.872-2.433
		l108.81-108.81C489.808,381.671,489.808,363.178,476.577,349.939 M404.268,367.554l13.172,13.172l-72.153,72.152l-13.171-13.172
		L404.268,367.554z M320.372,489.534v-38.085l38.087,38.085H320.372z M370.202,477.792l-13.173-13.172l72.153-72.152l13.171,13.171
		L370.202,477.792z M464.834,383.159l-10.737,10.738l-38.087-38.086l10.738-10.738c6.561-6.554,14.883-6.587,21.477,0l16.609,16.609
		C471.552,368.409,471.552,376.439,464.834,383.159" />
													<path clip-path="url(#SVGID_2_)" d="M278.848,489.534H62.922c-13.736,0-24.915-11.178-24.915-24.914V49.379
		c0-13.735,11.178-24.915,24.915-24.915h262.316l80.615,80.615c3.247,3.248,8.496,3.248,11.742,0c3.248-3.247,3.248-8.497,0-11.743
		l-83.048-83.049c-1.553-1.561-3.67-2.433-5.87-2.433H62.922c-22.896,0-41.523,18.628-41.523,41.524v415.242
		c0,22.896,18.627,41.524,41.524,41.524h215.926c4.584,0,8.305-3.721,8.305-8.305C287.153,493.258,283.432,489.534,278.848,489.534" />
													<path clip-path="url(#SVGID_2_)" d="M278.848,406.486h-66.438c-4.584,0-8.305,3.721-8.305,8.305s3.721,8.305,8.305,8.305h66.438
		c4.584,0,8.305-3.721,8.305-8.305S283.432,406.486,278.848,406.486" />
													<path clip-path="url(#SVGID_2_)" d="M170.886,165.646c0-4.584-3.721-8.304-8.305-8.304h-49.829c-4.583,0-8.305,3.72-8.305,8.304
		v49.829c0,4.584,3.721,8.305,8.305,8.305h49.829c4.583,0,8.305-3.721,8.305-8.305V165.646z M154.275,207.171h-33.219v-33.219
		h33.219V207.171z" />
													<path clip-path="url(#SVGID_2_)" d="M112.751,423.097h49.829c4.583,0,8.305-3.721,8.305-8.305v-49.829
		c0-4.584-3.721-8.304-8.305-8.304h-49.829c-4.584,0-8.305,3.72-8.305,8.304v49.829
		C104.446,419.376,108.167,423.097,112.751,423.097 M121.056,373.268h33.219v33.219h-33.219V373.268z" />
													<path clip-path="url(#SVGID_2_)" d="M123.49,321.005c1.561,1.561,3.679,2.433,5.871,2.433c0.275,0,0.541-0.008,0.823-0.042
		c2.475-0.24,4.708-1.586,6.087-3.654l33.219-49.829c2.542-3.819,1.512-8.978-2.3-11.519c-3.829-2.55-8.969-1.512-11.519,2.301
		l-27.597,41.399l-9.451-9.441c-3.248-3.248-8.497-3.248-11.744,0c-3.247,3.247-3.248,8.496,0,11.743L123.49,321.005z" />
												</g>
											</svg>
										</div>
										<div class="etnc_title">
											<p class="m-0">Open Questions</p>
										</div>
									</div>
								</a>
							</div>
							<!-- end box -->
							<!-- box -->
							<div class="etn_box text-center">
								<a class="<?php if($method == 'pending_tkt_cpa') { echo 'active'; } ?>" href="<?=base_url('pending_ticket_cpa')?>">
									<div class="etn_content">
										<div class="etnc_icon skyblue">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
												<g>
													<defs>
														<rect id="SVGID_1_" x="10.238" y="10.221" width="491.524" height="491.559" />
													</defs>
													<clipPath id="SVGID_2_">
														<use xlink:href="#SVGID_1_" overflow="visible" />
													</clipPath>
													<path clip-path="url(#SVGID_2_)" fill="#fff" d="M177.424,44.424c-2.317-6.204-4.562-12.215-6.802-18.216
		C247.074-5.597,373.594,4.31,452.39,108.819c77.661,103.001,62.108,246.525-35.417,332.601
		c-94.807,83.676-240.859,80.002-331.765-8.836C34.362,382.896,8.843,321.977,10.297,250.903
		c1.449-70.818,29.877-130.096,82.492-179.078H30.932V51.517h101.626v101.732h-19.936V82.291
		c-28.541,23.833-49.59,51.637-63.552,84.583c-23.165,54.663-25.065,110.321-4.882,166.153
		c40.518,112.09,161.718,172.797,276.209,138.885C433.408,438.439,502.3,320.957,475.458,206.139
		C460.063,140.295,422.234,90.422,362.875,58.07C303.601,25.764,241.459,22.795,177.424,44.424" />
													<path clip-path="url(#SVGID_2_)" fill="#fff" d="M337.597,154.151v19.717h-20.372c0,4.984-0.595,9.648,0.109,14.107
		c2.398,15.194-2.904,26.412-14.773,36.242c-11.468,9.498-21.351,20.91-32.366,31.917c6.815,6.733,13.323,13.126,19.79,19.563
		c8.029,7.992,16.168,15.885,23.924,24.137c1.803,1.92,3.071,5.084,3.17,7.729c0.366,9.947,0.146,19.916,0.146,30.283h20.197v20.061
		H174.188v-19.721h20.27c0-4.984,0.6-9.65-0.109-14.109c-2.417-15.205,2.926-26.416,14.787-36.234
		c11.243-9.307,20.905-20.525,31.248-30.916c0.208-0.208,0.244-0.588,0.734-1.849c-4.151-3.929-8.682-8.059-13.034-12.369
		c-10.18-10.082-20.392-20.14-30.299-30.487c-1.816-1.896-3.082-5.081-3.179-7.723c-0.368-9.947-0.148-19.917-0.148-30.285h-20.195
		v-20.062H337.597z M214.858,174.17c0,7.737-0.227,15.031,0.131,22.297c0.115,2.345,1.193,5.171,2.805,6.831
		c11.591,11.934,23.427,23.63,35.203,35.384c0.901,0.899,1.938,1.661,3.134,2.674c13.25-13.278,26.289-26.335,39.303-39.418
		c0.559-0.56,1.255-1.346,1.263-2.034c0.086-8.562,0.057-17.126,0.057-25.734H214.858z M255.865,270.447
		c-13.512,13.525-26.556,26.572-39.576,39.645c-0.559,0.561-1.286,1.332-1.293,2.012c-0.089,8.566-0.058,17.135-0.058,25.623h81.877
		c0-8.369,0.049-16.48-0.06-24.59c-0.014-1.02-0.616-2.266-1.349-3.006C282.42,297.021,269.371,283.977,255.865,270.447" />
													<rect fill="#fff" x="194.774" y="399.602" clip-path="url(#SVGID_2_)" fill="#231F20" width="19.828" height="19.934" />
													<rect fill="#fff" x="246.11" y="399.541" clip-path="url(#SVGID_2_)" fill="#231F20" width="19.457" height="20.029" />
													<rect fill="#fff" x="297.033" y="399.674" clip-path="url(#SVGID_2_)" fill="#231F20" width="19.727" height="19.912" />
												</g>
											</svg>
										</div>
										<div class="etnc_title">
											<p class="m-0">Pending Questions</p>
										</div>
									</div>
								</a>
							</div>
							<!-- end box -->
							<!-- box -->
							<div class="etn_box text-center">
								<a class="<?php if($method == 'closed_tkt_cpa') { echo 'active'; } ?>" href="<?=base_url('closed_ticket_cpa')?>">
									<div class="etn_content">
										<div class="etnc_icon purple">
											<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
												<g>
													<defs>
														<rect id="SVGID_1_" x="18.499" y="16.421" width="475.001" height="475" />
													</defs>
													<clipPath id="SVGID_2_">
														<use xlink:href="#SVGID_1_" overflow="visible" />
													</clipPath>
													<path clip-path="url(#SVGID_2_)" d="M255.999,16.421c-130.958,0-237.5,106.542-237.5,237.5c0,130.958,106.542,237.5,237.5,237.5
		c61.682,0,120.13-23.536,164.582-66.271c3.849-3.698,3.97-9.82,0.27-13.667c-3.697-3.847-9.815-3.969-13.667-0.269
		C366.352,450.47,312.66,472.088,256,472.088C135.702,472.09,37.832,374.22,37.832,253.921s97.87-218.167,218.167-218.167
		c120.297,0,218.167,97.87,218.167,218.167c0,27.133-4.916,53.603-14.612,78.675c-1.926,4.979,0.549,10.575,5.528,12.503
		c4.98,1.922,10.575-0.55,12.503-5.528c10.56-27.307,15.915-56.122,15.915-85.651C493.5,122.963,386.958,16.421,255.999,16.421" />
													<path clip-path="url(#SVGID_2_)" d="M288.539,274.401c-3.818-3.734-9.938-3.667-13.671,0.146c-3.733,3.814-3.667,9.935,0.144,13.67
		l76.101,74.488c1.882,1.841,4.322,2.756,6.762,2.756c2.508,0,5.015-0.971,6.908-2.902c3.733-3.815,3.668-9.936-0.145-13.672
		L288.539,274.401z" />
													<path clip-path="url(#SVGID_2_)" d="M220.165,231.757c1.886,1.886,4.361,2.83,6.836,2.83c2.474,0,4.947-0.944,6.835-2.83
		c3.775-3.774,3.775-9.895,0-13.67l-72.876-72.876c-3.775-3.774-9.896-3.774-13.669,0c-3.775,3.775-3.775,9.895,0,13.669
		L220.165,231.757z" />
													<path clip-path="url(#SVGID_2_)" d="M364.71,145.21c-3.775-3.775-9.897-3.775-13.67,0L147.289,348.962
		c-3.774,3.774-3.774,9.895,0,13.669c1.885,1.887,4.361,2.83,6.836,2.83c2.474,0,4.946-0.943,6.835-2.83l203.75-203.75
		C368.484,155.104,368.484,148.986,364.71,145.21" />
												</g>
											</svg>
										</div>
										<div class="etnc_title">
											<p class="m-0">Closed Questions</p>
										</div>
									</div>
								</a>
							</div>
							<!-- end box -->
							<!-- box -->
							<!-- <div class="etn_box text-center">
								<a class="<?php if($method == 'show_cpa_account') { echo 'active'; } ?>" href="<?=base_url('cpa_account')?>">
									<div class="etn_content">
										<div class="etnc_icon pink">
											<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
												<g>
													<defs>
														<rect id="SVGID_1_" x="45.85" y="8.149" width="416.65" height="495.7" />
													</defs>
													<clipPath id="SVGID_2_">
														<use xlink:href="#SVGID_1_" overflow="visible" />
													</clipPath>
													<path clip-path="url(#SVGID_2_)" d="M457.182,109.482L258.773,9.275c-1.342-0.713-2.871-1.119-4.498-1.126
		c-0.012-0.001-0.011,0-0.016,0h-0.021h-0.13h-0.021h-0.018c-1.625,0.006-3.154,0.413-4.497,1.126L51.167,109.482
		c-3.26,1.647-5.316,4.989-5.316,8.642v181.333c0,35.344,10.631,65.218,32.5,91.33c20.248,24.177,47.546,41.817,71.58,55.885
		c49.56,29.014,99.089,55.751,99.583,56.018c1.413,0.763,2.991,1.16,4.597,1.16h0.13c1.604,0,3.185-0.398,4.597-1.16
		c0.495-0.267,50.022-27.004,99.583-56.018c4.616-2.701,6.166-8.632,3.465-13.247c-2.7-4.614-8.63-6.166-13.246-3.464
		c-40.583,23.758-81.155,45.987-94.464,53.229c-13.306-7.241-53.87-29.465-94.462-53.228
		c-45.722-26.765-94.498-61.128-94.498-130.505V124.082l188.96-95.438l188.962,95.438v175.376c0,35.602-11.942,63.973-37.581,89.287
		c-3.807,3.756-3.845,9.886-0.089,13.691c3.758,3.807,9.888,3.843,13.693,0.088c29.164-28.793,43.341-62.507,43.341-103.066V118.125
		C462.499,114.472,460.442,111.13,457.182,109.482" />
													<path clip-path="url(#SVGID_2_)" d="M423.772,141.951c0-3.652-2.057-6.995-5.317-8.642L258.538,52.542
		c-2.744-1.386-5.985-1.386-8.729,0L89.893,133.308c-3.26,1.646-5.317,4.989-5.317,8.642v157.508
		c0,25.593,7.608,47.219,23.258,66.113c13.057,15.765,31.497,30.023,61.66,47.681c30.104,17.622,60.127,34.365,80.013,45.308
		c1.454,0.8,3.061,1.2,4.668,1.2s3.215-0.4,4.668-1.2c19.885-10.942,49.907-27.685,80.014-45.308
		c30.161-17.657,48.602-31.916,61.66-47.681c15.65-18.896,23.257-40.521,23.257-66.113L423.772,141.951L423.772,141.951z
		 M404.409,299.458c0,44.538-26.478,68.481-75.336,97.083c-27.655,16.188-55.258,31.64-74.899,42.482
		c-19.642-10.843-47.246-26.295-74.898-42.481c-48.859-28.602-75.336-52.545-75.336-97.083V147.907l150.234-75.876l150.235,75.876
		V299.458z" />
													<path clip-path="url(#SVGID_2_)" d="M307.732,257.821l-15.868-3.47c-3.391-0.741-6.063-3.259-7.129-6.458
		c14.272-9.775,23.656-26.187,23.656-44.754v-35.628c0-29.896-24.322-54.218-54.218-54.218c-29.896,0-54.217,24.322-54.217,54.218
		v35.628c0,18.489,9.309,34.839,23.48,44.629c-1.029,3.247-3.729,5.837-7.173,6.592l-15.686,3.441
		c-12.753,2.798-24.284,9.941-32.466,20.114c-8.183,10.175-12.691,22.967-12.691,36.022v29.196c0,5.348,4.335,9.682,9.682,9.682
		h178.143c5.346,0,9.682-4.334,9.682-9.682v-29.169C352.927,287.159,333.919,263.547,307.732,257.821 M219.32,167.512
		c0-19.219,15.635-34.854,34.854-34.854c14.892,0,27.624,9.389,32.606,22.557l-0.672,0.673
		c-12.673,12.672-29.522,19.652-47.446,19.652H219.32V167.512z M219.32,203.14v-8.238h19.343c18.331,0,35.779-5.684,50.366-16.186
		v24.424c0,19.219-15.635,34.854-34.854,34.854C234.955,237.994,219.32,222.359,219.32,203.14 M274.312,266.247
		c-12.14,8.286-28.285,8.258-40.397-0.085c3.11-2.898,5.582-6.45,7.199-10.405c4.185,1.04,8.558,1.601,13.061,1.601
		c4.432,0,8.735-0.546,12.86-1.554C268.668,259.78,271.168,263.347,274.312,266.247 M333.563,333.453H174.784v-19.516
		c0-17.763,12.593-33.417,29.943-37.222l9.567-2.099c0.278,0.373,0.576,0.734,0.913,1.072
		c10.744,10.742,24.856,16.115,38.968,16.115c14.112,0,28.225-5.372,38.968-16.115c0.329-0.329,0.62-0.682,0.891-1.044l9.563,2.092
		c17.365,3.797,29.968,19.453,29.968,37.229V333.453z" />
													<path clip-path="url(#SVGID_2_)" d="M391.439,411.701c-1.799-1.802-4.288-2.838-6.843-2.838c-2.547,0-5.036,1.036-6.847,2.838
		c-1.8,1.8-2.826,4.298-2.826,6.844c0,2.547,1.026,5.045,2.826,6.846c1.811,1.801,4.3,2.836,6.847,2.836
		c2.555,0,5.044-1.035,6.843-2.836c1.812-1.801,2.847-4.299,2.847-6.846C394.286,415.999,393.251,413.501,391.439,411.701" />
													<path clip-path="url(#SVGID_2_)" d="M139.833,164.886c-1.799-1.8-4.297-2.836-6.854-2.836c-2.547,0-5.034,1.036-6.844,2.836
		c-1.801,1.801-2.827,4.299-2.827,6.845s1.026,5.044,2.827,6.845c1.811,1.8,4.297,2.837,6.844,2.837
		c2.556,0,5.044-1.037,6.854-2.837c1.802-1.801,2.838-4.299,2.838-6.845S141.634,166.687,139.833,164.886" />
													<path clip-path="url(#SVGID_2_)" d="M132.984,194.416c-5.346,0-9.682,4.334-9.682,9.682V256c0,5.348,4.335,9.682,9.682,9.682
		c5.347,0,9.682-4.334,9.682-9.682v-51.902C142.666,198.75,138.33,194.416,132.984,194.416" />
												</g>
											</svg>
										</div>
										<div class="etnc_title">
											<p class="m-0">Account</p>
										</div>
									</div>
								</a>
							</div> -->
							<!-- end box -->
							<!-- box -->
							<div class="etn_box text-center">
								<a class="<?php if($method == 'review_ratting') { echo 'active'; } ?>" href="<?=base_url('cpa_review_ratting')?>">
									<div class="etn_content">
										<div class="etnc_icon red">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
												<path fill="none" stroke="#fff" stroke-width="20" stroke-miterlimit="10" d="M380.393,483.458c-7.05,0-13.838-1.647-20.162-4.909
	l-102.344-52.628c-1.506-0.757-3.625-0.757-5.129,0.013l-102.333,52.615c-17.901,9.183-40.371,4.887-53.429-10.301
	c-8.325-9.643-11.685-21.866-9.478-34.408l19.527-111.426c0.308-1.747-0.296-3.525-1.604-4.777l-82.785-78.919
	c-11.894-11.344-16.1-27.993-10.971-43.456c5.15-15.474,18.56-26.533,35.011-28.861l114.424-16.254
	c1.79-0.252,3.338-1.362,4.14-2.943l51.167-101.41c7.358-14.574,22.25-23.634,38.877-23.634c16.637,0,31.54,9.061,38.887,23.634
	l51.155,101.388c0.803,1.582,2.339,2.68,4.142,2.933l114.435,16.265c16.452,2.339,29.861,13.398,35.012,28.861
	c5.13,15.475,0.923,32.124-10.96,43.469l-82.796,78.929c-1.307,1.241-1.911,3.021-1.604,4.777l19.537,111.438
	c2.229,12.53-1.143,24.755-9.488,34.419C405.313,477.923,393.209,483.458,380.393,483.458z" />
											</svg>
										</div>
										<div class="etnc_title">
											<p class="m-0">Reviews & Rating</p>
										</div>
									</div>
								</a>
							</div>
							<!-- end box -->
							<!-- box -->
							<div class="etn_box text-center">
								<a class="<?php if($method == 'cpa_contact') { echo 'active'; } ?>" href="<?=base_url('cpa_contact_us')?>">
									<div class="etn_content">
										<div class="etnc_icon green">
											<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
												<g>
													<defs>
														<rect id="SVGID_1_" x="10.083" y="20.5" width="490.526" height="470.04" />
													</defs>
													<clipPath id="SVGID_2_">
														<use xlink:href="#SVGID_1_" overflow="visible" />
													</clipPath>
													<path clip-path="url(#SVGID_2_)" d="M325.485,346.361v-8.54c2.415-1.95,4.736-4.085,6.963-6.313
		c17.841-19.645,29.073-44.385,32.122-70.743c16.034-2.443,30.486-11.036,40.291-23.953c13.462-19.032,14.67-46.419,3.437-80.77
		c-0.661-1.981-1.968-3.682-3.713-4.827l-5.107-3.435c0.755-30.994-9.959-61.176-30.08-84.761
		c-24.973-28.13-63.314-42.334-114.099-42.52c-50.689,0-89.125,14.39-114.098,42.148c-20.121,23.585-30.833,53.767-30.08,84.761
		l-5.106,3.435c-1.746,1.146-3.054,2.847-3.714,4.828c-11.233,34.536-10.025,61.738,3.436,80.77
		c9.77,13.007,24.221,21.7,40.292,24.23c3.062,26.401,14.329,51.177,32.214,70.837c2.21,2.223,4.534,4.331,6.963,6.313v8.54
		C149.649,353.232,7.7,386.563,10.114,481.256c0,5.127,4.157,9.284,9.284,9.284h471.896c5.127,0,9.284-4.157,9.284-9.284
		C502.992,386.563,361.042,353.232,325.485,346.361 M140.459,239.97c-7.89-2.649-14.766-7.676-19.682-14.39l0.463,0.093
		c-9.284-13.554-10.12-34.072-1.857-61.18l6.777-4.549c2.852-1.903,4.422-5.222,4.085-8.635
		c-1.562-27.747,7.463-55.054,25.251-76.405c20.983-23.767,54.682-35.65,99.801-35.836c45.119-0.186,78.82,12.069,100.173,35.836
		c17.789,21.351,26.815,48.659,25.253,76.405c-0.338,3.413,1.234,6.731,4.086,8.635l6.775,4.549
		c8.264,27.016,7.706,47.626-1.855,61.18c-4.951,6.72-11.857,11.746-19.775,14.39c11.198-12.743,16.67-29.525,15.133-46.419
		c-1.74-10.165-7.038-19.378-14.948-25.995c-3.99-92.838-69.07-103.236-97.108-103.236c-5.935-0.017-11.861,0.418-17.732,1.3
		c-5.868-0.883-11.797-1.317-17.731-1.3c-27.852,0-92.838,10.213-97.108,103.236c-7.961,6.564-13.323,15.746-15.134,25.903
		C123.778,210.446,129.251,227.233,140.459,239.97 M351.665,163.842c-38.954,2.251-77.668-7.468-110.941-27.851
		c-3.766-2.645-8.9-2.131-12.068,1.207c-18.568,19.96-52.454,24.602-68.794,25.624c5.015-65.637,44.749-79.934,78.17-79.934
		c5.32-0.038,10.633,0.397,15.875,1.3c1.226,0.25,2.488,0.25,3.713,0c5.245-0.9,10.558-1.336,15.878-1.3
		c33.141,0,73.063,14.668,77.705,80.862L351.665,163.842z M163.112,241.734l0.371,0.092c0.02-2.288-0.806-4.503-2.321-6.22
		c-12.719-14.576-18.568-27.851-16.99-38.806c0.758-6.102,3.771-11.699,8.45-15.69c12.254,0,55.703-2.321,83.554-26.366
		c31.367,18.033,66.872,27.628,103.05,27.852c6.222,0,12.533,0,19.125-1.021c4.552,3.885,7.521,9.3,8.354,15.226
		c1.579,10.769-4.271,24.23-16.988,38.806c-1.514,1.717-2.341,3.933-2.321,6.22v4.828l-54.031,28.965
		c-10.723-10.152-27.646-9.688-37.799,1.034c-10.152,10.723-9.689,27.646,1.033,37.798c10.724,10.151,27.646,9.689,37.799-1.034
		c4.704-4.97,7.324-11.553,7.32-18.395c0.042-0.836,0.042-1.67,0-2.506l42.614-22.839c-3.658,18.307-12.263,35.26-24.881,49.019
		c-16.457,15.846-38.735,24.178-61.553,23.023h-4.642c-22.766,1.132-44.996-7.162-61.459-22.931
		C162.461,289.545,163.112,242.198,163.112,241.734 M283.15,295.022c0,4.563-3.698,8.263-8.263,8.263
		c-4.563,0-8.262-3.699-8.262-8.263s3.699-8.262,8.262-8.262C279.452,286.761,283.15,290.459,283.15,295.022 M246.015,471.415H28.96
		c7.334-69.722,120.689-98.872,156.155-106.393v16.619c0,21.074,25.623,37.135,60.9,39.826V471.415z M203.682,381.642v-0.279
		v-31.751c15.431,7.156,32.288,10.713,49.296,10.397h4.642c17.008,0.315,33.867-3.241,49.297-10.397v32.03
		c0,8.819-20.146,21.537-51.618,21.537C223.827,403.179,203.682,390.461,203.682,381.642 M264.583,471.693v-50.318
		c35.279-2.413,60.902-18.566,60.902-39.827v-16.246c35.742,7.426,148.541,36.577,156.153,106.392H264.583z" />
												</g>
											</svg>
										</div>
										<div class="etnc_title">
											<p class="m-0">Contact Support</p>
										</div>
									</div>
								</a>
							</div>
							<!-- end box -->
						</div>
					</div>
				</div>


				<!-- Modal -->
				<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<div class="modal-body text-center">
								<div class="modal_content text-left">
									<div class="mbc_form form_div">
										<p class="validation" style="color:red"></p>
										<form action="" method="">
											<div class="form_content_height scroll_div">
												<div class="form_content form-group m-0">
													<input type="password" class="form-control" id="old_pass" name="old_pass" placeholder="Old Password">
												</div>
												<div class="form_content expert_anws form-group m-0">
													<input type="password" class="form-control" id="new_pass" name="new_pass" placeholder="New Password">
												</div>

												<div class="form_content form-group m-0">
													<input type="password" class="form-control" id="conf_pass" name="conf_pass" placeholder="Confirm Password">
												</div>
											</div>
											
											<div class="form_content button form-group m-0">
												<button type="button" class="btn btn-secondary col-12 change_pass">Submit</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- drawer -->
				<div class="drawer drawer-right slide" tabindex="-1" role="dialog" aria-labelledby="drawer-demo-title" aria-hidden="true" id="collapsibleNavbar">
					<div class="drawer-content drawer-content-scrollable" role="document">
						<div class="drawer-header">
							<h4 class="drawer-title" id="drawer-1-title">Notifications</h4>
							<button type="button" class="btn close_btn" data-dismiss="drawer" aria-label="Close"><span>×</span></button>
						</div>
						<div class="drawer-body">
							<div class="drawer-row">
								<div class="clear_btn_div">
									<a href="#" class="clear_btn">Clear All</a>
								</div>
								<div class="notification">
									
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="modal fade" id="video_calling" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button> -->
							<div class="modal-body text-center">
								<input type="hidden" name="cust_id" id="cust_id" value=""/>
								<div class="modal_content text-center">
									<img src="<?=base_url().'assets/images/call.gif'?>" class="call_image">
								</div>
								<div class="row">
									<div class="col-md-6">
									<div class="cust_data">
										<p class="cust_name"></p>
										<p class="pin_code"></p>
									</div>	
									</div>		
									<div class="col-md-6">
										<img src="<?=base_url().'assets/images/unknown-512.png'?>" class="cust_image">
									</div>		
								</div>
								<div class="modal_content text-center">
									<div class="mtdb_btn">
										<a href="<?=base_url().'video_call_cpa'?>" class="btn join_btn">Join</a>
										<a href="#" class="btn cut_btn">Cancel</a>
									</div>
									
									<!-- <a href="<?=base_url().'Video_call'?>">Join</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="modal fade" id="video_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button> -->
							<div class="modal-header justify-content-center">
								<h5 class="modal-title" id="exampleModalLabel">Video Call</h5>
							</div>
							<div class="modal-body text-center">
								<form>

									<div class="form-group" id="card-number-field">
										<label for="cardNumber">Description</label>
										<textarea name="cpa_video_desc" class="form-control" id="cpa_video_desc"></textarea>
									</div>
									<p class="dec_valid" style="color:red;"></p>
									<div class="modal-footer justify-content-center">
										<button type="button" class="btn btn-secondary" id="save_des">Save</button>
									</div>
								</form>	
							</div>
						</div>
					</div>
				</div>

				<style type="text/css">
			        .loader {
			            background: url('<?= base_url('assets/images/loader1.gif'); ?>');
			            top: 0;
			            right: 0;
			            left: 0;
			            bottom: 0;
			            position: fixed;
			            z-index: 999;
			            display: none;
			            background-position: center;
			            background-color: #ffffffa6;
			            background-repeat: no-repeat;
			            background-size: 70px;
			        }
			       /* .clear_btn_div{
			        	text-align: right;
			        	margin-right: 25px;
			        }
			        .clear_btn{
			        	background: #1969ce;
					    color: #FFF;
					    border: 1px solid;
					    border-radius: 3px;
					    padding: 5px 10px 5px 10px;
			        }
			        .clear_btn:hover{
			        	background: #FFF;
					    color: #000;
			        }*/
		        </style>

				<div class="music">
							
				</div>
				
				<div class="noti_btn_style">
					<style>.navbar-toggler-icon:after{ background-color: transparent !important;}</style>
				</div>

				<script type="text/javascript">
					
					
					$(document).on('click', '#save_des', function(){
						var desc = $('#cpa_video_desc').val();
						if(desc == ''){
							$('.dec_valid').html('Please enter the description');
							setTimeout(function() {
								$('.dec_valid').slideUp();
							}, 5000);	
							return false;		
						}
						var url = '<?=base_url()?>'+'question_answer/update_description_video_cpa';
						$.ajax({
							url: url,
							type: "POST",
							data: {'desc':desc},
							success: function(response) {
								
								window.location.href = "<?=base_url()?>open_ticket_cpa";
								
							}
						});		
							
					});

					$(document).on('click', '.change_pass', function() {

						var old_pass = $('#old_pass').val();
						var new_pass = $('#new_pass').val();
						var conf_pass = $('#conf_pass').val();

						if (old_pass == '' || new_pass == '' || conf_pass == '') {

							$('.validation').show();
							$('.validation').html('Requied all fields');
							setTimeout(function() {
								$('.validation').slideUp();
							}, 5000);
							return false;
						}

						if (new_pass != conf_pass) {
							$('.validation').show();
							$('.validation').html('please enter the same password on both fields.');
							setTimeout(function() {
								$('.validation').slideUp();
							}, 5000);
							return false;
						}

						var url = '<?=base_url()?>' + 'customer_register/change_password';
						$.ajax({
							url: url,
							type: "POST",
							data: {
								'old_pass': old_pass,
								'new_pass': new_pass
							},
							success: function(response) {
								if (response == 0) {
									$('.validation').show();
									$('.validation').html('Invalid your old password');
									setTimeout(function() {
										$('.validation').slideUp();
									}, 5000);
								} else {
									$('.validation').show();
									$('.validation').html('Your password changed successfully');
									$('.validation').css('color', 'green');
									setTimeout(function() {
										$('.validation').slideUp();
										$('#change_password').modal('toggle');
										$('#change_password').modal('hide');
									}, 5000);
								}
							}
						});
					});

					$(document).on('click', '.noti_btn', function(){

						var url = '<?=base_url()?>' + 'notification';
						$.ajax({
							url: url,
							type: "POST",
							success: function(response) {
								$('.notification').html(response);
							}
						});
					});

					$(document).on('click', '.noti_status', function(){
						var not_id = $(this).attr('data-id');
						var data_status = $(this).attr('data-status');
						
						var url = '<?=base_url()?>' + 'notification/change_noti_status';
						$.ajax({
							url: url,
							type: "POST",
							data: {
								'not_id': not_id,
								'data_status':data_status
							},
							success: function(response) {

								if(data_status == 1){
									window.location.href = '<?=base_url()?>' + 'open_ticket_cpa/'+not_id;
								}
								if(data_status == 3){
									window.location.href = '<?=base_url()?>' + 'closed_ticket_cpa/'+not_id;
								}
								if(data_status == 0){
									window.location.href = '<?=base_url()?>' + 'cpa_review_ratting';
								}	
								$('.notification').html(response);
							}
						});
					});
					
					

					setInterval(function(){get_notification();},500);

					function get_notification(){

						//alert('get_notificationget_notification');
						var url = '<?=base_url()?>'+'notification/get_notification'
						$.ajax({
							url: url,
							type: "POST",
							success: function(response){
								if(response == 0){
									$('.noti_btn_style').html('<style>.navbar-toggler-icon:after{ background-color: transparent !important;}</style>');
									console.log('dfd');
									//$('.navbar-toggler-icon .noti_active:after').css('background-color', 'transparent', '!important');
									// $('.noti_active').css('display', 'none');
								}else{
									$('.noti_btn_style').html('<style>.navbar-toggler-icon:after{ background-color: #2fc659 !important;}</style>');
									// $('.noti_active').css('display', 'block');
								}	
							}
						});	
					}

					setInterval(function(){close_video_alert();},500);

					function close_video_alert(){
						//alert('get_notificationget_notification');
						var url = '<?=base_url()?>'+'question_answer/close_video_call'
						$.ajax({
							url: url,
							type: "POST",
							success: function(response){
								var all_data = JSON.parse(response);
								console.log(all_data.video_status);
								if(all_data.video_status == 0){
									console.log('Not call');
									var player = document.getElementById('myAudio');
									console.log(player);
									if(player != null){
										player.pause();
								    	player.src = player.src;
								    	$('.music').html('');
									}
								   	//$('#video_calling').modal({backdrop: 'static', keyboard: false});
									$('#video_calling').modal('hide');	
									
											
								}else{
									if(all_data.video_fun == 0){
										console.log('call');
										video_alert();
									}
								}	
							}
						});	
					}

					//var call_fun = setInterval(function(){video_alert();},2000);
					function video_alert(){
						var url = '<?=base_url()?>'+'question_answer/check_video_call'
						$.ajax({
							url: url,
							type: "POST",
							success: function(response) {

								var all_data = JSON.parse(response);
								var href_url = '<?=base_url()?>'+'video_call_cpa/'+all_data.cust_id;
								//.join_btn
								if(all_data.status == 1){
									//clearInterval(call_fun);
									var name = all_data.cust_firstname+' '+all_data.cust_lastname;
									var pincode = 'Zip Code: '+all_data.cust_zip_code;
									
									//$('#cust_id').val(all_data.cust_id);
									$('.cust_name').html(name);
									$('.pin_code').html(pincode);
									$('.cust_image').attr('src', all_data.cust_image);
									$('#video_calling').modal({backdrop: 'static', keyboard: false});
									// $('#video_calling').modal('toggle');
									$('#video_calling').modal('show');
									//ring tone
									$('.music').html('<audio id="myAudio" loop autoplay> <source src="<?=base_url()?>assets/audio/simple-ringtone-25290.mp3" type="audio/wav"></audio>');
									//send_notification(all_data.cust_firstname, all_data.cust_lastname);
								}	
							}
						});
					}


					$(document).on('click', '.cut_btn', function(){

						var url = '<?=base_url()?>' + 'question_answer/cut_video_call';
						$.ajax({
							url: url,
							type: "POST",
							success: function(response) {
								var player = document.getElementById('myAudio');
								console.log(player);
								if(player != null){
									player.pause();
							    	player.src = player.src;
							    	$('.music').html('');
								}
							   	//$('#video_calling').modal({backdrop: 'static', keyboard: false});
								$('#video_calling').modal('hide');
							}
						});
					});

					$(document).on('click', '.clear_btn', function(){
						var url = '<?=base_url()?>' + 'notification/clear_notification';
						$.ajax({
							url: url,
							type: "POST",
							success: function(response) {
								if(response == 1){
									
									$('.notification').html("<div class='noti_box d-flex align-items-center flex-wrap'><div>No new notifications</div></div>");
								}
							}
						});
					});
					

					function send_notification(firstname, lastname){
						var blogs = [
						    ["CPA2GO","www.spaceotechnologies.com"],
						    ["CPA2GO","www.spaceotechnologies.com"],
						    ["CPA2GO","www.spaceotechnologies.com"],
						    ["CPA2GO","www.spaceotechnologies.com"],
						    ["CPA2GO","www.spaceotechnologies.com"]
						];

						setTimeout(function(){
						    
						    var x = Math.floor((Math.random() * 5) + 1);
						    var title = blogs[x][0]+' Incoming video call from '+firstname+' '+lastname;
						    var desc = 'designpoint.in/cpa2go/open_ticket_cpa';
						    //var url=blogs[x][1];
						    var url='designpoint.in/cpa2go/open_ticket_cpa';
						    notifyBrowser(title,desc,url);
						}, 1000);

						function notifyBrowser(title,desc,url)
						{
						    if (!Notification) {
						        console.log('Desktop notifications not available in your browser..');
						        return;
						    }
						    if (Notification.permission !== "granted")
						    {
						        Notification.requestPermission();
						    }

						    var notification = new Notification(title, {
						        icon:'https://designpoint.in/cpa2go/assets/media/logos/C2G.png',
						        body: desc,
						    });
						}
					} 
				</script>

				<!-- <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
				<script>
				  var OneSignal = window.OneSignal || [];
				  OneSignal.push(function() {
				    OneSignal.init({
				      appId: "1d7468d8-0366-4399-8f4f-016592d47e13",
				      notifyButton: {
				        enable: true,
				      },
				    });
				  });
				</script> -->
