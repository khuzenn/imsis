<div class="content flex-row-fluid" id="kt_content">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-8">
		<!--begin::Col-->
		<?php
		if ($this->session->flashdata('msg')) {
			?>
			<div class="col-xxl-12">
				<!--begin::Alert-->
				<div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5">
					<!--begin::Icon-->
					<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
					<span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black"/>
                        </svg>
                    </span>
					<!--end::Svg Icon-->
					<!--end::Icon-->
					<!--begin::Content-->
					<div class="d-flex flex-column pe-0 pe-sm-10">
						<h4 class="fw-bold">Berhasil!</h4>
						<span><?php echo $this->session->flashdata('msg'); ?></span>
					</div>
					<!--end::Content-->
					<!--begin::Close-->
					<button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1 svg-icon-success">
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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Form Target Capaian AM</h3>
					<!--end::Card title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<form class="form-horizontal" role="form" action="<?php echo $action; ?>" method="POST">
					<div class="card-body pt-0">
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Lini Bisnis<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<select class="form-select select-lini-bisnis" data-control="select2" data-placeholder="Pilih Lini Bisnis..." name="lini_bisnis">
									<option value="">Pilih Lini Bisnis</option>
									<?php
									foreach ($list_lini_bisnis as $lini_bisnis) {
										if ($lini_bisnis->id_lini_bisnis == $selected_lini_bisnis) {
											?>
											<option value="<?php echo encrypt_url($lini_bisnis->id_lini_bisnis); ?>" selected><?php echo $lini_bisnis->lini_bisnis; ?></option>
										<?php } else { ?>
											<option value="<?php echo encrypt_url($lini_bisnis->id_lini_bisnis); ?>"><?php echo $lini_bisnis->lini_bisnis; ?></option>
											<?php
										}
									}
									?>
								</select>
								<div class="text-danger"><?php echo form_error('lini_bisnis'); ?></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Segmen<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<select class="form-select select-segmen" data-control="select2" data-placeholder="Pilih Segmen..." name="segmen">
									<option value="">Pilih Segmen</option>
									<?php
									foreach ($list_segmen as $segmen) {
										if ($segmen->id_segmen == $selected_segmen) {
											echo '<option value="' . encrypt_url($segmen->id_segmen) . '" selected >' . $segmen->segmen . '</option>';
										} else {
											echo '<option value="' . encrypt_url($segmen->id_segmen) . '">' . $segmen->segmen . '</option>';
										}
									}
									?>
								</select>
								<div class="text-danger"><?php echo form_error('segmen'); ?></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Kastemer<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<select class="form-select select-kastemer" data-control="select2" data-placeholder="Pilih Kastemer..." name="kastemer">
								</select>
								<div class="text-danger"><?php echo form_error('kastemer'); ?></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Produk<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<div class="attr-input"></div>
								<div class="attr-produk">
									<select class="form-select select-produk" data-control="select2" data-placeholder="Pilih Produk..." name="produk">
										<option value="">Pilih Produk</option>
									</select>
									<div class="text-danger"><?php echo form_error('produk'); ?></div>
								</div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Target AM<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="target_am" name="target_am" placeholder="Target AM" autocomplete="off" value="<?php if (isset($target_am)) {
									echo $target_am;
								} ?>">
								<div class="text-danger"><?php echo form_error('target_am'); ?></div>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Progres AM<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="progres_am" name="progres_am" placeholder="Progres AM" autocomplete="off" value="<?php if (isset($progres_am)) {
									echo $progres_am;
								} ?>">
								<div class="text-danger"><?php echo form_error('progres_am'); ?></div>
							</div>
						</div>
						<div class="my-3">
							<center>
								<button class="btn btn-md btn-primary add-content-target">Tambah Capaian</button>
							</center>
						</div>
						<div class="content-am">

						</div>
					</div>
					<div class="card-footer">
						<center>
							<button type="submit" class="btn btn-primary btn-md">
								<i class="fal fa-plus"></i>&nbsp Simpan
							</button>
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
<script>
	$(function () {
		$('.select-lini-bisnis').change(function () {
			if ($('.select-lini-bisnis').val() != 'eWl3UGNRYXpVcHFpM1loY1NkVmIzUT09') {
				$('.attr-produk').hide();
				$('.attr-input').append(
					'<div class="attr-project">'
					+ '<input type="text" class="form-control" name="project_am">'
					+ '</div>'
				);
			} else {
				$('.attr-produk').show();
				$('.attr-project').remove();
			}
		});
		
		$('.add-content-target').click(function () {
			
		});

		$('.select-segmen').change(function () {
			var id_segmen = $(this).val();

			$.ajax({
				url: "<?php echo site_url('Target_am/get_kastemer'); ?>",
				type: 'post',
				data: {
					id_segmen: id_segmen
				},
				dataType: 'json',
				success: function (response) {
					var len = response.length;

					var option = '<option value="">Pilih Kastemer</option>';
					for (var i = 0; i < len; i++) {
						var id_kastemer = response[i]['id_kastemer'];
						var kastemer = response[i]['kastemer'];

						option += "<option value='" + id_kastemer + "'>" + kastemer + "</option>";
					}

					$(".select-kastemer").html(option);
					$('.select-kastemer').select2().trigger('change');
				}
			});
		});

		$('.select-kastemer').change(function () {
			var id_kastemer = $(this).val();

			$.ajax({
				url: "<?php echo site_url('Target_am/get_produk'); ?>",
				type: 'post',
				data: {
					id_kastemer: id_kastemer
				},
				dataType: 'json',
				success: function (response) {
					var len = response.length;

					var option = '<option value="">Pilih Produk</option>';
					for (var i = 0; i < len; i++) {
						var id_produk = response[i]['id_produk'];
						var produk = response[i]['produk'];

						option += "<option value='" + id_produk + "'>" + produk + "</option>";
					}

					$(".select-produk").html(option);
					$('.select-produk').select2().trigger('change');
				}
			});
		});

		var rupiah = document.getElementById("target_am");
		rupiah.addEventListener("keyup", function (e) {
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, "Rp. ");
		});

		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix) {
			var number_string = angka.replace(/[^,\d]/g, "").toString(),
				split = number_string.split(","),
				sisa = split[0].length % 3,
				rupiah = split[0].substr(0, sisa),
				ribuan = split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if (ribuan) {
				separator = sisa ? "." : "";
				rupiah += separator + ribuan.join(".");
			}

			rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
			return prefix == undefined ? rupiah : rupiah ? rupiah : "";
		}
	})
</script>
