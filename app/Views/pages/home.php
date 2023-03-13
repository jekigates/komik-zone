<div class="container-fluid container-lg mt-4">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
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
            <div class="carousel-item active" data-bs-interval="5000" onclick="window.location.href = '<?= site_url('detail_komik') ?>'">
                <img src="<?= base_url('images/banners/one-piece.jpg') ?>" class="d-block w-100 img-fluid carousel-img" alt="One Piece" />
                <div class="carousel-caption">
                    <h2 class="fw-bold">One Piece</h2>
                    <p>Bergabunglah dengan Luffy dan kru di petualangan epik mereka!</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000" onclick="window.location.href = '<?= site_url('detail_komik') ?>'">
                <img
                    src="<?= base_url('images/banners/my-hero-academia.jpg') ?>"
                    class="d-block w-100 img-fluid carousel-img"
                    alt="My Hero Academia"
                />
                <div class="carousel-caption" onclick="window.location.href = '<?= site_url('detail_komik') ?>'">
                    <h2 class="fw-bold">My Hero Academia</h2>
                    <p>Teman-teman SMA berjuang memperoleh kekuatan super untuk menjadi pahlawan.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="<?= base_url('images/banners/spy-x-family.jpg') ?>" class="d-block w-100 img-fluid carousel-img" alt="Spy X Family" />
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

<div class="container-fluid container-lg my-4">
    <div class="row mx-0 bg-white rounded">
        <div class="col-12 px-4 pt-4" style="padding-bottom: calc(var(--bs-gutter-x) * 0.5)">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h4 class="fw-bold mb-0">Komik Update Terbaru</h4>
                <a href="<?= site_url('daftar_komik') ?>" class="btn btn-primary">Lihat Lebih</a>
            </div>

            <div class="row">
                <div
                    class="col-lg-6 col-12 comic-col"
                    style="padding-top: calc(var(--bs-gutter-x) * 0.5); padding-bottom: calc(var(--bs-gutter-x) * 0.5)"
                    onclick="window.location.href = '<?= site_url('detail_komik') ?>'"
                >
                    <div class="d-flex border rounded p-2">
                        <img
                            src="<?= base_url('images/comics/reality-quest/poster.jpg') ?>"
                            alt="Reality Quest"
                            class="img-fluid rounded"
                            style="width: 7rem; height: 10rem"
                        />
                        <div style="width: calc(100% - 7rem)" class="ps-3 d-flex justify-content-between flex-column">
                            <h5 class="fw-bold mb-0">Reality Quest</h5>
                            <div class="mb-2 text-warning fs-5 stars">
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star"></span>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 76</a>
                                    <p class="mb-2 text-secondary">30 menit lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 75</a>
                                    <p class="mb-2 text-secondary">Mar 4, 2023</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 74</a>
                                    <p class="mb-0 text-secondary">Feb 25, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-12 comic-col"
                    style="padding-top: calc(var(--bs-gutter-x) * 0.5); padding-bottom: calc(var(--bs-gutter-x) * 0.5)"
                    onclick="window.location.href = '<?= site_url('detail_komik') ?>'"
                >
                    <div class="d-flex border rounded p-2">
                        <img
                            src="<?= base_url('images/comics/kill-the-hero.jpg') ?>"
                            alt="Kill The Hero"
                            class="img-fluid rounded"
                            style="width: 7rem; height: 10rem"
                        />
                        <div style="width: calc(100% - 7rem)" class="ps-3 d-flex justify-content-between flex-column">
                            <h5 class="fw-bold mb-0">Kill The Hero</h5>
                            <div class="mb-2 text-warning fs-5 stars">
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star"></span>
                                <span class="bi bi-star"></span>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 128</a>
                                    <p class="mb-2 text-secondary">4 jam lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 127</a>
                                    <p class="mb-2 text-secondary">Mar 2, 2023</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 126</a>
                                    <p class="mb-0 text-secondary">Feb 18, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-12 comic-col"
                    style="padding-top: calc(var(--bs-gutter-x) * 0.5); padding-bottom: calc(var(--bs-gutter-x) * 0.5)"
                    onclick="window.location.href = '<?= site_url('detail_komik') ?>'"
                >
                    <div class="d-flex border rounded p-2">
                        <img
                            src="<?= base_url('images/comics/one-piece.jpg') ?>"
                            alt="One Piece"
                            class="img-fluid rounded"
                            style="width: 7rem; height: 10rem"
                        />
                        <div style="width: calc(100% - 7rem)" class="ps-3 d-flex justify-content-between flex-column">
                            <h5 class="fw-bold mb-0">One Piece</h5>
                            <div class="mb-2 text-warning fs-5 stars">
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 1077</a>
                                    <p class="mb-2 text-secondary">1 hari lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 1076</a>
                                    <p class="mb-2 text-secondary">1 hari lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 1075</a>
                                    <p class="mb-0 text-secondary">Feb 16, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-12 comic-col"
                    style="padding-top: calc(var(--bs-gutter-x) * 0.5); padding-bottom: calc(var(--bs-gutter-x) * 0.5)"
                    onclick="window.location.href = '<?= site_url('detail_komik') ?>'"
                >
                    <div class="d-flex border rounded p-2">
                        <img
                            src="<?= base_url('images/comics/edens-zero.jpg') ?>"
                            alt="Edens Zero"
                            class="img-fluid rounded"
                            style="width: 7rem; height: 10rem"
                        />
                        <div style="width: calc(100% - 7rem)" class="ps-3 d-flex justify-content-between flex-column">
                            <h5 class="fw-bold mb-0">Edens Zero</h5>
                            <div class="mb-2 text-warning fs-5 stars">
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star"></span>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 230</a>
                                    <p class="mb-2 text-secondary">14 jam lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 239</a>
                                    <p class="mb-2 text-secondary">14 jam lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 228</a>
                                    <p class="mb-0 text-secondary">Feb 22, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-12 comic-col"
                    style="padding-top: calc(var(--bs-gutter-x) * 0.5); padding-bottom: calc(var(--bs-gutter-x) * 0.5)"
                    onclick="window.location.href = '<?= site_url('detail_komik') ?>'"
                >
                    <div class="d-flex border rounded p-2">
                        <img
                            src="<?= base_url('images/comics/spy-x-family.jpg') ?>"
                            alt="Spy X Family"
                            class="img-fluid rounded"
                            style="width: 7rem; height: 10rem"
                        />
                        <div style="width: calc(100% - 7rem)" class="ps-3 d-flex justify-content-between flex-column">
                            <h5 class="fw-bold mb-0">Spy X Family</h5>
                            <div class="mb-2 text-warning fs-5 stars">
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star"></span>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 76</a>
                                    <p class="mb-2 text-secondary">Mar 6, 2023</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 75</a>
                                    <p class="mb-2 text-secondary">Feb 6, 2023</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 74</a>
                                    <p class="mb-0 text-secondary">Jan 23, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-12 comic-col"
                    style="padding-top: calc(var(--bs-gutter-x) * 0.5); padding-bottom: calc(var(--bs-gutter-x) * 0.5)"
                    onclick="window.location.href = '<?= site_url('detail_komik') ?>'"
                >
                    <div class="d-flex border rounded p-2">
                        <img
                            src="<?= base_url('images/comics/kanojo-okarishimasu.jpg') ?>"
                            alt="Kanojo Okarishimasu"
                            class="img-fluid rounded"
                            style="width: 7rem; height: 10rem"
                        />
                        <div style="width: calc(100% - 7rem)" class="ps-3 d-flex justify-content-between flex-column">
                            <h5 class="fw-bold mb-0">Kanojo Okarishimasu</h5>
                            <div class="mb-2 text-warning fs-5 stars">
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star-fill"></span>
                                <span class="bi bi-star"></span>
                                <span class="bi bi-star"></span>
                            </div>

                            <div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 253</a>
                                    <p class="mb-2 text-secondary">18 jam lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 252</a>
                                    <p class="mb-2 text-secondary">3 hari lalu</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="" class="text-decoration-none text-primary">Chapter 251</a>
                                    <p class="mb-0 text-secondary">Mar 5, 2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
