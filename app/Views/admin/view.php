<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pembayaran</title>

    <!-- Link to Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .card-img-top {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        body {
            background-color: #FFF5DA;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card mx-auto" style="width: 40rem;">
            <img class="card-img-top img-fluid" src="/images/<?= $pendaftar['pembayaran']; ?>" alt="<?= $pendaftar['pembayaran']; ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $pendaftar['nama'];?> (<?php if($pendaftar['status'] == 0) { echo "Pending"; } else{
                                        echo "ACC";
                                    }?> ) </h5>
                <p class="card-text"><?= $pendaftar['email']; ?></p>
                <p class="card-text"><?= $pendaftar['no_telp']; ?></p>
                <p class="card-text"><?= $pendaftar['afiliasi']; ?></p>
                <a href="<?= base_url(); ?>/admin/acc/<?= $pendaftar['id']; ?>" class="btn btn-success">Acc</a>
                <a href="<?= base_url(); ?>/admin/pending/<?= $pendaftar['id']; ?>" class="btn btn-warning">Tunda</a>
                <a href="<?= base_url(); ?>/admin/delete/<?= $pendaftar['id']; ?>" class="btn btn-danger">Delete</a>
                                    
            </div>
        </div>
    </div>

    <!-- Link to Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
