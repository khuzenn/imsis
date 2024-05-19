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
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Detail Kategori Produk</h3>
                    <!--end::Card title-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table table-rounded border gy-5 gs-7">
                        <thead>
                            <tr>
                                <td>Nama Kategori : &nbsp</td>
                                <td><?php echo $kategori_produk; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Produk : &nbsp</td>
                                <td><?php echo $produk; ?></td>
                            </tr>
                        </thead>
                    </table>
                    <table id="kt_datatable_example_kategori_produk" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
                        <thead class="fw-bold fs-6 text-gray-800">
                            <tr>
                                <td>No</td>
                                <td>AM</td>
                                <td>Lini Bisnis</td>
                                <td>Segmen</td>
                                <td>Kastemer</td>
                                <td>Unit Price</td>
                                <td>Volume</td>
                                <td>Target</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_kastemer as $key => $kastemer) {
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $kastemer->name; ?></td>
                                    <td><?php echo $kastemer->lini_bisnis; ?></td>
                                    <td><?php echo $kastemer->segmen; ?></td>
                                    <td><?php echo $kastemer->kastemer; ?></td>
                                    <td><?php echo $kastemer->unit_price; ?></td>
                                    <td><?php echo $kastemer->volume; ?></td>
                                    <td><?php echo $kastemer->target_price; ?></td>
                                    <td><a href="#" class="btn btn-success btn-sm">Detail</a></td>
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
        $("#kt_datatable_example_kategori_produk").DataTable({
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