<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Login Page 5</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="{{url('assets/css/pages/login/login-5.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{url('assets/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('assets/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('assets/css/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('assets/css/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
        <link rel="shortcut icon" href="{{url('assets/media/logos/favicon.ico')}}" />
        
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile" style="background-image: url(assets/media/bg/bg-3.jpg);">
					<div class="kt-login__left">
						<div class="kt-login__wrapper">
							<div class="kt-login__content">
								<a class="kt-login__logo" href="#">
									<img src="assets/media/logos/logo-5.png">
								</a>
								<h3 class="kt-login__title">JOIN OUR GREAT COMMUNITY</h3>
								<span class="kt-login__desc">
									The ultimate Bootstrap & Angular 6 admin theme framework for next generation web apps.
								</span>
								<div class="kt-login__actions">
									<button type="button" id="kt_login_signup" class="btn btn-outline-brand btn-pill">Get An Account</button>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-login__divider">
						<div></div>
					</div>
					<div class="kt-login__right">
						<div class="kt-login__wrapper">
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Login To Your Account</h3>
								</div>
								<div class="kt-login__form">
                                    @yield('login')
								</div>
							</div>
							<div class="kt-login__signup">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign Up</h3>
                                    <div class="kt-login__desc">Enter your details to create your account:</div>
                                </div>

                                <div class="kt-login__form">
                                    @yield('register')
                                </div>

							</div>
							<div class="kt-login__forgot">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Forgotten Password ?</h3>
									<div class="kt-login__desc">Enter your email to reset your password:</div>
								</div>
								<div class="kt-login__form">
                                <form class="kt-form" method="POST" action="{{ route('password.email') }}">
                                    @csrf
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Email" name="email" id="kt_email" autocomplete="off">
										</div>
										<div class="kt-login__actions">
                                            {{-- <button id="kt_login_forgot_submit" class="btn btn-brand btn-pill btn-elevate">Request</button> --}}
                                            <input type="submit"  value="request" class="btn btn-brand btn-pill btn-elevate"/>
											<button type="submit" id="kt_login_forgot_cancel" class="btn btn-outline-brand btn-pill">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="{{url('assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="{{url('assets/js/pages/custom/login/login-general.js')}}" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
