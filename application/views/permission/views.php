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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">List Modul</h3>
					<!--end::Card title-->
					<!--begin::Button-->
					<a href="<?php echo site_url('Permission/add'); ?>" class="btn btn-success btn-sm my-2" tooltip="Tambah Modul">Tambah Modul</a>
					<!--end::Button-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table id="kt_datatable_example_permission" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
						<thead class="fw-bold fs-6 text-gray-800">
							<tr>
								<th>No</th>
								<th>Modul</th>
								<th>Controller</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$x = 1;
							foreach ($listPermission->result() as $permission) {
							?>
								<tr>
									<td><?php echo $x; ?></td>
									<td><?php echo $permission->description; ?></td>
									<td><?php echo $permission->permission; ?></td>
									<td>
										<div class="table-controls">
											<a href="<?php echo site_url('Permission/update/' . $permission->permission_id); ?>" class="btn btn-primary btn-sm"><i class="fal fa-edit"></i>&nbsp Sunting</a>
											<a href="<?php echo site_url('Permission/delete/' . $permission->permission_id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want to Delete This Data?')"><i class="fal fa-trash-alt"></i>&nbsp Hapus</a>
										</div>
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
	$(function() {
		$("#kt_datatable_example_permission").DataTable({
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
			"processing": true,
			"order": [],
			columnDefs: [{
				orderable: false,
				targets: 0
			}, {
				orderable: false,
				targets: 3
			}],
			"columns": [{
					className: "text-center"
				},
				null,
				null,
				{
					className: "text-center justify-content-center"
				},
			]
		});
	});
</script>
