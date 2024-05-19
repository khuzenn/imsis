<?php
//$nama_lengkap = array(
//		'name' => 'name',
//		'id' => 'nama_lengkap',
//		'class' => 'form-control',
//		'value' => set_value('nama_lengkap'),
//		'placeholder' => 'Nama Lengkap',
//		'autocomplete' => 'off'
//);
$username = array(
		'name' => 'username',
		'id' => 'username',
		'class' => 'form-control',
		'value' => set_value('username'),
		'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
		'placeholder' => 'Username',
		'autocomplete' => 'off'
);
$email = array(
		'name' => 'email',
		'id' => 'email',
		'class' => 'form-control',
		'value' => set_value('email'),
		'placeholder' => 'Email',
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
$foto = array(
		'class' => 'form-control',
		'name' => 'foto',
		'id' => 'foto',
		'type' => 'file',
		'value' => set_value('foto'),
		'autocomplete' => 'off'
);
$captcha = array(
		'name' => 'captcha',
		'id' => 'captcha',
		'class' => 'form-control',
		'placeholder' => 'Captcha',
		'autocomplete' => 'off'
);
$label_captcha = "Confirmation Code";
?>

<div class="content flex-row-fluid" id="kt_content">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-8">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="card card-primary">
				<div class="card-header border-0 pt-5 pb-3">
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Form Pengguna</h3>
				</div>
				<?php echo form_open($action, 'class="form-horizontal" enctype="multipart/form-data"'); ?>
				<div class="card-body pt-0">
					<?php
					if (isset($registration_fields)) {
						foreach ($registration_fields as $val) {
							list($name, $label, , $type) = $val;
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
								<div class="mb-3 row">
									<!--begin::Label-->
									<label class="col-sm-3 col-form-label text-end"><?php echo $field['placeholder'] ?><span style="color:red;">*</span></label>
									<!--end::Label-->
									<div class="col-sm-9">
										<?php echo form_input($field, array('class' => 'form-control', 'autocomplete' => 'off')); ?>
									</div>
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
					<!--					<div class="mb-3 row">-->
					<!--						<label class="col-sm-3 col-form-label text-end">Nama Lengkap<span style="color:red;">*</span></label>-->
					<!--						<div class="col-sm-9">-->
					<!--							--><?php //echo form_input($nama_lengkap); ?>
					<!--							<span style="color: red;">--><?php //echo form_error($nama_lengkap['name']); ?><!----><?php //echo isset($errors[$nama_lengkap['name']]) ? $errors[$nama_lengkap['name']] : ''; ?><!--</span>-->
					<!--						</div>-->
					<!--					</div>-->
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Username<span style="color:red;">*</span></label>
						<div class="col-sm-9">
							<?php echo form_input($username); ?>
							<span style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']]) ? $errors[$username['name']] : ''; ?></span>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Email<span style="color:red;">*</span></label>
						<div class="col-sm-9">
							<?php echo form_input($email); ?>
							<span style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?></span>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Katasandi<span style="color:red;">*</span></label>
						<div class="col-sm-9">
							<?php echo form_password($password); ?>
							<span style="color: red;"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']]) ? $errors[$password['name']] : ''; ?></span>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Konfirmasi Katasandi<span style="color:red;">*</span></label>
						<div class="col-sm-9">
							<?php echo form_password($confirm_password); ?>
							<span style="color: red;"><?php echo form_error($confirm_password['name']); ?><?php echo isset($errors[$confirm_password['name']]) ? $errors[$confirm_password['name']] : ''; ?></span>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Jenis Kelamin<span style="color:red;">*</span> &nbsp</label>
						<div class="col-sm-9">
							<input type="radio" name="gender" value="P">&nbsp Pria &nbsp
							<input type="radio" name="gender" value="W">&nbsp Wanita
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="kt_datepicker_user" name="tanggal_lahir" placeholder="Tanggal Lahir"/>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Alamat</label>
						<div class="col-sm-9">
							<textarea name="alamat" class="form-control" rows="5" placeholder="Alamat"></textarea>
						</div>
					</div>
					<div class="mb-10 row">
						<label class="col-sm-3 col-form-label text-end">Foto</label>
						<div class="col-sm-9">
							<?php echo form_input($foto); ?>
						</div>
						<span style="color: red;"><?php echo form_error($foto['name']); ?><?php echo isset($errors[$foto['name']]) ? $errors[$foto['name']] : ''; ?></span>
					</div>
					<?php
					if ($captcha_registration) {
						if ($use_recaptcha) {
							?>
							<div class="fv-row">
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
							<div class="fv-row">
								<center>
									<img src="<?php echo $captcha_html; ?>" id="captcha"/>
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
				</div>
				<div class="card-footer">
					<center>
						<button type="submit" class="btn btn-primary btn-sm"><i class="fal fa-plus"></i>&nbsp Simpan
						</button>
						<a href="<?php echo $url; ?>" class="btn btn-danger btn-sm"><i class="fal fa-arrow-left"></i>&nbsp Kembali</a>
					</center>
				</div>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>
<script>
	$("#kt_datepicker_user").flatpickr();
</script>
