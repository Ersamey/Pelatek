<?= $this->extend('layout/master_platek') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col my-5 d-flex justify-content-center align-items-center">
            <div class="card d-flex justify-content-center align-items-center" style="width: 30rem; background-image: url('<?= base_url('assets/images/card.svg') ?>'); background-size: cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Selamat!</h5>
                    <h5 class="card-title">Pendaftaran berhasil disimpan.</h5>
                    <img src="<?= base_url('assets/images/success.svg') ?>" alt="">
                    <p class="card-text">Terima Kasih Telah Mendaftar. Agar tidak tertinggal info selanjutnya, silahkan bergabung dengan grup WhatsApp kami dengan link dibawah:</p>
                    <a href="https://chat.whatsapp.com/Id0nlNvtZoAGrm9RqIAwTm" class="btn btn-primary">Bergabung Grup</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<style>
    .card {
        background-repeat: no-repeat;
        background-position: center;
    }
</style>