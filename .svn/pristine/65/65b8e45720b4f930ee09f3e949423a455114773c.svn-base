<div class="content row flex-row-fluid" id="kt_content">
	<!--<div class="content flex-row-fluid" id="kt_content">-->
	<!--begin::Row-->
	<div class="col-md-6 pb-3">
		<!--begin::Col-->
		<div class="col-xxl-12">
			<!--begin::Table Widget 1-->
			<div class="card">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5 pb-3">
					<!--begin::Card title-->
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Detail Kastemer</h3>
					<!--end::Card title-->
					<a href="<?php echo site_url('kastemer/hapus/' . $id_kastemer); ?>" class="btn btn-danger btn-md" onclick="return confirm('Apakah Anda yakin untuk menghapus data kastemer ini?')">
						<i class="fal fa-trash"></i>&nbsp Hapus Kastemer
					</a>
				</div>
				<!--end::Header-->
				<div class="card-body pt-0">
					<table class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
						<tr>
							<td class="fw-bold text-end">Kastemer :</td>
							<td><?php echo $kastemer; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Tanggal Berdiri :</td>
							<td><?php echo $tgl_berdiri_kastemer; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Email Kastemer :</td>
							<td><?php echo $email_perusahaan; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">No Telepon Kastemer :</td>
							<td><?php echo $no_tlp_perusahaan; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Alamat Kastemer :</td>
							<td><?php echo $alamat; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Segmen :</td>
							<td><?php echo $segmen; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Nama PIC :</td>
							<td><?php echo $nama_pic; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Tanggal Lahir PIC :</td>
							<td><?php echo $tgl_lahir_pic; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Jabatan PIC :</td>
							<td><?php echo $jabatan_pic; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">Email PIC :</td>
							<td><?php echo $email_pic; ?></td>
						</tr>
						<tr>
							<td class="fw-bold text-end">No Hp PIC :</td>
							<td><?php echo $no_hp_pic; ?></td>
						</tr>
						<tr>
							<th class="fw-bold text-center" colspan="2">KBLI</th>
						</tr>
						<?php
						if (count($list_kbli) != '0') {
							foreach ($list_kbli as $key => $kbli) {
								?>
								<tr>
									<td colspan="2"><?php echo $kbli->kbli; ?></td>
								</tr>
							<?php }
						} else {
							?>
							<tr>
								<td colspan="2" class="fw-bold">Tidak memiliki KBLI</td>
							</tr>
							<?php
						}
						?>
					</table>
				</div>
				<div class="card-footer">
					<center>
						<a href="<?php echo site_url('kastemer/tambah'); ?>" class="btn btn-success btn-sm">
							<i class="fal fa-plus"></i>&nbsp Tambah Kastemer
						</a>
						<a href="<?php echo site_url('kastemer/sunting/' . $id_kastemer); ?>" class="btn btn-primary btn-sm">
							<i class="fal fa-plus"></i>&nbsp Sunting Kastemer
						</a>
						<a href="<?php echo $url; ?>" class="btn btn-danger btn-sm">
							<i class="fal fa-arrow-left"></i>&nbsp Kembali
						</a>
					</center>
				</div>
			</div>
			<!--end::Table Widget 1-->
		</div>
		<!--end::Col-->
	</div>
	<div class="col-md-6">
		<!--begin::Col-->
		<div class="col-xxl-12 pe-0 pb-3">
			<!--begin::Table Widget 1-->
			<div class="card">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5 pb-3">
					<!--begin::Card title-->
					<h3 class="card-title fw-bolder text-gray-800 fs-2">List Produk</h3>
					<!--end::Card title-->
				</div>
				<!--end::Header-->
				<div class="card-body pt-0">
					<div class="">
						<table id="kt_datatable_example_produk" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7" width="120%">
							<thead class="fw-bold fs-6 text-gray-800">
							<tr>
								<td>Produk</td>
								<td class="none">Kategori</td>
								<td class="none">Harga</td>
							</tr>
							</thead>
							<tbody>
							<?php
							foreach ($list_produk as $produk){
								?>
								<tr>
									<td><?php echo $produk->produk; ?></td>
									<td><?php echo $produk->kategori_produk; ?></td>
									<td>Rp. <?php echo rupiah($produk->harga); ?>,00</td>
								</tr>
								<?php
							}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--end::Table Widget 1-->
		</div>
		<!--end::Col-->
		<!--begin::Col-->
		<div class="col-xxl-12 pe-0">
			<!--begin::Table Widget 1-->
			<div class="card">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5 pb-3">
					<!--begin::Card title-->
					<h3 class="card-title fw-bolder text-gray-800 fs-2">List VIP</h3>
					<!--end::Card title-->
				</div>
				<!--end::Header-->
				<div class="card-body pt-0">
					<div class="">
						<table id="kt_datatable_example_kastemer" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7" width="120%">
							<thead class="fw-bold fs-6 text-gray-800">
							<tr>
								<td>Nama</td>
								<td>Tanggal Lahir</td>
								<td class="none">Jabatan</td>
								<td class="none">Email VIP</td>
								<td class="none">No Tlp VIP</td>
							</tr>
							</thead>
							<tbody>
							<?php
								foreach ($list_vip as $vip){
							?>
							<tr>
								<td><?php echo $vip->nama_vip; ?></td>
								<td><?php echo $vip->tgl_lahir_vip; ?></td>
								<td><?php echo $vip->jabatan_vip; ?></td>
								<td><?php echo $vip->email_vip; ?></td>
								<td><?php echo $vip->no_tlp_vip; ?></td>
							</tr>
							<?php
								}
							?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--end::Table Widget 1-->
		</div>
		<!--end::Col-->
	</div>
	<!--end::Row-->
</div>
<script>
	$(function () {
		$("#kt_datatable_example_kastemer").DataTable({
			"language": {
				"lengthMenu": "Show _MENU_",
			},
			"dom": "<'row'" +
				"<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
				"<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
				">" +

				"<'table-responsive'tr>" +

				"<'row'" +
				"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
				"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
				">",
			'responsive': true,
			"scrollX": true,
			"processing": true,
			"lengthChange": false,
			"order": [],
			"paging": false
		});
		$("#kt_datatable_example_produk").DataTable({
			"language": {
				"lengthMenu": "Show _MENU_",
			},
			"dom": "<'row'" +
				"<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
				"<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
				">" +

				"<'table-responsive'tr>" +

				"<'row'" +
				"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
				"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
				">",
			'responsive': true,
			"scrollX": true,
			"processing": true,
			"order": [],
		});
	});
</script>
