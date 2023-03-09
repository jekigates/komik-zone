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

        .fill {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 219px);
            /* 219px is the combined height of the header and footer */
        }

        .nav-link.btn-outline-primary:hover {
            color: var(--bs-white) !important;
        }

        .navbar .nav-link.active {
            font-weight: bold;
            color: var(--bs-primary);
        }
    </style>
</head>
<body class="bg-primary">
    <header>
        <nav class="navbar navbar-expand-lg bg-white py-4">
            <div class="container">
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
            <div class="container">
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
