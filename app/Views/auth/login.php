<div class="container-fluid container-lg my-4">
    <div class="row mx-0 justify-content-center">
        <div class="col-xl-6 col-lg-7 col-8 bg-white">
            <div class="row justify-content-center">
                <div class="col-10 rounded p-4">
                    <?php
                        if (!session()->getFlashdata('errors')) {
                            session()->setFlashdata('errors', ['email' => '', 'password' => '']);
                        }
                    ?>

                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger mt-4">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    
                    <form action="<?= base_url('/login') ?>" method="post">
                        <?= csrf_field() ?>

                        <h4 class="fw-bold my-4 text-center">Login To <b class="text-primary">KomikZone</b></h4>
            
                        <div class="mb-4">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" class="form-control <?= session()->getFlashdata('errors')['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="name@example.com" value="">
                            <?php if (session()->getFlashdata('errors')['email']) : ?>
                                <div class="invalid-feedback">
                                    <?= session()->getFlashdata('errors')['email'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
            
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control <?= session()->getFlashdata('errors')['password'] ? 'is-invalid' : '' ?>" id="password" name="password" placeholder="********" value="">
                            <?php if (session()->getFlashdata('errors')['password']) : ?>
                                <div class="invalid-feedback">
                                    <?= session()->getFlashdata('errors')['password'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
            
                        <div class="text-end mb-4">
                            <a href="" class="text-secondary text-decoration-none">Lupa password?</a>
                        </div>
            
                        <button class="btn btn-primary btn-lg w-100 mb-4">Login</button>
            
                        <div class="text-center mb-4">
                            <a href="<?= base_url('register') ?>" class="text-secondary text-decoration-none">Belum punya akun? <b class="text-primary">Register</b></a>
                        </div>
            
                        <button class="btn btn-lg w-100 mb-4 text-white" style="background-color: #db4437;">
                            <i class="bi bi-google me-4"></i>Daftar Dengan Google
                        </button>
                        <button class="btn btn-lg w-100 mb-4 text-white" style="background-color: #3b5998;">
                            <i class="bi bi-facebook me-4"></i>Daftar Dengan Facebook
                        </button>
                        <button class="btn btn-lg w-100 mb-4 text-white" style="background-color: #000000;">
                            <i class="bi bi-apple me-4"></i>Daftar Dengan Apple
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>