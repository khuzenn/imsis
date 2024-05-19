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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">List Data Hak Akses</h3>
					<!--end::Card title-->
					<!--begin::Button-->
					<a href="<?php echo site_url('Roles/add'); ?>" class="btn btn-success btn-sm my-2" tooltip="Tambah Hak Akses">Tambah Hak Akses</a>
					<!--end::Button-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body pt-0">
					<!--begin::Table-->
					<table id="kt_datatable_example_roles" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
						<thead class="fw-bold fs-6 text-gray-800">
							<tr>
								<th class="min-w-50px">No</th>
								<th class="min-w-150px">Hak Akses</th>
								<th class="min-w-200px">Nama Lengkap Hak Akses</th>
								<th>Default</th>
								<th class="min-w-450px">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach ($listRoles->result() as $role) {
							?>
								<tr>
									<td><?php echo $no; ?></td>
									<td><?php echo $role->role; ?></td>
									<td><?php echo $role->full; ?></td>
									<td><?php if ($role->default == '1') {
											echo '<span class="badge badge-light-success">Aktif</span>';
										} else {
											echo '<span class="badge badge-light-danger">Tidak Aktif</span>';
										}; ?></td>
									<td>
										<div class="text-center">
											<a href="<?php echo site_url('Roles/change_default/' . $role->role_id); ?>" class="btn btn-primary btn-sm"><i class="fal fa-check-square"></i>&nbsp Default</a>
											<a href="<?php echo site_url('Roles/role_permission/' . $role->role_id); ?>" class="btn btn-success btn-sm"><i class="fal fa-cogs"></i>&nbsp Modul</a>
											<a href="<?php echo site_url('Roles/update/' . $role->role_id); ?>" class="btn btn-primary btn-sm"><i class="fal fa-edit"></i>&nbsp Sunting</a>
											<a href="<?php echo site_url('Roles/delete/' . $role->role_id); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin UntuK Menghapus Data?')"><i class="fal fa-trash-alt"></i>&nbsp Hapus</a>
										</div>
									</td>
								</tr>
							<?php
								$no++;
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
		$("#kt_datatable_example_roles").DataTable({
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
			columnDefs: [{
				orderable: false,
				targets: 0
			}, {
				orderable: false,
				targets: 4
			}],
			"columns": [{
					className: "text-center"
				},
				null,
				null,
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
