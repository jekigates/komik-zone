<div class="container-fluid container-lg my-4">
    <div class="row mx-0 justify-content-center">
        <div class="col-xl-6 col-lg-7 col-8 bg-white">
            <div class="row justify-content-center">
                <div class="col-10 rounded p-4">
                    <?php
                        $errors = session()->getFlashdata('errors');
                        if (!session()->getFlashdata('errors')) {
                            // metode get
                            $errors['account'] = '';
                            $errors['email'] = '';
                            $errors['password'] = '';
                        }  else {
                            // metode post
                            $errors['account'] ??= '';
                            $errors['email'] ??= '';
                            $errors['password'] ??= '';
                        }
                        session()->destroy();
                    ?>

                    <?php if ($errors['account']) : ?>
                        <div class="alert alert-danger mt-4">
                            <?= $errors['account'] ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="<?= base_url('/login') ?>" method="post" class="needs-validation" novalidate>
                        <?= csrf_field() ?>

                        <h4 class="fw-bold my-4 text-center">Login To <b class="text-primary">KomikZone</b></h4>
            
                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="name@example.com" value="" required>
                            <?php if ($errors['email']) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['email'] ?>
                                </div>
                            <?php else: ?>
                                <div class="invalid-feedback">
                                    Email tidak boleh kosong.
                                </div>
                            <?php endif; ?>
                        </div>
            
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="********" value="" minlength="8" required>
                            <?php if ($errors['password']) : ?>
                                <div class="invalid-feedback">
                                    <?= $errors['password'] ?>
                                </div>
                            <?php else: ?>
                                <div class="invalid-feedback">
                                    Password harus mengandung setidaknya 8 karakter.
                                </div>
                            <?php endif; ?>
                        </div>
            
                        <div class="text-end mb-4">
                            <a href="" class="text-secondary text-decoration-none">Lupa password?</a>
                        </div>
            
                        <button class="btn btn-primary btn-lg w-100 mb-4" type="submit">Login</button>
            
                        <div class="text-center mb-4">
                            <a href="<?= base_url('register') ?>" class="text-secondary text-decoration-none">Belum punya akun? <b class="text-primary">Register</b></a>
                        </div>
            
                        <button type="button" class="btn btn-lg w-100 mb-4 text-white" style="background-color: #db4437;">
                            <i class="bi bi-google me-4"></i>Daftar Dengan Google
                        </button>
                        <button type="button" class="btn btn-lg w-100 mb-4 text-white" style="background-color: #3b5998;">
                            <i class="bi bi-facebook me-4"></i>Daftar Dengan Facebook
                        </button>
                        <button type="button" class="btn btn-lg w-100 mb-4 text-white" style="background-color: #000000;">
                            <i class="bi bi-apple me-4"></i>Daftar Dengan Apple
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>