<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"> Edit Item </h1>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                    <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                    <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z" />
                                </svg>
                                Form Edit Items
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <?= csrf_field(); ?>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="id_items" class="col-sm-2 col-form-label"> Code Items </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="" id="" name="id_items" placeholder="Kode Barang" autofocus>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="name_items" class="col-sm-2 col-form-label"> Name Items </label>
                                                    <div class="col-sm-10">name_items
                                                        <input type="text" class="form-control" value="" id="" name="name_items" placeholder="Nama Barang" autofocus>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="color_items" class="col-sm-2 col-form-label"> Color Items </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="" id="color_items" name="color_items" placeholder="Warna Barang" autofocus>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="unit_items" class="col-sm-2 col-form-label"> Unit Items </label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" value="" id=" unit_items" name="unit_items" placeholder="Jumlah Barang" autofocus>
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <div class="col-sm-1">
                                                        <button type="submit" class="btn btn-primary"> Update </button>
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

            </div>
        </div>
    </div>
</body>