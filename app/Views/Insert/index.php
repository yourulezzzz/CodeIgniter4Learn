<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"> Form Items </h1>
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
                            <!-- Button add Modal Info -->
                            <form action="" data-toggle="modal" data-target="#addModal" href="" class="d-inline">
                                <button method="post" type="button" class="btn btn-primary">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                    </svg>
                                </button>
                            </form>
                            <!-- Add Form Modal  -->
                            <form action="/items/save" method="post">
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
                                                <?= csrf_field(); ?>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="id_items" class="col-sm-6 col-form-label"> Code Items </label>
                                                        <div class="col-sm-15">
                                                            <input type="text" class="form-control <?= ($validation->hasError('id_items')) ? 'is-invalid' : ''; ?>" value="<?= old('id_items'); ?>" id="id_items" name="id_items" placeholder="Kode Barang" autofocus>
                                                            <div id="id_items" class="invalid-feedback">
                                                                <?= $validation->getError('id_items'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="color_items" class="col-sm-6 col-form-label"> Color Items </label>
                                                        <div class="col-sm-15">
                                                            <input type="text" class="form-control <?= ($validation->hasError('color_items')) ? 'is-invalid' : ''; ?>" id="color_items" name="color_items" value="<?= old('color_items'); ?>" placeholder="Warna Barang">
                                                            <div id="id_items" class="invalid-feedback">
                                                                <?= $validation->getError('name_items'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="name_items" class="col-sm-6 col-form-label"> Name Items </label>
                                                        <div class="col-sm-15">
                                                            <input type="text" class="form-control <?= ($validation->hasError('name_items')) ? 'is-invalid' : ''; ?>" value="<?= old('name_items'); ?>" id="name_items" name="name_items" placeholder="Nama Barang">
                                                            <div id="id_items" class="invalid-feedback">
                                                                <?= $validation->getError('name_items'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="unit_items" class="col-sm-6 col-form-label"> Stock </label>
                                                        <div class="col-sm-15">
                                                            <input type="text" class="form-control <?= ($validation->hasError('unit_items')) ? 'is-invalid' : ''; ?>" id="unit_items" name="unit_items" placeholder="Jumlah Barang">
                                                            <div id="id_items" class="invalid-feedback">
                                                                <?= $validation->getError('unit_items'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                        </div>
                        <!-- End Add Form Modal -->

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
                                                <?php $no = 1 + (7 * ($currentPage - 1)); ?>
                                                <?php foreach ($item as $i) : ?>
                                                    <td scope="row"> <?= $no++; ?> </td>
                                                    <td> <?= $i['id_items']; ?> </td>
                                                    <td> <?= $i['name_items']; ?> </td>
                                                    <td> <?= $i['unit_items']; ?> </td>
                                                    <td> <?= $i['color_items']; ?> </td>
                                                    <td>
                                                        <!-- Button Modal Edit -->

                                                        <form action="" data-toggle="modal" data-target="#editModal" href="" class="d-inline">
                                                            <button method="post" type="button" class="btn btn-warning">
                                                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
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
                                        <!-- Pop Up Modal Edit -->
                                        <?php foreach ($item as $i) : ?>
                                            <form action="" method="post">
                                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"> Info Items </h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="" method="POST" enctype="multipart/form-data" method="POST" id="EditModal">
                                                                    <?= csrf_field(); ?>
                                                                    <input type="hidden" id="editId" value="">
                                                                    <div class="form-group">
                                                                        <label for="id_items"> Code Items </label>
                                                                        <input type="text" name="id_items" class="form-control" id="id_items" placeholder="Kode Barang">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name_items"> Name Items </label>
                                                                        <input type="text" name="name_items" class="form-control" id="name_items" placeholder="Nama Barang">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="unit_items"> Unit Items </label>
                                                                        <input type="text" name="unit_items" class="form-control" id="unit_items" placeholder="Jumlah Barang">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="color_items"> Color Items </label>
                                                                        <input type="tel" name="color_items" class="form-control" id="color_items" placeholder="Warna Barang">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <!-- Button Submit Edit Selected Items -->

                                                                <!-- Close Pop Up -->
                                                                <a href="" class="btn btn-secondary" data-dismiss="modal">
                                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-back" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z" />
                                                                    </svg>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </form>
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
<script type="text/javascript">
    $(function() {
        //Take the data from the TR during the event button
        $('table').on('click', 'button.editingTRbutton', function(ele) {
            //the <tr> variable is use to set the parentNode from "ele
            var tr = ele.target.parentNode.parentNode;

            //I get the value from the cells (td) using the parentNode (var tr)
            var id = tr.cells[0].textContent;
            var id_items = tr.cells[1].textContent;
            var name_items = tr.cells[2].textContent;
            var unit_items = tr.cells[3].textContent;
            var color_items = tr.cells[4].textContent;
            var level = tr.cells[5].textContent;

            //Prefill the fields with the gathered information
            $('h5.modal-title').html('Edit Items : ' + id_items);
            $('#id_items').val(id_items);
            $('#name_items').val(name_items);
            $('#unit_items').val(unit_items);
            $('#color_items').val(color_items);

            //If you need to update the form data and change the button link
            $("form#EditModal").attr('action', window.location.href + '/update/' + id);
            $("a#saveModalButton").attr('href', window.location.href + '/update/' + id);
        });
    });
</script>