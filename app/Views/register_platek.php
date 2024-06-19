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
        margin-bottom: 20px;
    }


    .step-button-group .btn {

        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 80px;
        background-color: #e0e0e0;
        color: #343a40;
        font-weight: bold;
    }

    .step-button-group .btn:last-child {
        margin-right: 0;
    }

    .step-button-group .btn i {
        margin-right: 5px;
    }

    .step-button-group .btn.active {
        background-color: #343a40;
        color: white;
    }

    /* Center the card horizontally */
    .carousel-item .card {
        margin: 0 auto;
    }

    /* Center the card vertically */
    .carousel-item .card {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
        /* margin: ; */
    }
</style>

<div class="container">
    <div class="row my-5 d-flex justify-content-center align-items-center">
        <h2 class="text-center mb-4">Formulir Pendaftaran</h2>

        <!-- Step buttons -->
        <div class="step-button-group">
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
                    <div class="card" style="width: 50rem; height:25rem">
                        <div class="card-body">
                            <form id="registerForm" action="<?= base_url('register/save') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No. Telp</label>
                                    <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?= old('no_telp') ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="afiliasi" class="form-label">Afiliasi (Sekolah atau Institusi)</label>
                                    <input type="text" class="form-control" id="afiliasi" name="afiliasi" value="<?= old('afiliasi') ?>" required>
                                </div>

                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="card" style="width: 50rem; height:25rem">
                        <div class="card-body text-center">
                            <h3>Pembayaran</h3>
                            <p>Silahkan lakukan pembayaran sebesar</p>
                            <h4>Rp. 10.000</h4>
                            <p>Metode Pembayaran:</p>

                            <div class="mb-3">
                                <img src="<?= base_url('assets/images/bri.webp') ?>" alt="logo_bri" style="height: 30px; margin-right: 10px;">
                                <strong> 0181-01-019449-53-6 </strong>(Alya Nurul Hanifah)
                                <button class="btn btn-sm btn-outline-secondary" onclick="copyToClipboard('0181-01-019449-53-6')"><i class="fa-regular fa-copy"></i></button>
                            </div>
                            <div class="mb-3">
                                <img src="<?= base_url('assets/images/Shopee.svg.png') ?>" alt="logo_sp" style="height: 30px; margin-right: 10px;">
                                <strong> 085723639723</strong>(alyanurulll)
                                <button class="btn btn-sm btn-outline-secondary" onclick="copyToClipboard('085723639723')"><i class="fa-regular fa-copy"></i></button>
                            </div>
                            <div class="mb-3">
                                <img src="<?= base_url('assets/images/dana.png') ?>" alt="logo_dana" style="height: 30px; margin-right: 10px;">
                                <strong> 085723639723 </strong>(Dian Latifah)
                                <button class="btn btn-sm btn-outline-secondary" onclick="copyToClipboard('085723639723')"><i class="fa-regular fa-copy"></i></button>
                            </div>
                            <div class="mb-3">
                                <img src="<?= base_url('assets/images/gopay.png') ?>" alt="logo_gopay" style="height: 30px; margin-right: 10px;">
                                <strong> 085723639723 </strong>(Alya Nurul Hanifah)
                                <button class="btn btn-sm btn-outline-secondary" onclick="copyToClipboard('085723639723')"><i class="fa-regular fa-copy"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="card" style="width: 50rem; height:25rem">
                        <div class="card-body">
                            <h3>Upload</h3>
                            <p>Silahkan upload bukti pembayaran</p>
                            <div class="mb-3">
                                <label for="bukti_pembayaran" class="form-label">Upload File</label>
                                <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" required>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Navigation buttons -->
        <div class="btn-container">
            <button id="prevBtn" class="btn btn-secondary" style="display: none; ">Prev</button>
            <button id="nextBtn" class="btn btn-primary">Next</button>
            <button id="submitBtn" class="btn btn-primary" style="display: none;" type="submit" form="registerForm">Submit</button>
        </div>
    </div>
</div>

<script>
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