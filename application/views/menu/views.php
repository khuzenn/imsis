<div class="content flex-row-fluid" id="kt_content">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-8">
		<!--begin::Col-->
		<div class="col-xxl-12">
			<!--begin::Table Widget 1-->
			<div class="card">
				<!--begin::Header-->
				<div class="card-header border-0 pt-5 pb-3">
					<!--begin::Card title-->
					<h3 class="card-title fw-bolder text-gray-800 fs-2">List Data Menu</h3>
					<!--end::Card title-->
					<!--begin::Button-->
					<a href="<?php echo site_url('Menu/add'); ?>" class="btn btn-success btn-sm my-2" tooltip="Tambah Menu">Tambah Menu</a>
					<!--end::Button-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table id="kt_datatable_example_menu" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
						<thead class="fw-bold fs-6 text-gray-800">
						<tr>
							<th class="min-w-50px">No</th>
							<th class="min-w-250px">Nama Menu</th>
							<th class="min-w-150px">Parent Menu</th>
							<th class="min-w-150px">icon</th>
							<th class="min-w-100px">kategori</th>
							<th class="min-w-200px">Link</th>
							<th class="min-w-100px">Urutan Menu</th>
							<th class="min-w-80px">Status</th>
							<th class="min-w-350px">Aksi</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$x = 1;
						foreach ($listMenu->result() as $menu) {
							?>
							<tr>
								<td><?php echo $x; ?></td>
								<td><?php echo $menu->nama_menu; ?></td>
								<td><?php echo $menu->nama_menu_parent; ?></td>
								<td>
									<i class="<?php echo $menu->icon; ?>"></i> &nbsp - &nbsp <?php echo $menu->icon; ?>
								</td>
								<td><?php echo $menu->kategori; ?></td>
								<td><?php echo $menu->href; ?></td>
								<td><?php echo $menu->sort; ?></td>
								<td><?php echo ($menu->status == 'Y') ? '<span class="badge badge-light-success">Aktif</span>' : '<span class="badge badge-light-danger">Tidak Aktif</span>'; ?></td>
								<td>
									<a href="<?php echo site_url('Menu/update/' . $menu->id_menu); ?>" class="btn btn-primary btn-sm" title="Update">Sunting</a>
									<a href="<?php echo site_url('Menu/delete/' . $menu->id_menu); ?>" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are You Sure Want to Delete This Data?')">Hapus</a>
								</td>
							</tr>
							<?php
							$x++;
						}
						?>
						</tbody>
					</table>
					<!--end::Table-->
				</div>
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
		$("#kt_datatable_example_menu").DataTable({
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
			"scrollX": true,
			"processing": true,
			"order": [],
			"columnDefs": [{
				orderable: false,
				targets: 0
			}, {
				orderable: false,
				targets: 8
			}],
			"columns": [{
				className: "text-center"
			},
				null,
				null,
				{
					className: "text-center justify-content-center"
				},
				null,
				null,
				{
					className: "text-center justify-content-center"
				},
				{
					className: "text-center justify-content-center"
				},
				{
					className: "text-center justify-content-center"
				},
			]
		});
	});
</script>
