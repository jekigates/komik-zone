<div class="container-fluid container-lg">
    <div id="carouselExampleCaptions" class="carousel slide mt-4">
        <div class="carousel-indicators">
            <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
            ></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('images/banners/one-piece.jpg') ?>" class="d-block w-100 img-fluid carousel-img" alt="" />
                <div class="carousel-caption">
                    <h2 class="fw-bold">One Piece</h2>
                    <p>Bergabunglah dengan Luffy dan kru di petualangan epik mereka!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/banners/my-hero-academia.jpg') ?>" class="d-block w-100 img-fluid carousel-img" alt="" />
                <div class="carousel-caption">
                    <h2 class="fw-bold">My Hero Academia</h2>
                    <p>Teman-teman SMA berjuang memperoleh kekuatan super untuk menjadi pahlawan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('images/banners/spy-x-family.jpg') ?>" class="d-block w-100 img-fluid carousel-img" alt="" />
                <div class="carousel-caption">
                    <h2 class="fw-bold">Spy X Family</h2>
                    <p>Yor adalah mata-mata, Loid adalah pembunuh bayaran, dan Anya adalah psikis.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
