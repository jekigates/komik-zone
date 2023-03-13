<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">
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
    </style>
</head>
<body>
    <h1><?= esc($title) ?></h1>