<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"> Form Detail Items </h1>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </main>

                <main>

                    <div class="container-fluid">
                        <div class="form-row">
                            <!-- Tabble Items -->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-table" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                    </svg>
                                    Data Detail Items
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" enctype="multipart/form-data">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> Code Items </th>
                                                    <th> Name Items </th>
                                                    <th> Unit Total </th>
                                                    <th> Color Items </th>
                                                    <th> Date </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> <input type="text" readonly class="form-control-plaintext" id="" value="1"> </td>
                                                    <td> <input type="text" readonly class="form-control-plaintext" id="id_items" value="<?php echo $item['id_items'] ?>"> </td>
                                                    <td> <input type="text" readonly class="form-control-plaintext" id="name_items" value="<?php echo $item['name_items'] ?>"> </td>
                                                    <td> <input type="text" readonly class="form-control-plaintext" id="unit_items" value="<?php echo $item['unit_items'] ?>"> </td>
                                                    <td> <input type="text" readonly class="form-control-plaintext" id="color_items" value="<?php echo $item['color_items'] ?>"> </td>
                                                    <td> <input type="text" readonly class="form-control-plaintext" id="color_items" value="<?php echo $item['updated_at'] ?>"> </td>
                                                    <td>
                                                        <!-- Button Edit -->
                                                        <form action="" href="" class="d-inline">
                                                            <button method="post" type="submit" class="btn btn-warning">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
            </div>
        </div>
    </div>
</body>