<style>
	.bootstrap-duallistbox-container select {
		height: 300px !important;
	}
</style>
<div class="content flex-row-fluid" id="kt_content">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-8">
		<!--begin::Col-->
		<?php
		if (!empty($message)) {
			?>
			<div class="col-xxl-12">
				<!--begin::Alert-->
				<div class="alert alert-dismissible bg-light-warning d-flex flex-column flex-sm-row w-100 p-5 mb-3">
					<!--begin::Icon-->
					<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
					<span class="svg-icon svg-icon-2hx svg-icon-warning me-4 mb-5 mb-sm-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                        </svg>
                    </span>
					<!--end::Svg Icon-->
					<!--end::Icon-->
					<!--begin::Content-->
					<div class="d-flex flex-column pe-0 pe-sm-10">
						<h4 class="fw-bold">Pesan!</h4>
						<span>Gagal menambahkan data kastemer</span>
					</div>
					<!--end::Content-->
					<!--begin::Close-->
					<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1 svg-icon-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                            </svg>
                        </span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Close-->
				</div>
				<!--end::Alert-->
			</div>
		<?php } ?>
		<div class="col-xxl-12">
			<!--begin::Table Widget 1-->
			<div class="card">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5 pb-3">
					<!--begin::Card title-->
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Form Kastemer</h3>
					<!--end::Card title-->
					<?php if (isset($id_kastemer)) { ?>
						<a href="<?php echo site_url('kastemer/hapus/' . $id_kastemer); ?>" class="btn btn-danger btn-md" onclick="return confirm('Apakah Anda yakin untuk menghapus data kastemer ini?')">
							<i class="fal fa-trash"></i>&nbsp Hapus Kastemer
						</a>
					<?php } ?>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<form class="form-horizontal" role="form" action="<?php echo $action; ?>" method="POST">
					<div class="card-body pt-0">
						<div class="mb-5 col-sm-12">
							<select class="duallistbox" multiple="multiple" name="kbli_id[]">
								<?php
								foreach ($list_KBLI as $kbli) {
									(in_array(encrypt_url($kbli->id_kbli), $listKBLiSelected)) ? $pilih = ' selected' : $pilih = '';
									?>
									<option value="<?php echo encrypt_url($kbli->id_kbli); ?>"<?php echo $pilih; ?>><?php echo $kbli->kbli; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Segmen<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<select class="form-select" data-control="select2" data-placeholder="Pilih Segmen..." name="segmen">
									<option value="">Pilih Segmen</option>
									<?php
									foreach ($list_segmen as $segmen) {
										if (encrypt_url($segmen->id_segmen) == $selected_segmen) {
											echo '<option value="' . encrypt_url($segmen->id_segmen) . '" selected >' . $segmen->segmen . '</option>';
										} else {
											echo '<option value="' . encrypt_url($segmen->id_segmen) . '">' . $segmen->segmen . '</option>';
										}
									}
									?>
								</select>
								<span style="color: red;"><?php echo form_error('segmen'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Kastemer<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="kastemer" placeholder="Kastemer" autocomplete="off" value="<?php if (isset($kastemer)) {
									echo $kastemer;
								} ?>">
								<span style="color: red;"><?php echo form_error('kastemer'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Tanggal Berdiri</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="kt_datepicker_kastemer" name="tgl_berdiri" placeholder="Tanggal Berdiri" autocomplete="off" value="<?php if (isset($tgl_berdiri)) {
									echo $tgl_berdiri;
								} ?>">
								<span style="color: red;"><?php echo form_error('tgl_berdiri'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Email Kastemer</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="email_perusahaan" placeholder="Email Kastemer" autocomplete="off" value="<?php if (isset($email_perusahaan)) {
									echo $email_perusahaan;
								} ?>">
								<span style="color: red;"><?php echo form_error('email_perusahaan'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">No Tlp Kastemer</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="no_tlp_perusahaan" placeholder="No Telepon Kastemer" autocomplete="off" value="<?php if (isset($no_tlp_perusahaan)) {
									echo $no_tlp_perusahaan;
								} ?>">
								<span style="color: red;"><?php echo form_error('no_tlp_perusahaan'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Alamat Kastemer<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<textarea class="form-control" name="alamat" placeholder="Alamat" rows="6"><?php echo (isset($alamat)) ? $alamat : NULL; ?></textarea>
								<span style="color: red;"><?php echo form_error('alamat'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Nama PIC</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama_pic" placeholder="Nama PIC" autocomplete="off" value="<?php if (isset($nama_pic)) {
									echo $nama_pic;
								} ?>">
								<span style="color: red;"><?php echo form_error('nama_pic'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Tanggal Lahir PIC</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="kt_datepicker_pic" name="tgl_lahir_pic" placeholder="Tanggal Lahir PIC" autocomplete="off" value="<?php if (isset($tgl_lahir_pic)) {
									echo $tgl_lahir_pic;
								} ?>">
								<span style="color: red;"><?php echo form_error('tgl_lahir_pic'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Jabatan PIC</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="jabatan_pic" placeholder="Jabatan PIC" autocomplete="off" value="<?php if (isset($jabatan_pic)) {
									echo $jabatan_pic;
								} ?>">
								<span style="color: red;"><?php echo form_error('jabatan_pic'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Email PIC</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="email_pic" placeholder="Email PIC" autocomplete="off" value="<?php if (isset($email_pic)) {
									echo $email_pic;
								} ?>">
								<span style="color: red;"><?php echo form_error('email_pic'); ?></span>
							</div>
						</div>
						<div class="row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">No Hp PIC</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="no_hp_pic" placeholder="No Hp PIC" autocomplete="off" value="<?php if (isset($no_hp_pic)) {
									echo $no_hp_pic;
								} ?>">
								<span style="color: red;"><?php echo form_error('no_hp_pic'); ?></span>
							</div>
						</div>
						<div class="content-vip">
							<?php
							if (isset($list_vip)) {
								if (count($list_vip) == '1' || count($list_vip) != '0') {
									?>
									<hr class="mt-8 mb-8">
									<?php
								}
							}
							?>
							<?php
							if (isset($list_vip)) {
								$no = '1';
								foreach ($list_vip as $key => $vip) {
									?>
									<div class="p-8 pt-0">
										<div class="mb-3 row">
											<input type="hidden" name="form_equivalent[]" class="form-control" value="<?php echo encrypt_url($vip->id_kastemer_vip); ?>">
											<label for="inputPassword" class="col-sm-2 col-form-label text-end">Bio VIP</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="nama_vip[]" placeholder="Nama VIP" value="<?php echo $vip->nama_vip; ?>" required>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" id="kt_datepicker_<?php echo $no; ?>" name="tgl_lahir_vip[]" value="<?php echo $vip->tgl_lahir_vip; ?>" placeholder="Tgl Lahir VIP" required>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" name="jabatan_vip[]" placeholder="Jabatan VIP" value="<?php echo $vip->jabatan_vip; ?>" required>
											</div>
										</div>
										<div class="row">
											<label for="inputPassword" class="col-sm-2 col-form-label text-end">Kontak VIP</label>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="email_vip[]" placeholder="Email VIP" value="<?php echo $vip->email_vip; ?>" required>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control" name="no_tlp_vip[]" placeholder="No Tlp VIP" value="<?php echo $vip->no_tlp_vip; ?>" required>
											</div>
											<div class="col-sm-2">
												<a href="<?php echo site_url('kastemer/hapus/vip/' . $id_kastemer . '/' . encrypt_url($vip->id_kastemer_vip)); ?>" class="btn btn-md btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus VIP ini?')">Hapus</a>
											</div>
										</div>
									</div>
									<?php
									$no++;
								}
							}
							?>
						</div>
						<div class="text-center">
							<button type="button" class="btn btn-primary btn-sm mt-3 btn-add-vip" id="tambah_vip">Tambah VIP</button>
						</div>
					</div>
					<div class="card-footer">
						<center>
							<button type="submit" class="btn btn-primary btn-sm">
								<i class="fal fa-plus"></i>&nbsp Simpan
							</button>
							<a href="<?php echo $url; ?>" class="btn btn-danger btn-sm">
								<i class="fal fa-arrow-left"></i>&nbsp Kembali
							</a>
						</center>
					</div>
				</form>
				<!--end::Body-->
			</div>
			<!--end::Table Widget 1-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
<script type="text/javascript">
	$('.duallistbox').bootstrapDualListbox();

	<?php
	if (isset($list_vip)) {
	if (count($list_vip) != '0') {
	?>
	var i = <?php echo count($list_vip) + '1' ?>;
	<?php
	} else {
	?>
	var i = '1';
	<?php
	}
	} else {
	?>
	var i = '1';
	<?php
	}
	?>
	$('#tambah_vip').on('click', function () {
		if (i == '1') {
			$('.content-vip').append('<hr class="mt-8 mb-8 hr-no-' + i + '">');
			$('.btn-add-vip').removeClass('mt-3');
		}

		$('.content-vip').append(
			'<div class="row-vip-' + i + '">' +
			'<input type="hidden" name="count_vip[]" class="form-control" value=' + i + '>' +
			'<div class="p-8 pt-0">' +
			'<div class="mb-3 row">' +
			'<input type="hidden" name="form_equivalent[]" class="form-control">' +
			'<label for="inputPassword" class="col-sm-2 col-form-label text-end">Bio VIP</label>' +
			'<div class="col-sm-4"><input type="text" class="form-control" name="nama_vip[]" placeholder="Nama VIP" required></div>' +
			'<div class="col-sm-3"><input type="text" class="form-control" id="kt_datepicker_' + i + '" name="tgl_lahir_vip[]" placeholder="Tgl Lahir VIP" required></div>' +
			'<div class="col-sm-3"><input type="text" class="form-control" name="jabatan_vip[]" placeholder="Jabatan VIP" required></div>' +
			'</div>' +
			'<div class="row">' +
			'<label for="inputPassword" class="col-sm-2 col-form-label text-end">Kontak VIP</label>' +
			'<div class="col-sm-4"><input type="text" class="form-control" name="email_vip[]" placeholder="Email VIP" required></div>' +
			'<div class="col-sm-4"><input type="text" class="form-control" name="no_tlp_vip[]" placeholder="No Tlp VIP" required></div>' +
			'<div class="col-sm-2"><button type="button" class="btn btn-md btn-danger" onClick="delete_action_vip(' + i + ')">Hapus</button></div>' +
			'</div>' +
			'</div>' +
			'</div>'
		);

		$('#kt_datepicker_' + i).flatpickr({
			maxDate: new Date()
		});

		i++;
	});

	function delete_action_vip(id) {
		$('.row-vip-' + id).remove();
	}

	$("#kt_datepicker_kastemer").flatpickr({
		maxDate: new Date()
	});
	$("#kt_datepicker_pic").flatpickr({
		maxDate: new Date()
	});

	$('#bootstrap-duallistbox-nonselected-list_permission_id').css({
		'display': 'inline-block',
		'background-color': '#fff',
		'position': 'relative'
	});
</script>
