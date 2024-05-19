<div class="container-fluid ps-0 pe-0" id="kt_content_container">
	<div class="content row g-2" id="kt_content">
		<div class="col-sm-5 mb-3">
			<div class="card">
				<!--begin::Card body-->
				<div class="card-body p-10">
					<!--begin::Summary-->
					<div class="d-flex flex-center flex-column">
						<!--begin::Avatar-->
						<div class="mb-5">
							<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-interval="false" style="max-width: 300px;">
								<div class="carousel-indicators">
									<?php
									$x = '0';
									foreach ($list_dataImageProduk as $image_indicator) {
										?>
										<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $x; ?>" <?php echo ($x == '0') ? 'class="active" aria-current="true" aria-label="Slide' . $x . '"' : NULL; ?>></button>
										<?php
										$x++;
									}
									?>
								</div>
								<div class="carousel-inner img-fluid rounded">
									<?php
									$y = '0';
									if (count($list_dataImageProduk) != '0') {
										foreach ($list_dataImageProduk as $image) {
											?>
											<div class="carousel-item <?php echo ($y == '0') ? 'active' : NULL; ?>">
												<a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?php echo base_url('assets/file/produk/' . $image->image_produk); ?>">
													<img src="<?php echo base_url('assets/file/produk/' . $image->image_produk); ?>" class="d-block w-100" alt="..." style="max-width:300px; width:100%;">

													<!--begin::Action-->
													<div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
														<i class="bi bi-eye-fill text-white fs-3x"></i>
													</div>
													<!--end::Action-->
												</a>
											</div>
											<?php
											$y++;
										}
									}
									if (count($list_dataImageProduk) == '0') {
										if (!empty($thumbnail_full_name)) {
											?>
											<div class="carousel-item active">
												<a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?php echo base_url('assets/file/thumbnail/') . $thumbnail; ?>">
													<img src="<?php echo base_url('assets/file/thumbnail/') . $thumbnail; ?>" class="d-block w-100" alt="..." style="max-width:300px; width:100%;">
													<!--begin::Action-->
													<div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
														<i class="bi bi-eye-fill text-white fs-3x"></i>
													</div>
													<!--end::Action-->
												</a>
											</div>
											<?php
										}
										if (empty($thumbnail_full_name)) {
											?>
											<div class="carousel-item active">
												<a class="d-block overlay" data-fslightbox="lightbox-basic" href="<?php echo base_url('assets/media/products/no-image.png'); ?>">
													<img src="<?php echo base_url('assets/media/products/no-image.png'); ?>" class="d-block w-100" alt="..." style="max-width:300px; width:100%;">
													<!--begin::Action-->
													<div class="overlay-layer card-rounded bg-dark bg-opacity-25 shadow">
														<i class="bi bi-eye-fill text-white fs-3x"></i>
													</div>
													<!--end::Action-->
												</a>
											</div>
											<?php
										}
									}
									?>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
						<!--end::Avatar-->
						<!--begin::Name-->
						<div class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-1"><?php echo $produk ?></div>
						<!--end::Name-->
						<!--begin::Position-->
						<div class="d-flex fs-5 pb-3">
							<div class="text-muted">Harga : &nbsp</div>
							<div class="text-dark fw-bold">Rp. <?php echo rupiah($harga); ?>,00</div>
						</div>
						<!--end::Position-->
						<table class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7 mb-0">
							<thead class="fw-bold fs-6 text-gray-800">
							<tr>
								<td class="fw-bold text-center">KBLI</td>
							</tr>
							</thead>
							<tbody>
							<?php
							if (count($list_dataKBLI) != '0') {
								foreach ($list_dataKBLI as $key => $kbli) {
									?>
									<tr>
										<td><?php echo $kbli->kbli ?></td>
									</tr>
									<?php
								}
							} else { ?>
								<tr>
									<td>Tidak memiliki KBLI</td>
								</tr>
								<?php
							}
							?>
							</tbody>
						</table>
					</div>
					<!--end::Summary-->
				</div>
				<!--end::Card body-->
			</div>
		</div>
		<div class="col-sm-7">
			<div class="card">
				<!--begin::Card header-->
				<div class="card-header border-0 pt-5 pb-3">
					<!--begin::Card title-->
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Detail Produk</h3>
					<!--end::Card title-->
				</div>
				<!--end::Card header-->
				<!--begin::Card body-->
				<div class="card-body pt-0 pb-0">
					<!--begin::Tab Content-->
					<div id="kt_referred_users_tab_content">
						<!--begin::Tab panel-->
						<div id="kt_customer_details_invoices_1" class="py-0 fade show active table-responsive">
							<!--begin::Table-->
							<table id="kt_customer_details_invoices_table_1" class="table align-middle table-row-dashed fs-6 fw-bolder gy-5">
								<!--begin::Tbody-->
								<tbody class="fs-6 fw-bold text-gray-600">
								<tr>
									<td class="text-end">
										Kategori Produk :
									</td>
									<td>
										<div class="text-dark"><?php echo $kategori_produk; ?></div>
									</td>
								</tr>
								<tr>
									<td class="text-end">File Brosur :</td>
									<td>
										<?php if (isset($file_brosur)) { ?>
											<a href="<?php echo base_url('produk-public/download/brosur/' . $id_produk); ?>" title="<?php echo $file_brosur ?>"><?php echo (strlen($file_brosur_full_name) > 20) ? substr($file_brosur_full_name, 0, 20) . "..." . $brosur_type[1] : $file_brosur_full_name; ?></a><?php } ?>
									</td>
								</tr>
								<tr>
									<td class="text-end">File Presentasi :</td>
									<td>
										<?php
										foreach ($list_dataPresetasiProduk as $file_presentasi) {
											$ext_file = explode('/', $file_presentasi->file_presentasi_type);
											?>
											<a href="<?php echo base_url('produk-public/download/presentasi/' . $id_produk . '/' . encrypt_url($file_presentasi->id_produk_presentasi)); ?>" title="<?php echo $file_presentasi->file_presentasi ?>">
												<?php echo (strlen($file_presentasi->file_presentasi) > 20) ? substr($file_presentasi->file_presentasi, 0, 20) . "..." . $ext_file[1] : $file_presentasi->file_presentasi_full_name; ?>
											</a>
											<br>
										<?php } ?>
									</td>
								</tr>
								<tr>
									<td colspan="2" class="text-center">
										<?php foreach ($list_dataYoutubeProduk as $video) { ?>
											<iframe width="100%" height="315" src="<?php echo $video->link_youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="rounded"></iframe>
										<?php } ?>
									</td>
								</tr>
								</tbody>
								<!--end::Tbody-->
							</table>
							<!--end::Table-->
						</div>
						<!--end::Tab panel-->
					</div>
					<!--end::Tab Content-->
				</div>
				<!--end::Card body-->
			</div>
		</div>
	</div>
</div>

