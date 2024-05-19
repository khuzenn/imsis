<?php
if ($use_username) {
	$username = array(
		'name' => 'username',
		'id' => 'username',
		'class' => 'form-control',
		'placeholder' => 'Username',
		'value' => set_value('username'),
		'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
		'size' => 30,
		'autocomplete' => 'off'
	);
}
$email = array(
	'name' => 'email',
	'id' => 'email',
	'class' => 'form-control',
	'placeholder' => 'Email',
	'value' => set_value('email'),
	'maxlength' => 80,
	'size' => 30,
	'autocomplete' => 'off'
);
$password = array(
	'name' => 'password',
	'id' => 'password',
	'class' => 'form-control',
	'placeholder' => 'Katasandi',
	'value' => set_value('password'),
	'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
	'size' => 30,
	'autocomplete' => 'off'
);
$confirm_password = array(
	'name' => 'confirm_password',
	'id' => 'confirm_password',
	'class' => 'form-control',
	'placeholder' => 'Konfirmasi Katasandi',
	'value' => set_value('confirm_password'),
	'maxlength' => $this->config->item('password_max_length', 'tank_auth'),
	'size' => 30,
	'autocomplete' => 'off'
);
// $captcha = array(
// 	'name'         => 'captcha',
// 	'id'           => 'captcha',
// 	'class'        => 'input',
// 	'maxlength'    => 8,
// 	'autocomplete' => 'off'
// );
$captcha = array(
	'name' => 'captcha',
	'id' => 'captcha',
	'class' => 'form-control',
	'placeholder' => 'Captcha',
	'autocomplete' => 'off'
);
$label_captcha = "Confirmation Code";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>INTI Marketing & Sales Information System (IMSIS)</title>

	<meta name="description" content="Ceres admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
	<meta name="keywords" content="Ceres theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="utf-8" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Ceres HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/products/ceres-html-pro" />
	<meta property="og:site_name" content="Keenthemes | Ceres HTML Free" />
	<link rel="canonical" href="Https://preview.keenthemes.com/ceres-html-free" />
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/pt-inti.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?php echo base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?php echo base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->

	<!--end::Main-->
	<script>
		var hostUrl = "<?php echo base_url(); ?>assets/";
	</script>
	<!--begin::Javascript-->
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?php echo base_url(); ?>assets/plugins/global/plugins.bundle.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Page Vendors Javascript(used by this page)-->
	<script src="<?php echo base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<!--end::Page Vendors Javascript-->
	<!--begin::Page Custom Javascript(used by this page)-->
	<script src="<?php echo base_url(); ?>assets/js/custom/widgets.js"></script>
	<!--end::Page Custom Javascript-->
	<!--end::Javascript-->

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body id="kt_body" class="page-auth">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(<?php echo base_url() ?>/assets/media/illustrations/dozzy-1/14.png">
			<!--begin::Content-->
			<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
				<!--begin::Logo-->
				<a href="/ceres-html-pro/?page=index" class="mb-12">
					<img alt="Logo" src="<?php echo base_url() ?>assets-landing/images/pt-inti.png" class="h-40px" />
				</a>
				<!--end::Logo-->
				<!--begin::Wrapper-->
				<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

					<?php echo form_open('auth/register', array('class' => 'form w-100', 'novalidate' => 'novalidate', 'id' => 'kt_sign_in_form')); ?>
					<!--begin::Heading-->
					<div class="text-center mb-8">
						<!--begin::Title-->
						<h1 class="text-dark mb-3">INTI Marketing & Sales Information System (IMSIS)</h1>
						<!--end::Title-->
						<!--begin::Link-->
						<div class="text-gray-400 fw-bold fs-4">Punya Akun?
							<?php echo anchor('/Auth/login/', 'Masuk', array('class' => 'link-primary fw-bolder')); ?>
						</div>
						<!--end::Link-->
					</div>
					<!--begin::Heading-->
					<?php
					if (isset($registration_fields)) {
						foreach ($registration_fields as $val) {
							list($name, $label,, $type) = $val;
							$field = array('name' => $name, 'id' => $name, 'value' => set_value($name), 'placeholder' => $label, 'class' => 'form-control',);
							if ($type == 'text') {
								$field += array('size' => 30);
								$attr = isset($val[4]) ? $val[4] : FALSE;
								if ($attr) {
									foreach ($attr as $k => $v) {
										$field[$k] = $v;
									}
								}
					?>
								<div class="fv-row mb-3">
									<!--begin::Label-->
									<label class="form-label fs-6 fw-bolder text-dark"><?php echo $field['placeholder'] ?></label>
									<!--end::Label-->
									<?php echo form_input($field, array('class' => 'form-control form-control-lg form-control-solid', 'autocomplete' => 'off')); ?>
									<span style="color: red;">
										<?php echo form_error($field['name']); ?><?php echo isset($errors[$field['name']]) ? $errors[$field['name']] : ''; ?>
									</span>
									<span class="form-bar"></span>
								</div>
					<?php
							}
						}
					}
					?>
					<div class="fv-row mb-3">
						<label class="form-label fs-6 fw-bolder text-dark">Username</label>
						<?php echo form_input($username, array('class' => 'form-control form-control-lg form-control-solid', 'autocomplete' => 'off')); ?>
						<span style="color: red;">
							<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']]) ? $errors[$username['name']] : ''; ?>
						</span>
						<span class="form-bar"></span>
					</div>
					<div class="fv-row mb-3">
						<label class="form-label fs-6 fw-bolder text-dark">Email</label>
						<?php echo form_input($email, array('class' => 'form-control form-control-lg form-control-solid', 'autocomplete' => 'off')); ?>
						<span style="color: red;">
							<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?>
						</span>
						<span class="form-bar"></span>
					</div>
					<div class="fv-row mb-3">
						<label class="form-label fs-6 fw-bolder text-dark">Katasandi</label>
						<?php echo form_password($password, array('class' => 'form-control form-control-lg form-control-solid', 'autocomplete' => 'off')); ?>
						<span style="color: red;">
							<?php echo form_error($password['name']); ?>
						</span>
						<span class="form-bar"></span>
					</div>
					<div class="fv-row mb-5">
						<label class="form-label fs-6 fw-bolder text-dark">Konfirmasi Katasandi</label>
						<?php echo form_password($confirm_password, array('class' => 'form-control form-control-lg form-control-solid', 'autocomplete' => 'off')); ?>
						<span style="color: red;">
							<?php echo form_error($confirm_password['name']); ?>
						</span>
						<span class="form-bar"></span>
					</div>
					<?php
					if ($captcha_registration) {
						if ($use_recaptcha) {
					?>
							<div class="fv-row mb-10">
								<center>
									<div class="captcha_wrapper">
										<div class="g-recaptcha" data-sitekey="6LeyaJseAAAAAPg0OLAbqUFQ1s8XCiLqXsGR6xv-"></div>
										<span style="color:red;"><?php echo form_error('captcha_validation'); ?></span>
									</div>
								</center>
							</div>
						<?php
						} else {
						?>
							<div class="fv-row mb-10">
								<center>
									<img src="<?php echo $captcha_html; ?>" id="captcha" />
								</center>
								<label for="captcha" class="label"><?= $label_captcha ?></label>
								<div class="mws-form-item large">
									<?php echo form_input($captcha); ?>
								</div>
								<span style="color:red;"><?php echo form_error($captcha['name']); ?></span>
							</div>
					<?php
						}
					}
					?>
					<!--begin::Actions-->
					<div class="text-center">
						<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
							<span class="indicator-label">Daftar Sekarang</span>
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
					<?php echo form_close(); ?>
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
</body>

</html>
