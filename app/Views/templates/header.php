<!doctype html>
<html>
<head>
    <title>KomikZone</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('icons/bootstrap-icons.css') ?>">
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('../fonts/Poppins-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Poppins';
            src: url('../fonts/Poppins-Bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        .nav-link.btn-outline-primary:hover {
            color: var(--bs-white) !important;
        }

        .navbar .nav-link.active {
            font-weight: bold;
            color: var(--bs-primary);
        }

        .carousel-img {
            height: 28rem;
            object-fit: cover;
            border-radius: 0.75rem;
        }

        .carousel-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1);
        }

        .carousel-caption {
            display: flex;
            justify-content: center; /* center horizontally */
            align-items: center; /* center vertically */
            flex-direction: column; /* stack content vertically */
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.3);
            color: #fff;
            border-radius: 0.75rem;
        }

        .carousel-caption p {
            padding-left: 4rem;
            padding-right: 4rem;
        }
    </style>
</head>
<body style="background-color: #F2F2F2">
    <header>
        <nav class="navbar navbar-expand-lg bg-white py-4">
            <div class="container-fluid container-lg">
                <a class="navbar-brand bg-primary text-white px-3 rounded" href="#">KomikZone</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0">
                        <li class="nav-item me-lg-4">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Daftar Komik</a>
                        </li>
                        <li class="nav-item ms-lg-4">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Cari..." aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">
                                <span class="bi bi-search"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg bg-white border-top">
            <div class="container-fluid container-lg">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item me-lg-2 mb-3 mb-lg-0">
                            <a class="nav-link btn btn-primary text-white px-3" aria-current="page" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-outline-primary text-primary px-3" href="#">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
