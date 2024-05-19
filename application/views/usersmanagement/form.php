<?php
$nama_lengkap = array(
		'name' => 'nama_lengkap',
		'id' => 'nama_lengkap',
		'class' => 'form-control',
		'value' => $data_name,
		'autocomplete' => 'off'
);
$username = array(
		'name' => 'username',
		'id' => 'username',
		'class' => 'form-control',
		'value' => $data_username,
		'maxlength' => $this->config->item('username_max_length', 'tank_auth'),
		'autocomplete' => 'off'
);
$email = array(
		'name' => 'email',
		'id' => 'email',
		'class' => 'form-control',
		'value' => $data_email,
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
?>

<div class="content flex-row-fluid" id="kt_content">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-8">
		<!-- left column -->
		<div class="col-md-4">
			<!-- Profile Image -->
			<div class="card card-primary card-outline">
				<div class="card-body box-profile">
					<div class="text-center mb-3">
						<!--<img class="profile-user-img img-fluid img-circle" src="--><?php //echo base_url('/assets/adminLTE3/foto-profil/' . $data_foto) ?><!--">-->
						<img class="img-fluid rounded w-75" src="<?php echo ($profile_foto != 'no_image.jpg') ? base_url('/assets/media/profiles/') . $profile_foto : base_url('/assets/media/avatars/blank.png') ; ?>">
					</div>

					<h3 class="profile-username text-center"><?php if (isset($data_name)) {
							echo $data_name;
						} ?></h3>
					<ul class="list-group list-group-unbordered mb-3">
						<li class="list-group-item">
							<b>Username :</b> <a class="float-right"><?php echo $data_username; ?></a>
						</li>
						<li class="list-group-item">
							<b>Email :</b> <a class="float-right"><?php echo $data_email; ?></a>
						</li>
						<li class="list-group-item">
							<b>Jenis Kelamin :</b>
							<a class="float-right"><?php echo ($data_jenis_kelamin == 'P') ? 'Pria' : 'Wanita'; ?></a>
						</li>
						<li class="list-group-item">
							<b>Tanggal Lahir :</b> <a class="float-right"><?php echo $data_tangal_lahir; ?></a>
						</li>
						<li class="list-group-item">
							<b>Alamat :</b> <a class="float-right"><?php echo $data_alamat; ?></a>
						</li>
					</ul>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- right column -->
		<div class="col-md-8">
			<!-- general form elements -->
			<div class="card card-primary">
				<div class="card-header border-0 pt-5 pb-3">
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Form Pengguna</h3>
				</div>
				<?php echo form_open($action, 'class="form-horizontal" enctype="multipart/form-data"'); ?>
				<div class="card-body pt-0">
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Nama Lengkap : </label>
						<div class="col-sm-9">
							<?php echo form_input($nama_lengkap); ?>
						</div>
						<span style="color: red;"><?php echo form_error($nama_lengkap['name']); ?><?php echo isset($errors[$nama_lengkap['name']]) ? $errors[$nama_lengkap['name']] : ''; ?></span>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Username : </label>
						<div class="col-sm-9">
							<?php echo form_input($username); ?>
						</div>
						<span style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']]) ? $errors[$username['name']] : ''; ?></span>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Email : </label>
						<div class="col-sm-9">
							<?php echo form_input($email); ?>
						</div>
						<span style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] : ''; ?></span>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Jenis Kelamin : &nbsp</label>
						<div class="col-sm-9">
							<input type="radio" name="gender" value="P" <?php echo ($data_jenis_kelamin == 'P') ? 'checked' : ''; ?>>&nbsp Pria &nbsp
							<input type="radio" name="gender" value="W" <?php echo ($data_jenis_kelamin == 'W') ? 'checked' : ''; ?>>&nbsp Wanita
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Tanggal Lahir : </label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="kt_datepicker_user" name="tanggal_lahir" value="<?php echo $data_tangal_lahir; ?>"/>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label text-end">Alamat : </label>
						<div class="col-sm-9">
							<textarea name="alamat" class="form-control" rows="5"><?php echo $data_alamat; ?></textarea>
						</div>
					</div>
					<div class="row">
						<label class="col-sm-3 col-form-label text-end">Foto : </label>
						<div class="col-sm-9">
							<?php echo form_input($foto); ?>
						</div>
						<span style="color: red;"><?php echo form_error($foto['name']); ?><?php echo isset($errors[$foto['name']]) ? $errors[$foto['name']] : ''; ?></span>
					</div>
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
