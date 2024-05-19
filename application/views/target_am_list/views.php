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
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">List Capaian Target AM</h3>
                    <!--end::Card title-->
                    <!--begin::Button-->
                    <a href="<?php echo site_url('target-am'); ?>" class="btn btn-success btn-sm my-2" tooltip="Tambah Capaian Target AM">Tambah Capaian Target AM</a>
                    <!--end::Button-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table id="kt_datatable_example_segmen" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
                        <thead class="fw-bold fs-6 text-gray-800">
                            <tr>
                                <td>No</td>
                                <td>Account AM</td>
                                <td>Lini Bisnis</td>
                                <td>Segmen</td>
                                <td>Kastemer</td>
                                <td>Produk</td>
                                <td>Kategori Produk</td>
                                <td>Unit Price</td>
                                <td>Volume</td>
                                <td>Target Price</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($list_target as $key => $target) {
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $target->name; ?></td>
                                    <td><?php echo $target->lini_bisnis; ?></td>
                                    <td><?php echo $target->segmen; ?></td>
                                    <td><?php echo $target->kastemer; ?></td>
                                    <td><?php echo $target->produk; ?></td>
                                    <td><?php echo $target->kategori_produk; ?></td>
                                    <td><?php echo $target->unit_price; ?></td>
                                    <td><?php echo $target->volume; ?></td>
                                    <td><?php echo $target->target_price; ?></td>
                                    <td>
                                        <a href="<?php echo site_url('list-target-am/detail/' . $target->id_target_am); ?>" class="btn btn-primary btn-sm">Detail</a>
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
        $("#kt_datatable_example_segmen").DataTable({
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
                targets: 10
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
