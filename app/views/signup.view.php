<!DOCTYPE html>
    <!--
    Author: Keenthemes
    Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
    Purchase: https://1.envato.market/EA4JP
    Website: http://www.keenthemes.com
    Contact: support@keenthemes.com
    Follow: www.twitter.com/keenthemes
    Dribbble: www.dribbble.com/keenthemes
    Like: www.facebook.com/keenthemes
    License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
    -->
<html lang="en">
	<!--begin::Head-->
	<head>
<!--        <base href="--><?//=ROOT?><!--">-->
		<title>Signup | <?=APP_NAME?></title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="<?=ROOT?>/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?=ROOT?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=ROOT?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-dark">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(<?ROOT?>/assets/media/illustrations/sketchy-1/14.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="<?=ROOT?>" class="mb-12">
						<img alt="Logo" src="<?=ROOT?>/assets/media/logos/logo-1-dark.svg" class="h-40px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form method="post" novalidate="novalidate" id="kt_sign_up_form">
							<!--begin::Heading-->
							<div class="mb-10 text-center">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Create an Account</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">Already have an account?
								<a href="<?=ROOT?>/signin" class="link-primary fw-bolder">Sign in here</a></div>
								<!--end::Link-->
							</div>
							<!--end::Heading-->
							<!--begin::Action-->
							<button type="button" class="btn btn-light-primary fw-bolder w-100 mb-10">
							<img alt="Logo" src="<?=ROOT?>/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Sign in with Google</button>
							<!--end::Action-->
							<!--begin::Separator-->
							<div class="d-flex align-items-center mb-10">
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								<span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
							</div>
							<!--end::Separator-->
							<!--begin::Input group-->
							<div class="row fv-row mb-7">
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">First Name</label>
									<input class="form-control form-control-lg form-control-solid <?=!empty($errors['firstname']) ? 'border-danger':'';?>" type="text" placeholder="" value="<?= set_value('firstname')?>" name="firstname" autocomplete="off" required/>
                                    <?php if(!empty($errors['firstname'])):?>
                                        <small class="text-danger"><?=$errors['firstname']?></small>
                                    <?php endif;?>
                                </div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-dark fs-6">Last Name</label>
									<input class="form-control form-control-lg form-control-solid <?=!empty($errors['lastname']) ? 'border-danger':'';?>" type="text" placeholder="" value="<?= set_value('lastname')?>" name="lastname" autocomplete="off" required/>
                                    <?php if(!empty($errors['lastname'])):?>
                                        <small class="text-danger"><?=$errors['lastname']?></small>
                                    <?php endif;?>
                                </div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-7">
								<label class="form-label fw-bolder text-dark fs-6">Email</label>
								<input class="form-control form-control-lg form-control-solid <?=!empty($errors['email']) ? 'border-danger':'';?>" type="email" placeholder="" value="<?= set_value('email')?>" name="email" autocomplete="on" required/>
                                <?php if(!empty($errors['email'])):?>
                                    <small class="text-danger"><?=$errors['email']?></small>
                                <?php endif;?>
                            </div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-10 fv-row" data-kt-password-meter="true">
								<!--begin::Wrapper-->
								<div class="mb-1">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6">Password</label>
									<!--end::Label-->
									<!--begin::Input wrapper-->
									<div class="position-relative mb-3">
										<input class="form-control form-control-lg form-control-solid <?=!empty($errors['password']) ? 'border-danger':'';?>" type="password" placeholder="" value="<?= set_value('password')?>" name="password" autocomplete="off" required/>
										<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
											<i class="bi bi-eye-slash fs-2"></i>
											<i class="bi bi-eye fs-2 d-none"></i>
										</span>
									</div>
									<!--end::Input wrapper-->
									<!--begin::Meter-->
									<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
										<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
									</div>
									<!--end::Meter-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Hint-->
								<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
								<!--end::Hint-->
                                <?php if(!empty($errors['password'])):?>
                                    <small class="text-danger"><?=$errors['password']?></small>
                                <?php endif;?>
							</div>
							<!--end::Input group=-->
							<!--begin::Input group-->
							<div class="fv-row mb-5">
								<label class="form-label fw-bolder text-dark fs-6">Retype Password</label>
								<input class="form-control form-control-lg form-control-solid <?=!empty($errors['retype_password']) ? 'border-danger':'';?>" type="password" placeholder="" value="<?= set_value('retype_password')?>" name="retype_password" autocomplete="off" required/>
                                <?php if(!empty($errors['retype_password'])):?>
                                    <small class="text-danger"><?=$errors['retype_password']?></small>
                                <?php endif;?>
                            </div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<label class="form-check form-check-custom form-check-solid form-check-inline">
									<input <?= set_value('terms') ? 'checked':''; ?> class="form-check-input" type="checkbox" name="terms" value="1" />
									<span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
									<a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
								</label>
                                <?php if(!empty($errors['terms'])):?>
                                    <small class="text-danger"><?=$errors['terms']?></small>
                                <?php endif;?>
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="<?=ROOT?>" class="text-muted text-hover-primary px-2">About</a>
						<a href="<?=ROOT?>" class="text-muted text-hover-primary px-2">Contact</a>
						<a href="<?=ROOT?>" class="text-muted text-hover-primary px-2">Contact Us</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Main-->
		<script>var hostUrl = "<?=ROOT?>/assets/";</script>
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?=ROOT?>/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?=ROOT?>/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
<!--		<script src="--><?//=ROOT?><!--/assets/js/custom/authentication/sign-up/general.js"></script>-->
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
        <!--    loading    -->
        <script>
            // Element to indecate
            var button = document.querySelector("#kt_sign_up_submit");

            // Handle button click event
            button.addEventListener("click", function() {
                // Activate indicator
                button.setAttribute("data-kt-indicator", "on");

                // Disable indicator after 3 seconds
                setTimeout(function() {
                    button.removeAttribute("data-kt-indicator");
                }, 3000);
            });
        </script>
	</body>
	<!--end::Body-->
</html>