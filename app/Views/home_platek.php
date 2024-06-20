<?= $this->extend('layout/master_platek') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="text-white py-5" style="background-color: #FDBB5D;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <strong>
                    <h3>Welcome!</h3>
                </strong>
                <h1 class="display-4 fw-bold">Pelatihan Teknologi</h1>
                <p class="lead">Pendaftaran Pelatihan Teknologi Terdepan</p>
                <a href="#about" class="btn btn-outline-light btn-lg mt-3">Pelajari Lebih Lanjut</a>
                <?php
                if ($sum < 200) : ?>
                    <a href="/register" class="btn btn-outline-light btn-lg mt-3">Daftar</a>
                <?php endif; ?>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?= base_url('assets/images/icon1.svg') ?>" class="img-fluid rounded-circle shadow-lg mt-4" alt="Pelatek Hero Image">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <h2 class="text-center text-lg-start mb-4">Deskripsi Kegiatan</h2>
                <p class="lead">Pelatek adalah program pelatihan teknologi yang bertujuan untuk meningkatkan kemampuan teknis peserta di berbagai bidang teknologi terkini. Kami menawarkan berbagai program pelatihan yang dirancang untuk membantu peserta mencapai tujuan karir mereka.</p>
            </div>
            <div class="col-lg-6 mb-4">
                <h2 class="text-center text-lg-start mb-4">Timeline Kegiatan</h2>
                <img src="<?= base_url('assets/images/timeline.svg') ?>" alt="Pelatek Timeline Image">

            </div>
            <div class="col-lg-6 mb-4">
                <p>Jumlah pendaftar saat ini : <?= $sum; ?></p>
                <p>Kuota tersisa <?= $sisa = 200 - $sum; ?> orang lagi</p>
            </div>
        </div>
</section>

<!-- Features Section -->
<section id="features" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Benefit Program</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center shadow border-0">
                    <div class="card-body">
                        <i class="bi bi-laptop display-4 text-primary mb-3"></i>
                        <h5 class="card-title">Pelatihan Online</h5>
                        <p class="card-text">Belajar dari mana saja dengan modul online kami yang mudah diakses.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center shadow border-0">
                    <div class="card-body">
                        <i class="bi bi-person-lines-fill display-4 text-primary mb-3"></i>
                        <h5 class="card-title">Mentor Berpengalaman</h5>
                        <p class="card-text">Dapatkan bimbingan langsung dari para ahli teknologi terkemuka.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center shadow border-0">
                    <div class="card-body">
                        <i class="bi bi-award display-4 text-primary mb-3"></i>
                        <h5 class="card-title">Sertifikat</h5>
                        <p class="card-text">Dapatkan sertifikat yang diakui industri setelah menyelesaikan pelatihan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Kontak Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <p class="lead">Untuk informasi lebih lanjut, hubungi kami melalui:</p>
                <a href="https://wa.me/6282260435604" class="d-block mb-3 text-decoration-none text-dark" target="_blank">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-whatsapp display-5 text-success me-2" style="font-size: 1.5rem;"></i>
                        <span class="lead"><strong>Ester: +62 822-6043-5604</strong></span>
                    </div>
                </a>
                <a href="https://wa.me/6281211806375" class="d-block text-decoration-none text-dark" target="_blank">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-whatsapp display-5 text-success me-2" style="font-size: 1.5rem;"></i>
                        <span class="lead"><strong>Meisya: +62 812-1180-6375</strong></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Register Section -->
<section id="register" class="bg-light py-5">
    <div class="container">
        <div class="text-center">
            <?php
            if ($sum < 200) : ?>
                <h2 class="mb-4">Daftar Sekarang</h2>
                <p class="lead">Segera daftarkan diri Anda untuk mengikuti pelatihan kami. Klik tombol di bawah ini untuk mendaftar.</p>
                <a href="<?= base_url('register') ?>" class="btn btn-primary btn-lg">
                    <i class="bi bi-person-plus-fill me-2"></i> Daftar Sekarang
                </a>
            <?php
            else : ?>
                <h2 class="mb-4">Pendaftaran Penuh</h2>
                <p class="lead">Maaf karena kuota telah mencapai batas, anda sudah tidak dapat mendaftar. Silahkan hubungi kontak yang tertera untuk info selengkapnya.</p>

                <a href="#" class="btn btn-warning btn-lg disabled">
                    Kuota Penuh
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>