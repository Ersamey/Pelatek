<?= $this->extend('layout/master_platek') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col my-5 d-flex justify-content-center align-items-center">
            <div class="card d-flex justify-content-center align-items-center" style="width: 30rem; background-image: url('<?= base_url('assets/images/card.svg') ?>'); background-size: cover;">
                <div class="card-body text-center m-3">
                    <h4 class="card-title fw-bold">Selamat!</h4>
                    <h4 class="card-title fw-bold">Pendaftaran berhasil.</h4>
                    <img src="<?= base_url('assets/images/success.svg') ?>" alt="" class="my-3">
                    <p class="card-text my-3">Terima kasih telah mendaftar. Agar tidak tertinggal info selanjutnya, silakan bergabung dengan grup WhatsApp kami melalui link dibawah ini:</p>
                    <a href="https://chat.whatsapp.com/Id0nlNvtZoAGrm9RqIAwTm" class="btn register-button fw-bold">Bergabung ke Grup</a>
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