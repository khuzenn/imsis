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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Impor Excel Kastemer</h3>
					<!--end::Card title-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<form id="form-upload-user" method="post" autocomplete="off">
					<div class="card-body pt-0">
						<div class="sub-result"></div>
						<div class="mb-3 row">
							<label class="col-sm-2 col-form-label text-end">File Excel<span class="text-danger">*</span></label>
							<div class="col-sm-10">
								<input type="file" class="form-control form-control-sm" id="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
								<small class="text-danger">Jenis file yang dimasukan xls, xlsx atau csv.</small>
								<br>
								<br>
								Unduh format contoh file excel untuk diimport, <a href="<?php echo site_url('kastemer/download'); ?>">Unduh</a>
							</div>
						</div>
						<div class="form-group">
							<div class="text-center">
								<div class="user-loader" style="display: none; ">
									<i class="fa fa-spinner fa-spin"></i> <small>Sedang memproses ...</small>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<center>
							<button type="submit" class="btn btn-primary btn-sm" id="btnUpload">
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
<!-- /.content -->

<script>
	$(document).ready(function () {
		$("body").on("submit", "#form-upload-user", function (e) {
			e.preventDefault();
			var data = new FormData(this);
			$.ajax({
				type: 'POST',
				url: "<?php echo base_url('Kastemer/import') ?>",
				data: data,
				dataType: 'json',
				contentType: false,
				cache: false,
				processData: false,
				beforeSend: function () {
					$("#btnUpload").prop('disabled', true);
					$(".user-loader").show();
				},
				success: function (result) {
					$("#btnUpload").prop('disabled', false);
					if ($.isEmptyObject(result.error_message)) {
						$(".sub-result").append('<div class="text-center pb-5"><div class="alert alert-dismissible bg-light-success d-flex flex-column flex-sm-row w-100 p-5 mb-3"><i class="fal fa-check"></i>&nbsp ' + result.success_message + '</div></div>');
					} else {
						$(".sub-result").append('<div class="text-center pb-5"><div class="alert alert-dismissible bg-light-warning d-flex flex-column flex-sm-row w-100 p-5 mb-3"><i class="fal fa-cross"></i>&nbsp ' + result.error_message + '</div></div>');
					}
					$(".user-loader").hide();
				}
			});
		});
	});
</script>
