<div class="container-fluid container-lg mb-4">
    <div class="row pt-4">
        <div class="col-12">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url() ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="">Manhwa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reality Quest</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mx-0 bg-white rounded">
        <div class="col-12 p-4">
            <div class="row mb-4">
                <div class="col-6 chapter-col" onclick="window.location.href = '<?= site_url('baca_komik') ?>'">
                    <div class="border rounded p-3">
                        <p class="mb-1">Chapter Awal</p>
                        <h6 class="mb-0 fw-bold text-primary">Chapter 1</h6>
                    </div>
                </div>
                <div class="col-6 chapter-col" onclick="window.location.href = '<?= site_url('baca_komik') ?>'">
                    <div class="border rounded p-3 text-end">
                        <p class="mb-1">Chapter Akhir</p>
                        <h6 class="mb-0 fw-bold text-primary">Chapter 76</h6>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-4 col-12">
                    <img src="<?= base_url('images/comics/kill-the-hero.jpg') ?>" alt="Kill The Hero" class="img-fluid rounded w-100" style="height: 24rem; object-fit: cover;">
                </div>
                <div class="col-lg-8 col-12 d-flex justify-content-between flex-column">
                    <div>
                        <h2 class="fw-bold mb-0 mt-4 mt-lg-0">Kill The Hero</h1>
                        <div class="mb-4 text-warning fs-3 stars">
                            <span class="bi bi-star-fill"></span>
                            <span class="bi bi-star-fill"></span>
                            <span class="bi bi-star-fill"></span>
                            <span class="bi bi-star"></span>
                            <span class="bi bi-star"></span>
                        </div>
                    </div>
                    <table>
                        <tbody>
                            <tr class="pb-2">
                                <th class="text-primary pb-3">Type</th>
                                <th class="text-primary pb-3">:</th>
                                <td class="pb-3 text-secondary">Manhwa</td>
                            </tr>
                            <tr class="pb-2">
                                <th class="text-primary pb-3">Status</th>
                                <th class="text-primary pb-3">:</th>
                                <td class="pb-3 text-secondary">Ongoing</td>
                            </tr>
                            <tr>
                                <th class="text-primary pb-3">Type</th>
                                <th class="text-primary pb-3">:</th>
                                <td class="pb-3 text-secondary">Action, Adventure, Comedy, Manhwa, Shounen</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-between">
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-heart me-1"></i>
                            <span>Tambahkan Favorit</span>
                        </button>

                        <div>
                            <a href="" class="btn text-white me-2" style="background-color: #1DA851">
                                <i class="bi bi-whatsapp fs-5"></i>
                            </a>
                            <a href="" class="btn text-white me-2" style="background-color: #2D4373">
                                <i class="bi bi-facebook fs-5"></i>
                            </a>
                            <a href="" class="btn text-white" style="background-color: #2795E9">
                                <i class="bi bi-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h4 class="fw-bold">Sinopsis</h4>
                    <p class="text-secondary mb-0">Karena ancaman pengganggu sekolah untuk memberinya item game, Ha Do-wan, shuttle game yang tidak beruntung, meninggal setelah bermain game sepanjang malam selama seminggu. Saat dia meninggal, dia dibangkitkan kembali ke ruang kelas satu minggu sebelum dia meninggal… Semuanya sama seperti hari itu. Satu-satunya hal yang berubah adalah mengambang di depannya! Apa? Gunakan keterampilan permainan yang saya mainkan sejauh ini untuk mengalahkan pengganggu?!?!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid container-lg mb-4">
    <div class="row mx-0 bg-white rounded">
        <div class="col-12 px-4 pt-4 mb-4" style="padding-bottom: calc(var(--bs-gutter-x) * .5);">
            <h4 class="fw-bold mb-2">Daftar Chapter</h4>

            <div class="row">
                <div class="col-lg-6 col-12 chapter-col" style="padding-top: calc(var(--bs-gutter-x) * .5); padding-bottom: calc(var(--bs-gutter-x) * .5);" onclick="window.location.href = '<?= site_url('baca_komik') ?>'">
                    <div class="border rounded p-3 d-flex justify-content-between">
                        <div>
                            <h6 class="mb-1 fw-bold text-primary">Chapter 76</h6>
                            <p class="mb-0 text-secondary">4 jam lalu</p>
                        </div>
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-download me-1"></i>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 chapter-col" style="padding-top: calc(var(--bs-gutter-x) * .5); padding-bottom: calc(var(--bs-gutter-x) * .5);" onclick="window.location.href = '<?= site_url('baca_komik') ?>'">
                    <div class="border rounded p-3 d-flex justify-content-between">
                        <div>
                            <h6 class="mb-1 fw-bold text-primary">Chapter 75</h6>
                            <p class="mb-0 text-secondary">10 jam lalu</p>
                        </div>
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-download me-1"></i>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 chapter-col" style="padding-top: calc(var(--bs-gutter-x) * .5); padding-bottom: calc(var(--bs-gutter-x) * .5);" onclick="window.location.href = '<?= site_url('baca_komik') ?>'">
                    <div class="border rounded p-3 d-flex justify-content-between">
                        <div>
                            <h6 class="mb-1 fw-bold text-primary">Chapter 74</h6>
                            <p class="mb-0 text-secondary">16 jam lalu</p>
                        </div>
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-download me-1"></i>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 col-12 chapter-col" style="padding-top: calc(var(--bs-gutter-x) * .5); padding-bottom: calc(var(--bs-gutter-x) * .5);" onclick="window.location.href = '<?= site_url('baca_komik') ?>'">
                    <div class="border rounded p-3 d-flex justify-content-between">
                        <div>
                            <h6 class="mb-1 fw-bold text-primary">Chapter 73</h6>
                            <p class="mb-0 text-secondary">24 jam lalu</p>
                        </div>
                        <button class="btn btn-outline-primary">
                            <i class="bi bi-download me-1"></i>
                            <span>Download</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>