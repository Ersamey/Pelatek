<?= $this->extend('layout/master_platek') ?>

<?= $this->section('content') ?>
<style>
    body {
        background-image: url('assets/images/latar1.svg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .step-button-group {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-bottom: 20px;
        /* background-color: #e0e0e0; */
        border-radius: 10px 10px 0px 0px;
        background: linear-gradient(270deg, #FEB862 20%, #E46C6E 100%);

    }

    .step-button-group .btn {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 20px;
        /* background-color: #e0e0e0; */
        color: black;
        font-weight: bold;
        margin: 5px;
        flex: 1 1 auto;
    }

    .step-button-group .btn.active {
        background-color: rgba(220, 220, 220, 0.5);
        color: white !important;
        opacity: 1;
    }

    .carousel-item .card {
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 100%;
        border-radius: 0px 0px 10px 10px !important;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .btn-container .btn {
        margin: 5px;
    }

    .form-title {
        max-width: 375px !important;
    }
</style>

<div class="container-fluid">
    <div class="row my-5 d-flex justify-content-center align-items-center">
        <div class="col-xl-10">
            <h2 class="text-center mb-4">
                <img src="<?= base_url('assets/images/form-title.svg') ?>" alt="" class="img-fluid form-title" alt="Formulir Pendaftaran">
            </h2>

            <!-- Step buttons -->
            <div class="step-button-group mb-0">
                <button type="button" class="btn active" data-bs-target="#carouselExample" data-bs-slide-to="0" disabled>
                    <i class="fa-solid fa-1"></i> Identitas
                </button>
                <button type="button" class="btn" data-bs-target="#carouselExample" data-bs-slide-to="1" disabled>
                    <i class="fa-solid fa-2"></i> Pembayaran
                </button>
                <button type="button" class="btn" data-bs-target="#carouselExample" data-bs-slide-to="2" disabled>
                    <i class="fa-solid fa-3"></i> Upload
                </button>
            </div>

            <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="card mx-auto" style="max-width: 100%;">
                            <div class="card-body">
                                <form id="registerForm" action="<?= base_url('daftar/save') ?>" method="post" enctype="multipart/form-data" class="m-3">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label fw-bold">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label fw-bold">Alamat</label>
                                        <textarea id="alamat" name="alamat" class="form-control" style="resize: none;"><?= old('alamat') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-bold">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label fw-bold">No. Telp</label>
                                        <input type="tel" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="afiliasi" class="form-label fw-bold">Afiliasi (Sekolah atau Institusi)</label>
                                        <input type="text" class="form-control" id="afiliasi" name="afiliasi" value="<?= old('afiliasi') ?>" required>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="card mx-auto" style="max-width: 100%;">
                            <div class="card-body text-center m-3">
                                <h3>Pembayaran</h3>
                                <p>Silakan lakukan pembayaran sebesar</p>
                                <h4>Rp. 15.000</h4>
                                <p class="mt-3">Metode Pembayaran:</p>
                                <div class="mb-4 align-items-center">
                                    <img src="<?= base_url('assets/images/bri.webp') ?>" alt="logo_bri" style="height: 30px; margin-right: 10px;">
                                    <strong> 0181-01-019449-53-6 </strong>(Alya Nurul Hanifah)
                                    <button class="btn btn-sm btn-outline-secondary ms-2" type="button" onclick="copyToClipboard('018101019449536')"><i class="far fa-copy"></i></button>
                                </div>
                                <div class="mb-4 align-items-center">
                                    <img src="<?= base_url('assets/images/Shopee.svg.png') ?>" alt="logo_sp" style="height: 30px; margin-right: 10px;">
                                    <strong> 085723639723 </strong>(alyanurulll)
                                    <button class="btn btn-sm btn-outline-secondary ms-2" type="button" onclick="copyToClipboard('085723639723')"><i class="far fa-copy"></i></button>
                                </div>
                                <div class="mb-4 align-items-center">
                                    <img src="<?= base_url('assets/images/dana.png') ?>" alt="logo_dana" style="height: 30px; margin-right: 10px;">
                                    <strong> 085723639723 </strong>(Dian Latifah)
                                    <button class="btn btn-sm btn-outline-secondary ms-2" type="button" onclick="copyToClipboard('085723639723')"><i class="far fa-copy"></i></button>
                                </div>
                                <div class="mb-4 align-items-center">
                                    <img src="<?= base_url('assets/images/gopay.png') ?>" alt="logo_gopay" style="height: 30px; margin-right: 10px;">
                                    <strong> 085723639723 </strong>(Alya Nurul Hanifah)
                                    <button class="btn btn-sm btn-outline-secondary ms-2" type="button" onclick="copyToClipboard('085723639723')"><i class="far fa-copy"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="card mx-auto" style="max-width: 100%;">
                            <div class="card-body m-3">
                                <h3>Upload</h3>
                                <p>Silahkan upload bukti pembayaran</p>
                                <div class=" mb-3">
                                    <label for="bukti_pembayaran" class="form-label fw-bold">Upload File</label>
                                    <input type="file" class="form-control " id="bukti_pembayaran" name="bukti_pembayaran" required>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                    <label class="form-check-label">
                                        Saya telah setuju dengan <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Syarat dan Ketentuan</a> yang dicantumkan
                                    </label>
                                </div>
                                </form>
                                <div class="collapse mt-4" id="collapseExample">
                                    <p class="fw-bold text-center">Syarat dan Ketentuan</p>
                                    <p class="text-justify">
                                        Baca ketentuan di bawah ini untuk mempelajari lebih lanjut tentang hak dan tanggung jawab sebagai peserta Bootcamp Pelatihan Teknologi 2024. Peserta memiliki hak untuk mendapat informasi umum berkaitan dengan Pelatihan Teknologi 2024. Di akhir bootcamp akan mendapatkan sertifikat apabila mengikuti seluruh rangkaian sampai akhir. Informasi berupa data peserta yaitu nama, nomor telepon akan digunakan oleh panitia untuk kepentingan keberlangsungan acara. Peserta wajib mengikuti seluruh sesi pelatihan online sesuai jadwal. Hal-hal yang belum dicantumkan disini akan disampaikan kemudian melalui panduan, informasi langsung panitia, email maupun grup aplikasi WhatsApp.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="btn-container">
                <button id="prevBtn" class="btn btn-secondary" style="display: none;" data-bs-target="#carouselExample" data-bs-slide="prev">Previous</button>
                <button id="nextBtn" class="btn register-button" data-bs-target="#carouselExample" data-bs-slide="next">Next</button>
                <button id="submitBtn" class="btn register-button" style="display: none;" type="submit" form="registerForm">Submit</button>
            </div>
        </div>

    </div>
</div>

<script>
    // SnK focus
    var collapseExample = document.getElementById('collapseExample');
    collapseExample.addEventListener('shown.bs.collapse', function() {
        collapseExample.scrollIntoView({
            behavior: 'smooth'
        });
    });
    // SnK focus

    const carousel = document.querySelector('#carouselExample');
    const prevBtn = document.querySelector('#prevBtn');
    const nextBtn = document.querySelector('#nextBtn');
    const submitBtn = document.querySelector('#submitBtn');
    const buttons = document.querySelectorAll('.step-button-group .btn');

    carousel.addEventListener('slid.bs.carousel', function(event) {
        const activeIndex = event.to;

        buttons.forEach((btn, index) => {
            btn.classList.toggle('active', index === activeIndex);
        });

        if (activeIndex === 0) {
            prevBtn.style.display = 'none';
            nextBtn.style.display = 'block';
            submitBtn.style.display = 'none';
        } else if (activeIndex === buttons.length - 2) {
            prevBtn.style.display = 'block';
            nextBtn.style.display = 'block';
            submitBtn.style.display = 'none';
        } else if (activeIndex === buttons.length - 1) {
            prevBtn.style.display = 'block';
            nextBtn.style.display = 'none';
            submitBtn.style.display = 'block';
        } else {
            prevBtn.style.display = 'block';
            nextBtn.style.display = 'block';
            submitBtn.style.display = 'none';
        }
    });

    prevBtn.addEventListener('click', () => {
        carousel.querySelector('.carousel-control-prev').click();
    });

    nextBtn.addEventListener('click', () => {
        carousel.querySelector('.carousel-control-next').click();
    });

    // Function to copy text to clipboard
    function copyToClipboard(text) {
        navigator.clipboard.writeText(text)
            .then(() => {
                console.log('Text copied to clipboard');
                alert('Nomor berhasil disimpan di clipboard');
            })
            .catch(err => {
                console.error('Unable to copy text to clipboard', err);
                alert('Gagal menyimpan nomor di clipboard');
            });
    }
</script>

<?= $this->endSection() ?>