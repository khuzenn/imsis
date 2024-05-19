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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">List Data Produk</h3>
					<!--end::Card title-->
				</div>
				<!--end::Header-->
			</div>
			<!--begin::Search-->
			<div class="d-flex flex-row d-flex justify-content-between">
				<form action="<?php site_url('produk/index') ?>" method="GET">
					<div class="d-flex align-items-center position-relative mt-5">
						<input name="keyword" type="hidden" value="<?php if (isset($keyword)) {
							echo $keyword;
						} ?>"/>
						<select class="form-select" name="show-row" onchange="this.form.submit();">
							<option value="12" <?php echo ($per_page == 12) ? 'selected' : NULL; ?>>Default</option>
							<option value="5" <?php echo ($per_page == 5) ? 'selected' : NULL; ?>>5</option>
							<option value="25" <?php echo ($per_page == 25) ? 'selected' : NULL; ?>>25</option>
							<option value="50" <?php echo ($per_page == 50) ? 'selected' : NULL; ?>>50</option>
							<option value="80" <?php echo ($per_page == 80) ? 'selected' : NULL; ?>>80</option>
							<option value="100" <?php echo ($per_page == 100) ? 'selected' : NULL; ?>>100</option>
						</select>
					</div>
				</form>
				<form action="<?php echo site_url('produk/search'); ?>" method="GET">
					<div class="d-flex align-items-center position-relative mt-5">
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-1 position-absolute ms-6">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"/>
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"/>
                            </svg>
                        </span>
						<!--end::Svg Icon-->
						<input name="keyword" type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Cari produk" value="<?php if (isset($keyword)) {
							echo $keyword;
						} ?>"/>
					</div>
				</form>
			</div>
			<!--end::Search-->
			<!--begin::Row-->
			<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9 pt-5">
				<!--begin::Col-->
				<?php
				$no = 1;
				foreach ($list_produk as $key => $produk) {
					?>
					<div class="col-md-4">
						<!--begin::Card-->
						<div class="card card-flush h-md-100">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title">
									<h6><?php echo $produk->produk; ?></h6>
								</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Card body-->
							<div class="card-body pt-1">
								<!--begin::Users-->
								<center>
									<img src="<?php echo (!empty($produk->thumbnail)) ? base_url('assets/file/thumbnail/' . $produk->thumbnail) : base_url('assets/media/products/no-image.png'); ?>" class="img-fluid rounded" alt="Responsive image" style="min-height: 240px; max-width: 240px; max-height: 240px">
								</center>
								<!--end::Users-->
								<div class="fw-bolder text-gray-600 mt-3">Harga : Rp. <?php echo (is_null($produk->harga)) ? rupiah(0) : rupiah($produk->harga); ?>,00</div>
							</div>
							<!--end::Card body-->
							<!--begin::Card footer-->
							<div class="card-footer flex-wrap pt-0 text-center">
								<a href="<?php echo site_url('produk-public/detail/' . encrypt_url($produk->id_produk)); ?>" class="btn btn-success my-1 me-2">Detail</a>
							</div>
							<!--end::Card footer-->
						</div>
						<!--end::Card-->
					</div>
					<?php
					$no++;
				}
				?>
				<!--end::Col-->
			</div>
			<!--end::Row-->
			<?php
			echo $this->pagination->create_links();
			?>
			<!--end::Table Widget 1-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
