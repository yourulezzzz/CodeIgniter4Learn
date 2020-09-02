<body class="bg-gradient-primary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                    <?php if (session()->getFlashdata('pesan')) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= session()->getFlashdata('pesan'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <form action="/users/regis" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : ''; ?>" value="<?= old('name'); ?>" id="name" name="name" placeholder="Full Name" autofocus>
                                            <div id="name" class="invalid-feedback">
                                                <?= $validation->getError('name'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control <?= ($validation->hasError('user_email')) ? 'is-invalid' : ''; ?>" value="<?= old('user_email'); ?>" id="user_email" name="user_email" placeholder="Email Address">
                                            <div id="user_email" class="invalid-feedback">
                                                <?= $validation->getError('user_email'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password">
                                                <div id="password" class="invalid-feedback">
                                                    <?= $validation->getError('password'); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control <?= ($validation->hasError('password2')) ? 'is-invalid' : ''; ?>" id="password2" name="password2" placeholder="Repeat Password">
                                                <div id="password2" class="invalid-feedback">
                                                    <?= $validation->getError('password2'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register Account
                                        </button>
                                    </form>
                                    <hr />
                                    <div class="text-center">
                                        <a class="small" href="">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('/'); ?>">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>