<div class="content flex-row-fluid" id="kt_content">
	<!--begin::Row-->
	<div class="row gy-5 g-xl-8">
		<!--begin::Col-->
		<?php
		if ($this->session->flashdata('message_success')) {
			?>
			<div class="col-xxl-12">
				<!--begin::Alert-->
				<div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5 mb-3">
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
						<h4 class="fw-bold">Pesan!</h4>
						<span><?php echo $this->session->flashdata('message_success'); ?></span>
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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">List Data Pengguna</h3>
					<!--end::Card title-->
				</div>
				<!--end::Header-->
				<div class="card-body pt-0">
					<table class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7" id="kt_datatable_example_user">
						<thead class="fw-bold fs-6 text-gray-800">
						<tr>
							<th>No</th>
							<th class="min-w-100px">Username</th>
							<th class="min-w-300px">Nama Lengkap</th>
							<th class="min-w-100px">Status</th>
							<th class="min-w-100px">Banned</th>
							<th class="min-w-400px">Aksi</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$no = 1;
						foreach ($listuser->result() as $user) {
							?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $user->username; ?></td>
								<td><?php echo $user->name; ?></td>
								<td><?php echo ($user->activated == '1') ? '<span class="badge badge-light-success">Aktif</span>' : '<span class="badge badge-light-danger">Tidak Aktif</span>'; ?></td>
								<td><?php echo ($user->banned == '1') ? '<span class="badge badge-light-danger">Banned</span>' : '<span class="badge badge-light-success">Unbanned</span>'; ?></td>
								<td>
									<?php if ($user->activated != 0) { ?>
										<a href="<?php echo site_url('Usersmanagement/update/' . $user->id_user); ?>" class="btn btn-sm btn-primary">
											<i class="fal fa-edit"></i>&nbsp Sunting</a> <?php } ?>
									<?php
									if ($user->banned == '1') {
										?>
										<a href="<?php echo site_url('Usersmanagement/unbanned/' . $user->id_user); ?>" class="btn btn-sm btn-success"><i class="fal fa-edit"></i>&nbsp Unbanned</a>
										<?php
									} else {
										if ($user->activated != 0) {
											?>
											<a href="<?php echo site_url('Usersmanagement/banned/' . $user->id_user); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin akan membanned ?')"><i class="fal fa-trash-alt"></i>&nbsp Banned</a>
											<?php
										}
									}
									if ($user->activated == '0') {
										?>
										<a href="<?php echo site_url('Usersmanagement/activate/' . $user->id_user); ?>" class="btn btn-sm btn-success"><i class="fal fa-check"></i>&nbsp Aktifasi</a>
										<?php
									}
									?>
									<?php if ($user->activated != 0) { ?>
									<a href="<?php echo site_url('Usersmanagement/change_role/' . $user->id_user); ?>" class="btn btn-sm btn-primary">
											<i class="fal fa-user"></i>&nbsp Hak Akses</a><?php } ?>
								</td>
							</tr>
							<?php
							$no++;
						}
						?>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<center>
						<a href="<?php echo site_url('Usersmanagement/add'); ?>" title="">
							<button type="button" class="btn btn-primary btn-right-icon">
								<i class="fal fa-plus"></i>&nbsp Tambah Users
							</button>
						</a>
					</center>
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
		$("#kt_datatable_example_user").DataTable({
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
				targets: 5
			}],
			"columns": [{
				className: "text-center"
			},
				null,
				null,
				null,
				null,
				{
					className: "text-center justify-content-center"
				},
			]
		});
	});
</script>

