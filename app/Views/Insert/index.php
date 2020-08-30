<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"> Insert Item </h1>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>

                        <!-- Form Add Items-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                    <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                                </svg>
                                Form Insert Items
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="modal-body">
                                        <form action="/items/save" method="post">
                                            <?= csrf_field(); ?>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="id_items" class="col-sm-2 col-form-label"> Code Items </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control <?= ($validation->hasError('id_items')) ? 'is-invalid' : ''; ?>" value="<?= old('id_items'); ?>" id="id_items" name="id_items" placeholder="Kode Barang" autofocus>
                                                        <div id="id_items" class="invalid-feedback">
                                                            <?= $validation->getError('id_items'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="color_items" class="col-sm-2 col-form-label"> Color Items </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control <?= ($validation->hasError('color_items')) ? 'is-invalid' : ''; ?>" id="color_items" name="color_items" value="<?= old('color_items'); ?>" placeholder="Warna Barang">
                                                        <div id="id_items" class="invalid-feedback">
                                                            <?= $validation->getError('name_items'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="name_items" class="col-sm-2 col-form-label"> Name Items </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control <?= ($validation->hasError('name_items')) ? 'is-invalid' : ''; ?>" value="<?= old('name_items'); ?>" id="name_items" name="name_items" placeholder="Nama Barang">
                                                        <div id="id_items" class="invalid-feedback">
                                                            <?= $validation->getError('name_items'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="unit_items" class="col-sm-2 col-form-label"> Stock </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control <?= ($validation->hasError('unit_items')) ? 'is-invalid' : ''; ?>" id="unit_items" name="unit_items" placeholder="Jumlah Barang">
                                                        <div id="id_items" class="invalid-feedback">
                                                            <?= $validation->getError('unit_items'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="col-sm-1">
                                                        <button type="submit" class="btn btn-primary"> Submit </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <main>
                    <div class="container-fluid">
                        <div class="form-row">
                            <!-- Button Search Items -->
                            <div class="col-4">
                                <form action="" method="post">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Masukkan kode atau nama barang.." name="keyword" id="">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary" type="submit" id=""> Search </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Button Modal Info -->
                            <form action="" data-toggle="modal" data-target="#addModal" href="" class="d-inline">
                                <button method="post" type="button" class="btn btn-primary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                    </svg>
                                </button>
                            </form>
                            <!-- Add Form Modal  -->
                            <form action="" method="post">
                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> Form Insert Items </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                FORM INSERT ITEM BELUM TERSEDIA!
                                            </div>
                                            <div class="modal-footer">
                                                <!-- Button Submit Items -->
                                                <div class="form-group col-md-2.5">
                                                    <div class="col-sm-1">
                                                        <button type="submit" class="btn btn-primary"> Submit </button>
                                                    </div>
                                                </div>
                                                <!-- Close Pop Up -->
                                                <a href="" class="btn btn-secondary" data-dismiss="modal">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- End Add Form Modal -->
                        </div>

                        <!-- Tabble Items -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-table" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
                                </svg>
                                Data List Items
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
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php $no = 1 + (5 * ($currentPage - 1)); ?>
                                                <?php foreach ($item as $i) : ?>
                                                    <td scope="row"> <?= $no++; ?> </td>
                                                    <td> <?= $i['id_items']; ?> </td>
                                                    <td> <?= $i['name_items']; ?> </td>
                                                    <td> <?= $i['unit_items']; ?> </td>
                                                    <td> <?= $i['color_items']; ?> </td>
                                                    <td>
                                                        <!-- Button Modal Info -->
                                                        <form action="/items/detail/<?= $i['id']; ?>" data-toggle="modal" data-target="#infoModal" href="" class="d-inline">
                                                            <button method="post" type="button" class="btn btn-info">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                                    <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                                                    <circle cx="8" cy="4.5" r="1" />
                                                                </svg>
                                                            </button>
                                                        </form>

                                                        <!-- Button Delete -->
                                                        <form action="/items/<?= $i['id']; ?>" method="post" class="d-inline">
                                                            <?= csrf_field(); ?>
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                        <!-- Pop Up Modal Info -->
                                        <?php foreach ($item as $i) : ?>
                                            <form action="" method="post">
                                                <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"> Info Items </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                EDIT BELUM TERSEDIA!
                                                            </div>
                                                            <div class="modal-footer">
                                                                <!-- Button Edit Selected Items -->
                                                                <a href="" class="btn btn-warning">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                    </svg>
                                                                </a>
                                                                <!-- Close Pop Up -->
                                                                <a href="" class="btn btn-secondary" data-dismiss="modal">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        <?php endforeach; ?>
                                        <!-- End Info -->
                                    </table>
                                    <?= $pager->links('item', 'items_pagination') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>