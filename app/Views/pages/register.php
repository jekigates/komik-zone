<div class="container-fluid container-lg my-4">
    <div class="row mx-0 justify-content-center">
        <div class="col-xl-6 col-lg-7 col-8 bg-white">
            <div class="row justify-content-center">
                <div class="col-10 rounded p-4">
                    <h4 class="fw-bold my-4 text-center">Register To <b class="text-primary">KomikZone</b></h4>
        
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Nama lengkap</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Name example">
                    </div>

                    <div class="mb-4">
                        <label for="exampleFormControlInput2" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com">
                    </div>
        
                    <div class="mb-4">
                        <label for="exampleFormControlInput3" class="form-label">Password</label>
                        <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="********">
                    </div>
        
                    <button class="btn btn-primary btn-lg w-100 mb-4">Register</button>
        
                    <div class="text-center mb-4">
                        <a href="<?= base_url('login') ?>" class="text-secondary text-decoration-none">Sudah punya akun? <b class="text-primary">Login</b></a>
                    </div>
        
                    <button class="btn btn-lg w-100 mb-4 text-white" style="background-color: #db4437;">
                        <i class="bi bi-google me-4"></i>Login Dengan Google
                    </button>
                    <button class="btn btn-lg w-100 mb-4 text-white" style="background-color: #3b5998;">
                        <i class="bi bi-facebook me-4"></i>Login Dengan Facebook
                    </button>
                    <button class="btn btn-lg w-100 mb-4 text-white" style="background-color: #000000;">
                        <i class="bi bi-apple me-4"></i>Login Dengan Apple
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>