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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Form Hak Akses Pengguna</h3>
					<!--end::Card title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<form class="form-horizontal" role="form" action="<?php echo $action; ?>" method="POST">
					<div class="card-body pt-0">
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-2 col-form-label text-end">Hak Akses<span style="color:red;">*</span></label>
							<div class="col-sm-10">
								<select class="form-control role" name="role_id" tabindex="2">
									<?php
									foreach ($listRoles->result() as $role) {
										?>
										<option value="<?php echo $role->role_id ?>" <?php if ($role->role_id == $role_id_change) {
											echo 'selected="selected"';
										} ?>><?php echo $role->full; ?></option>
										<?php
									}
									?>
								</select>
								<span style="color: red;"><?php echo form_error('role_id'); ?></span>
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
<script>
	$('.role').select2({})
</script>
