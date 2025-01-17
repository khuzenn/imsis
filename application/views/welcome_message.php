<!--begin::Post-->
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
					<h3 class="card-title fw-bolder text-gray-800 fs-2">Leading Partners</h3>
					<!--end::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar">
						<div class="my-1">
							<!--begin::Select-->
							<select class="form-select fw-bold w-125px" data-control="select2" data-placeholder="Status" data-hide-search="true">
								<option value="1" selected="selected">Status</option>
								<option value="2">Pending</option>
								<option value="3">In Progress</option>
								<option value="3">Complete</option>
							</select>
							<!--end::Select-->
						</div>
					</div>
					<!--end::Card toolbar-->
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin::Table-->
					<div class="table-responsive">
						<table class="table align-middle table-row-bordered table-row-dashed gy-5" id="kt_table_widget_1">
							<!--begin::Table body-->
							<tbody>
								<!--begin::Table row-->
								<tr class="text-start text-gray-400 fw-boldest fs-7 text-uppercase">
									<th class="min-w-200px px-0">Authors</th>
									<th class="min-w-125px">Progress</th>
									<th class="text-end pe-2 min-w-70px">Action</th>
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Author=-->
									<td class="p-0">
										<div class="d-flex align-items-center">
											<!--begin::Logo-->
											<div class="symbol symbol-50px me-2">
												<span class="symbol-label">
													<img alt="" class="w-25px" src="<?php echo base_url(); ?>assets/media/svg/brand-logos/aven.svg" />
												</span>
											</div>
											<!--end::Logo-->
											<div class="ps-3">
												<a href="<?php echo base_url(); ?>?page=account/overview" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Brad Simmons</a>
												<span class="text-gray-400 fw-bold d-block">HTML, JS, ReactJS</span>
											</div>
										</div>
									</td>
									<!--end::Author=-->
									<!--begin::Progress=-->
									<td>
										<div class="d-flex flex-column w-100 me-2 mt-2">
											<span class="text-gray-400 me-2 fw-boldest mb-2">65%</span>
											<div class="progress bg-light-danger w-100 h-5px">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
											</div>
										</div>
									</td>
									<!--end::Company=-->
									<!--begin::Action=-->
									<td class="pe-0 text-end">
										<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Author=-->
									<td class="p-0">
										<div class="d-flex align-items-center">
											<!--begin::Logo-->
											<div class="symbol symbol-50px me-2">
												<span class="symbol-label">
													<img alt="" class="w-25px" src="<?php echo base_url(); ?>assets/media/svg/brand-logos/leaf.svg" />
												</span>
											</div>
											<!--end::Logo-->
											<div class="ps-3">
												<a href="<?php echo base_url(); ?>?page=account/overview" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Jessie Clarcson</a>
												<span class="text-gray-400 fw-bold d-block">C#, ASP.NET, MS SQL</span>
											</div>
										</div>
									</td>
									<!--end::Author=-->
									<!--begin::Progress=-->
									<td>
										<div class="d-flex flex-column w-100 me-2 mt-2">
											<span class="text-gray-400 me-2 fw-boldest mb-2">85%</span>
											<div class="progress bg-light-danger w-100 h-5px">
												<div class="progress-bar bg-primary" role="progressbar" style="width: 85%"></div>
											</div>
										</div>
									</td>
									<!--end::Company=-->
									<!--begin::Action=-->
									<td class="pe-0 text-end">
										<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Author=-->
									<td class="p-0">
										<div class="d-flex align-items-center">
											<!--begin::Logo-->
											<div class="symbol symbol-50px me-2">
												<span class="symbol-label">
													<img alt="" class="w-25px" src="<?php echo base_url(); ?>assets/media/svg/brand-logos/atica.svg" />
												</span>
											</div>
											<!--end::Logo-->
											<div class="ps-3">
												<a href="<?php echo base_url(); ?>?page=account/overview" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Lebron Wayde</a>
												<span class="text-gray-400 fw-bold d-block">PHP, Laravel, VueJS</span>
											</div>
										</div>
									</td>
									<!--end::Author=-->
									<!--begin::Progress=-->
									<td>
										<div class="d-flex flex-column w-100 me-2 mt-2">
											<span class="text-gray-400 me-2 fw-boldest mb-2">40%</span>
											<div class="progress bg-light-danger w-100 h-5px">
												<div class="progress-bar bg-success" role="progressbar" style="width: 40%"></div>
											</div>
										</div>
									</td>
									<!--end::Company=-->
									<!--begin::Action=-->
									<td class="pe-0 text-end">
										<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Author=-->
									<td class="p-0">
										<div class="d-flex align-items-center">
											<!--begin::Logo-->
											<div class="symbol symbol-50px me-2">
												<span class="symbol-label">
													<img alt="" class="w-25px" src="<?php echo base_url(); ?>assets/media/svg/brand-logos/volicity-9.svg" />
												</span>
											</div>
											<!--end::Logo-->
											<div class="ps-3">
												<a href="<?php echo base_url(); ?>?page=account/overview" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Natali Trump</a>
												<span class="text-gray-400 fw-bold d-block">Python, ReactJS</span>
											</div>
										</div>
									</td>
									<!--end::Author=-->
									<!--begin::Progress=-->
									<td>
										<div class="d-flex flex-column w-100 me-2 mt-2">
											<span class="text-gray-400 me-2 fw-boldest mb-2">71%</span>
											<div class="progress bg-light-danger w-100 h-5px">
												<div class="progress-bar bg-info" role="progressbar" style="width: 71%"></div>
											</div>
										</div>
									</td>
									<!--end::Company=-->
									<!--begin::Action=-->
									<td class="pe-0 text-end">
										<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Author=-->
									<td class="p-0">
										<div class="d-flex align-items-center">
											<!--begin::Logo-->
											<div class="symbol symbol-50px me-2">
												<span class="symbol-label">
													<img alt="" class="w-25px" src="<?php echo base_url(); ?>assets/media/svg/brand-logos/bebo.svg" />
												</span>
											</div>
											<!--end::Logo-->
											<div class="ps-3">
												<a href="<?php echo base_url(); ?>?page=account/overview" class="text-gray-800 fw-boldest fs-5 text-hover-primary mb-1">Carles Puyol</a>
												<span class="text-gray-400 fw-bold d-block">PHP, SQLite, Artisan CLI</span>
											</div>
										</div>
									</td>
									<!--end::Author=-->
									<!--begin::Progress=-->
									<td>
										<div class="d-flex flex-column w-100 me-2 mt-2">
											<span class="text-gray-400 me-2 fw-boldest mb-2">45%</span>
											<div class="progress bg-light-danger w-100 h-5px">
												<div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
											</div>
										</div>
									</td>
									<!--end::Company=-->
									<!--begin::Action=-->
									<td class="pe-0 text-end">
										<a href="#" class="btn btn-sm btn-icon btn-color-gray-500 btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="bottom-start">
											<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
													<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
													<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--begin::Menu 3-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
											<!--begin::Heading-->
											<div class="menu-item px-3">
												<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Heading-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Create Invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link flex-stack px-3">Create Payment
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3">Generate Bill</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
												<a href="#" class="menu-link px-3">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Plans</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<!--begin::Switch-->
															<label class="form-check form-switch form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																<!--end::Input-->
																<!--end::Label-->
																<span class="form-check-label text-muted fs-6">Recuring</span>
																<!--end::Label-->
															</label>
															<!--end::Switch-->
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3 my-1">
												<a href="#" class="menu-link px-3">Settings</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu 3-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
							</tbody>
							<!--end::Table body-->
						</table>
					</div>
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
<!--end::Post-->
