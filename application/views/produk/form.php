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
                            <path opacity="0.3"
								  d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
								  fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
								  fill="black"/>
                        </svg>
                    </span>
					<!--end::Svg Icon-->
					<!--end::Icon-->
					<!--begin::Content-->
					<div class="d-flex flex-column pe-0 pe-sm-10">
						<h4 class="fw-bold">Pesan!</h4>
						<span>Gagal menambahkan data produk</span>
					</div>
					<!--end::Content-->
					<!--begin::Close-->
					<button type="button"
							class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
							data-bs-dismiss="alert">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1 svg-icon-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								 fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									  transform="rotate(-45 6 17.3137)" fill="black"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									  fill="black"/>
                            </svg>
                        </span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Close-->
				</div>
				<!--end::Alert-->
			</div>
			<?php
		}

		if ($this->session->flashdata('msg')) {
			?>
			<div class="col-xxl-12">
				<!--begin::Alert-->
				<div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5">
					<!--begin::Icon-->
					<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
					<span class="svg-icon svg-icon-2hx svg-icon-success me-4 mb-5 mb-sm-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3"
								  d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
								  fill="black"/>
                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
								  fill="black"/>
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
					<button type="button"
							class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
							data-bs-dismiss="alert">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1 svg-icon-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								 fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									  transform="rotate(-45 6 17.3137)" fill="black"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									  fill="black"/>
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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Form Produk</h3>
					<!--end::Card title-->
					<?php if (isset($id_produk)) { ?>
						<a href="<?php echo site_url('produk/hapus/' . $id_produk); ?>" class="btn btn-danger btn-md"
						   onclick="return confirm('Apakah Anda yakin untuk menghapus data produk ini?')">
							<i class="fal fa-trash"></i>&nbsp Hapus Produk
						</a>
					<?php } ?>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<form class="form-horizontal" role="form" action="<?php echo $action; ?>" method="POST" enctype="multipart/form-data">
					<div class="card-body pt-0">
						<div class="mb-5 col-sm-12">
							<select class="duallistbox" multiple="multiple" name="kbli_id[]">
								<?php
								foreach ($list_KBLI as $kbli) {
									(in_array(encrypt_url($kbli->id_kbli), $listKBLiSelected)) ? $pilih = ' selected' : $pilih = '';
									?>
									<option value="<?php echo encrypt_url($kbli->id_kbli); ?>" <?php echo $pilih; ?>><?php echo $kbli->kbli; ?></option>
									<?php
								}
								?>
							</select>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Kategori Produk<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<select class="form-select" data-control="select2" data-placeholder="Pilih Kategori Produk..." name="kategori_produk">
									<option value="">Pilih Kategori Produk</option>
									<?php
									foreach ($list_kategori_produk as $kategori_produk) {
										if ($kategori_produk->id_kategori_produk == $selected_kategori_produk) {
											echo '<option value="' . encrypt_url($kategori_produk->id_kategori_produk) . '" selected >' . $kategori_produk->kategori_produk . '</option>';
										} else {
											echo '<option value="' . encrypt_url($kategori_produk->id_kategori_produk) . '">' . $kategori_produk->kategori_produk . '</option>';
										}
									}
									?>
								</select>
								<span style="color: red;"><?php echo form_error('kategori_produk'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Produk<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="produk" placeholder="Produk" autocomplete="off" value="<?php if (isset($produk)) {
									echo $produk;
								} ?>">
								<span style="color: red;"><?php echo form_error('produk'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Thumbnail</label>
							<div class="col-sm-10">
								<div class="d-flex flex-row">
									<input class="form-control" name="thumbnail" accept="image/*" type='file' id="imgInpThumb"/>
								</div>
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, atau png, maksimal ukuran file 10mb
								<div class="col">
									<div class="col-10">
										<img class="rounded img-thumbnail w-25" id="imageThumb"
											 src="<?php if (isset($thumbnail)) {
												 echo base_url('assets/file/thumbnail') . '/' . $thumbnail;
											 } else {
												 echo base_url('assets/media/avatars/blank.png');
											 } ?>" alt="your image"/>
									</div>
								</div>
								<script>
									imgInpThumb.onchange = evt => {
										const [file] = imgInpThumb.files
										if (file) {
											imageThumb.src = URL.createObjectURL(file)
										}
									}
								</script>
								<span style="color: red;"><?php echo form_error('thumbnail'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Gambar Produk 1</label>
							<div class="col-sm-10">
								<div class="d-flex flex-row">
									<input class="form-control" name="image_produk[]" accept="image/*" type='file' id="imgInp1"/>
									<?php if (isset($image_1)) { ?>
										&nbsp
										<button class="btn btn-danger btn-sm" type="button">
											<a class="text-light" href="<?php echo base_url('produk/file/hapus/produk/' . $id_produk . '/' . encrypt_url($id_produk_image_1)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus</a>
										</button>
									<?php } ?>
								</div>
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, atau png, maksimal ukuran file 10mb
								<div class="col">
									<div class="col-10">
										<img class="rounded img-thumbnail w-25" id="image1"
											 src="<?php if (isset($image_1)) {
												 echo base_url('assets/file/produk') . '/' . $image_1;
											 } else {
												 echo base_url('assets/media/avatars/blank.png');
											 } ?>" alt="your image"/>
									</div>
								</div>
								<script>
									imgInp1.onchange = evt => {
										const [file] = imgInp1.files
										if (file) {
											image1.src = URL.createObjectURL(file)
										}
									}
								</script>
								<span style="color: red;"><?php echo form_error('image_produk'); ?></span>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Gambar Produk 2</label>
							<div class="col-sm-10">
								<div class="d-flex flex-row">
									<input class="form-control" name="image_produk[]" accept="image/*" type='file' id="imgInp2"/>
									<?php if (isset($image_2)) { ?>
										&nbsp
										<button class="btn btn-danger btn-sm" type="button">
											<a class="text-light" href="<?php echo base_url('produk/file/hapus/produk/' . $id_produk . '/' . encrypt_url($id_produk_image_2)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus</a>
										</button>
									<?php } ?>
								</div>
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, atau png, maksimal ukuran file 10mb
								<div class="col">
									<div class="col-10">
										<img class="rounded img-thumbnail w-25" id="image2"
											 src="<?php if (isset($image_2)) {
												 echo base_url('assets/file/produk') . '/' . $image_2;
											 } else {
												 echo base_url('assets/media/avatars/blank.png');
											 } ?>" alt="your image"/>
									</div>
								</div>
								<script>
									imgInp2.onchange = evt => {
										const [file] = imgInp2.files
										if (file) {
											image2.src = URL.createObjectURL(file)
										}
									}
								</script>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Gambar Produk 3</label>
							<div class="col-sm-10">
								<div class="d-flex flex-row">
									<input class="form-control" name="image_produk[]" accept="image/*" type='file' id="imgInp3"/>
									<?php if (isset($image_3)) { ?>
										&nbsp
										<button class="btn btn-danger btn-sm" type="button">
											<a class="text-light" href="<?php echo base_url('produk/file/hapus/produk/' . $id_produk . '/' . encrypt_url($id_produk_image_3)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus</a>
										</button>
									<?php } ?>
								</div>
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, atau png, maksimal ukuran file 10mb
								<div class="col">
									<div class="col-10">
										<img class="rounded img-thumbnail w-25" id="image3"
											 src="<?php if (isset($image_3)) {
												 echo base_url('assets/file/produk') . '/' . $image_3;
											 } else {
												 echo base_url('assets/media/avatars/blank.png');
											 } ?>" alt="your image"/>
									</div>
								</div>
								<script>
									imgInp3.onchange = evt => {
										const [file] = imgInp3.files
										if (file) {
											image3.src = URL.createObjectURL(file)
										}
									}
								</script>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Gambar Produk 4</label>
							<div class="col-sm-10">
								<div class="d-flex flex-row">
									<input class="form-control" name="image_produk[]" accept="image/*" type='file' id="imgInp4"/>
									<?php if (isset($image_4)) { ?>
										&nbsp
										<button class="btn btn-danger btn-sm" type="button">
											<a class="text-light" href="<?php echo base_url('produk/file/hapus/produk/' . $id_produk . '/' . encrypt_url($id_produk_image_4)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus</a>
										</button>
									<?php } ?>
								</div>
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, atau png, maksimal ukuran file 10mb
								<div class="col">
									<div class="col-10">
										<img class="rounded img-thumbnail w-25" id="image4"
											 src="<?php if (isset($image_4)) {
												 echo base_url('assets/file/produk') . '/' . $image_4;
											 } else {
												 echo base_url('assets/media/avatars/blank.png');
											 } ?>" alt="your image"/>
									</div>
								</div>
								<script>
									imgInp4.onchange = evt => {
										const [file] = imgInp4.files
										if (file) {
											image4.src = URL.createObjectURL(file)
										}
									}
								</script>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Gambar Produk 5</label>
							<div class="col-sm-10">
								<div class="d-flex flex-row">
									<input class="form-control" name="image_produk[]" accept="image/*" type='file' id="imgInp5"/>
									<?php if (isset($image_5)) { ?>
										&nbsp
										<button class="btn btn-danger btn-sm" type="button">
											<a class="text-light" href="<?php echo base_url('produk/file/hapus/produk/' . $id_produk . '/' . encrypt_url($id_produk_image_5)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus</a>
										</button>
									<?php } ?>
								</div>
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, atau png, maksimal ukuran file 10mb
								<div class="col">
									<div class="col-10">
										<img class="rounded img-thumbnail w-25" id="image5"
											 src="<?php if (isset($image_5)) {
												 echo base_url('assets/file/produk') . '/' . $image_5;
											 } else {
												 echo base_url('assets/media/avatars/blank.png');
											 } ?>" alt="your image"/>
									</div>
								</div>
								<script>
									imgInp5.onchange = evt => {
										const [file] = imgInp5.files
										if (file) {
											image5.src = URL.createObjectURL(file)
										}
									}
								</script>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Gambar Produk 6</label>
							<div class="col-sm-10">
								<div class="d-flex flex-row">
									<input class="form-control" name="image_produk[]" accept="image/*" type='file' id="imgInp6"/>
									<?php if (isset($image_6)) { ?>
										&nbsp
										<button class="btn btn-danger btn-sm" type="button">
											<a class="text-light" href="<?php echo base_url('produk/file/hapus/produk/' . $id_produk . '/' . encrypt_url($id_produk_image_6)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus</a>
										</button>
									<?php } ?>
								</div>
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, atau png, maksimal ukuran file 10mb
								<div class="col">
									<div class="col-10">
										<img class="rounded img-thumbnail w-25" id="image6"
											 src="<?php if (isset($image_6)) {
												 echo base_url('assets/file/produk') . '/' . $image_6;
											 } else {
												 echo base_url('assets/media/avatars/blank.png');
											 } ?>" alt="your image"/>
									</div>
								</div>
								<script>
									imgInp6.onchange = evt => {
										const [file] = imgInp6.files
										if (file) {
											image6.src = URL.createObjectURL(file)
										}
									}
								</script>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Brosur</label>
							<div class="col-sm-10">
								<input type="file" class="form-control" name="brosur">
								Note : Untuk jenis file yang bisa diunggah adalah jpg, jpeg, png, atau pdf, maksimal ukuran file 15mb
								<br>
								<?php if (isset($file_brosur)) { ?>
									<a href="<?php echo base_url('produk/download/brosur/' . $id_produk); ?>"><?php echo $file_brosur; ?></a>&nbsp | &nbsp
									<a href="<?php echo base_url('produk/file/hapus/brosur/' . $id_produk); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus File</a>
								<?php } ?>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Presentasi</label>
							<div class="col-sm-10">
								<?php
								if (!isset($list_presentasi)) {
									?>
									<input type="file" class="form-control mb-2" name="presentasi[]">
									<?php
								}
								if (isset($list_presentasi)) {
									$x = count($list_presentasi);
									if ($x != '0') {
										foreach ($list_presentasi as $key => $value_presentasi) {
											if ($key === array_key_first($list_presentasi)) {
												?>
												<input type="file" class="form-control" name="presentasi[]">
												<div class="mt-2 mb-2">
													<a href="<?php echo base_url('produk/download/presentasi/' . $id_produk . '/' . encrypt_url($value_presentasi->id_produk_presentasi)); ?>"><?php echo $value_presentasi->file_presentasi; ?></a>&nbsp | &nbsp
													<a href="<?php echo base_url('produk/file/hapus/presentasi/' . $id_produk . '/' . encrypt_url($value_presentasi->id_produk_presentasi)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus File</a>
												</div>
												<?php
											}
											if ($key !== array_key_first($list_presentasi)) { ?>
												<div class="mt-2">
													<div class="content-presentasi-<?php echo $x; ?> d-flex flex-row">
														<input type="file" class="form-control file-presentasi-<?php echo $x; ?>" name="presentasi[]">&nbsp
														<button class="btn btn-danger btn-sm" type="button">
															<a class="text-light" href="<?php echo base_url('produk/file/hapus/presentasi/' . $id_produk . '/' . encrypt_url($value_presentasi->id_produk_presentasi)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus file ini?')">Hapus</a>
														</button>
													</div>
													<div class="mb-2">
														<a href="<?php echo base_url('produk/download/presentasi/' . $id_produk . '/' . encrypt_url($value_presentasi->id_produk_presentasi)); ?>"><?php echo $value_presentasi->file_presentasi; ?></a>
													</div>
												</div>
												<?php
												$x++;
											}
										}
									}
									if ($x == '0') {
										?>
										<input type="file" class="form-control mb-2" name="presentasi[]">
										<?php
									}
								}
								?>
							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
								<div class="add-content-presentasi">
								</div>
							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
								Note : Untuk jenis file yang bisa diunggah adalah pdf, zip, doc, docx, ppt, atau pptx, maksimal ukuran file 15mb
							</div>
							<center class="mt-3">
								<button type="button" class="btn btn-primary btn-sm tambah-presentasi">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
										<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
									</svg>
									Tambah File Presentasi
								</button>
							</center>
							<script>
								var i = <?php echo (isset($list_presentasi)) ? count($list_presentasi) + count($list_presentasi) : 1; ?>;
								$('.tambah-presentasi').on('click', function () {
									$('.add-content-presentasi').append('<div class="content-presentasi-' + i + ' d-flex flex-row"><input type="file" class="form-control file-presentasi-' + i + ' mb-2" name="presentasi[]">&nbsp <button type="button" class="btn btn-danger btn-sm mb-2 hapus-file-' + i + '" onClick="delete_action_presentasi(' + i + ')">Hapus</button></div>');
									i++;
								});

								function delete_action_presentasi(id) {
									$('.content-presentasi-' + id).remove();
								}
							</script>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Url Youtube Video</label>
							<div class="col-sm-10">
								<?php
								if (!isset($list_youtube)) {
									?>
									<input type="text" class="form-control mb-2" name="video[]" placeholder="Video">
									<?php
								}
								if (isset($list_youtube)) {
									$x = count($list_youtube);
									if ($x != '0') {
										foreach ($list_youtube as $key => $value_youtube) {
											if ($key === array_key_first($list_youtube)) {
												?>
												<div class="d-flex flex-row">
													<input type="text" class="form-control" name="video[]" placeholder="Video" autocomplete="off" value="<?php echo $value_youtube->link_youtube; ?>">&nbsp
													<button class="btn btn-danger btn-sm" type="button">
														<a class="text-light" href="<?php echo base_url('produk/hapus/youtube/' . $id_produk . '/' . encrypt_url($value_youtube->id_produk_youtube)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus url ini?')">Hapus</a>
													</button>
												</div>
												<?php
											}
											if ($key !== array_key_first($list_youtube)) { ?>
												<div class="mt-2">
													<div class="content-presentasi-<?php echo $x; ?> d-flex flex-row">
														<input type="text" class="form-control input-youtube-<?php echo $x; ?>" name="video[]" placeholder="Video" autocomplete="off" value="<?php echo $value_youtube->link_youtube; ?>">&nbsp
														<button class="btn btn-danger btn-sm" type="button">
															<a class="text-light" href="<?php echo base_url('produk/hapus/youtube/' . $id_produk . '/' . encrypt_url($value_youtube->id_produk_youtube)); ?>" onclick="return confirm('Apakah Anda yakin untuk menghapus url ini?')">Hapus</a>
														</button>
													</div>
												</div>
												<?php
												$x++;
											}
										}
									}
									if ($x == '0') {
										?>
										<input type="text" class="form-control mb-2" name="video[]" placeholder="Video" autocomplete="off">
										<?php
									}
								}
								?>
								<!--								<input type="text" class="form-control" name="video[]" placeholder="Video"-->
								<!--									   autocomplete="off" value="--><?php //if (isset($video)) {
								//									echo $video;
								//								} ?><!--">-->
							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
								<div class="add-content-youtube mt-3"></div>
							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-10">
								Cara memasukan url Youtube :<br>
								1. Buka website <i>youtube.com</i><br>
								2. Pilih video yang akan dimasukan<br>
								3. Klik tombol <i>share</i><br>
								4. Pilih <i>embed</i><br>
								5. Pada code iframe src="" salin link/url nya<br>
								6. Masukan link/url ke inputan url video
							</div>
							<center class="mt-3">
								<button type="button" class="btn btn-primary btn-sm tambah-youtube">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										 class="bi bi-plus" viewBox="0 0 16 16">
										<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path>
									</svg>
									Tambah Url Youtube
								</button>
							</center>
							<script>
								var n = 1;
								$('.tambah-youtube').on('click', function () {
									$('.add-content-youtube').append('<div class="content-youtube' + n + ' d-flex flex-row"><input type="text" class="form-control input-youtube-' + n + ' mb-2" name="video[]" placeholder="Video" autocomplete="off">&nbsp <button type="button" class="btn btn-danger btn-sm mb-2 hapus-youtube-' + n + '" onClick="delete_action_youtube(' + n + ')">Hapus</button></div>');
									n++;
								});

								function delete_action_youtube(id) {
									$('.content-youtube' + id).remove();
								}
							</script>
						</div>
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Harga<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="rupiah" name="harga" placeholder="Harga" autocomplete="off" value="<?php if (isset($harga)) {
									echo rupiah($harga);
								} ?>">
								<span style="color: red;"><?php echo form_error('harga'); ?></span>
							</div>
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

	$('#bootstrap-duallistbox-nonselected-list_permission_id').css({
		'display': 'inline-block',
		'background-color': '#fff',
		'position': 'relative'
	});

	var rupiah = document.getElementById("rupiah");
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
</script>
