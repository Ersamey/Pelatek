<?= $this->extend('layout/master_platek') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="py-5" style="background-color: #FDBB5D;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <strong>
                    <h3>Welcome!</h3>
                </strong>
                <h1 class="display-4 fw-bold">Pelatihan Teknologi</h1>
                <p class="lead">Pendaftaran Pelatihan Teknologi Terdepan</p>
                <a href="#about" class="btn btn-outline-light btn-lg mt-3">Pelajari Lebih Lanjut</a>
                <?php if ($sum < 290) : ?>
                    <a href="/daftar" class="btn btn-outline-light btn-lg mt-3">Daftar</a>
                <?php endif; ?>
            </div>
            <div class="col-md-6 text-center">
                <img src="<?= base_url('assets/images/icon1.svg') ?>" class="img-fluid rounded-circle mt-4" alt="Pelatek Hero Image">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-5" style="background-color: #FFF5DA;">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mb-4">
                <h2 class="text-center mb-4 title fw-bold">About</h2>
                <p class="fw-bold d-inline" style="font-size: 1.2em;">BOOTCAMP PELATIHAN TEKNOLOGI</p>
                <p style="font-size: 1.2em;" class="mt-2 text-justify">
                    Kegiatan Pelatihan Teknologi ini akan diadakan secara <strong>daring</strong> melalui Zoom selama 2 jam 30 menit yang akan mempelajari materi dasar tentang <strong>web development</strong> yang mencakup <strong>HTML, CSS, dan JavaScript</strong>.
                </p>
                <p style="font-size: 1.2em;" class="mt-2 text-justify">
                    Melalui Pelatihan Teknologi dengan tema <span class="font-italic fw-bold">"Creativity through Programming: Learning Web Development"</span> ini, peserta diharapkan dapat <strong>mengenali</strong> dunia programming dan peserta juga akan <strong>mengeksplorasi</strong> banyak hal tentang web development sehingga dapat mengaplikasikannya sendiri <strong>sekreatif</strong> mungkin.
                </p>

            </div>
            <div class="col-md-5">
                <img src="<?= base_url('assets/images/poster.svg') ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5" style="background-color: #FFF5DA;">
    <div class="container">
        <h2 class="text-center mb-4 title fw-bold">Benefit Program</h2>
        <div class="row mt-5 text-white">
            <div class="col-lg-4 mb-4">
                <div class="card py-5 h-100 text-center border-0" style="background: linear-gradient(90deg, #E18A74 0%, #BB6371 54.67%, #655077 100%);">
                    <div class="card-body">
                        <i class="bi bi-award display-4 mb-3"></i>
                        <h5 class="card-title">E-Certificate</h5>
                        <p class="card-text">Dapatkan sertifikat yang diakui industri setelah menyelesaikan pelatihan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card py-5 h-100 text-center border-0" style="background: linear-gradient(90deg, #E18A74 0%, #BB6371 54.67%, #655077 100%);">
                    <div class="card-body">
                        <i class="bi bi-gift-fill display-4 mb-3"></i>
                        <h5 class="card-title">Doorprize</h5>
                        <p class="card-text">Dapatkan doorprize dengan hadiah yang menarik dan bermanfaat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card py-5 h-100 text-center border-0" style="background: linear-gradient(90deg, #E18A74 0%, #BB6371 54.67%, #655077 100%);">
                    <div class="card-body">
                        <i class="bi bi-person-lines-fill display-4 mb-3"></i>
                        <h5 class="card-title">Ilmu yang Bermanfaat</h5>
                        <p class="card-text">Dapatkan ilmu yang bermanfaat langsung dari ahli teknologi terkemuka.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-5" style="background-color: #4D5580;">
    <div class="container text-white py-5">
        <h2 class="text-center mb-4 title fw-bold">Kontak Kami</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <p class="lead">Untuk informasi lebih lanjut, hubungi kami melalui:</p>
                <a href="https://wa.me/6282320514659" class="d-block text-decoration-none text-light" target="_blank">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-whatsapp display-5 me-3" style="font-size: 1.5rem;"></i>
                        <span class="lead"><strong>Adel: +62 823-2051-4659</strong></span>
                    </div>
                </a>
                <a href="https://wa.me/6282260435604" class="d-block mt-3 text-decoration-none text-light" target="_blank">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-whatsapp display-5 me-3" style="font-size: 1.5rem;"></i>
                        <span class="lead"><strong>Ester: +62 822-6043-5604</strong></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- daftar Section -->
<section id="daftar" class="my-5 py-5">
    <div class="container">
        <div class="text-center">
            <?php if ($sum < 290) : ?>
                <h2 class="mb-4">Daftar Sekarang</h2>
                <p class="lead">Segera daftarkan diri Anda untuk mengikuti pelatihan kami. Klik tombol di bawah ini untuk mendaftar.</p>
                <a href="<?= base_url('daftar') ?>" class="btn btn-lg register-button">
                    <i class="bi bi-person-plus-fill me-2"></i> Daftar Sekarang
                </a>
            <?php else : ?>
                <h2 class="mb-4 title fw-bold">Pendaftaran Penuh</h2>
                <p class="lead">Maaf karena kuota telah mencapai batas, anda sudah tidak dapat mendaftar. Silahkan hubungi kontak yang tertera untuk info selengkapnya.</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?= $this->endSection() ?>