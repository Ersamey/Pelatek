<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <h2 class="text-dark fw-bold mb-4">Pendaftaran Diterima</h2>
    <?php
    $i = 1;
    ?>
    <div class="table-responsive table mt-2 shadow rounded" role="grid" aria-describedby="dataTable_info" style="padding: 40px 30px; background-color:white;">
        <table class="myTable table table-striped table-bordered">
            <thead>
                <tr>
                    <th class="center-content">No</th>
                    <th class="center-content">Nama</th>
                    <th class="center-content">Email</th>
                    <th class="center-content">No Telp</th>
                    <th class="center-content">Afiliasi</th>
                    <th class="center-content">Alamat</th>
                    <th class="center-content text-center">Status</th>
                    <th class="center-content text-center">View</th>
                    <th class="center-content text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pendaftar as $p) :
                    if ($p['status'] == 1) :  ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td class="justify-content"><?= $p['nama']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['no_telp']; ?></td>
                            <td><?= $p['afiliasi']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td class="text-center">
                                <?php if ($p['status'] == 0) : ?>
                                    <h5 class="d-inline"> <span class="badge text-bg-secondary">Pending</span></h5>
                                <?php endif; ?>
                                <?php if ($p['status'] == 1) : ?>
                                    <h5 class="d-inline"> <span class="badge text-bg-success">ACC</span></h5>
                                <?php endif; ?>
                            </td>
                            <!-- <td class="center-content"><a href="<?= base_url(); ?>/admin/view/<?= $p['id']; ?>">Selengkapnya</a></td> -->
                            <!-- Trigger Modal Detail -->
                            <td class="center-content"><a href="#" data-bs-toggle="modal" data-bs-target="#view<?= $p['id']; ?>">Selengkapnya</a></td>
                            <td class="center-content">
                                <?php if ($p['status'] != 1) : ?>
                                    <a href="<?= base_url(); ?>/admin/acc/<?= $p['id']; ?>" class="btn btn-success">Acc</a>
                                <?php endif; ?>
                                <?php if ($p['status'] != 0) : ?>
                                    <a href="<?= base_url(); ?>/admin/pending/<?= $p['id']; ?>" class="btn btn-warning">Tunda</a>
                                <?php endif; ?>
                                <!-- Trigger Modal Hapus -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    Delete
                                </button>

                            </td>
                        </tr>

                        <!-- Modal Detail Pendaftaran -->
                        <div class="modal fade" id="view<?= $p['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="view<?= $p['id']; ?>Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="view<?= $p['id']; ?>Label">Detail Pendaftaran</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img class="card-img-top img-fluid" src="/images/<?= $p['pembayaran']; ?>" alt="<?= $p['pembayaran']; ?>">
                                        <h5 class="card-title d-inline me-1"><?= $p['nama']; ?></h5>
                                        <?php if ($p['status'] == 0) : ?>
                                            <h5 class="d-inline"> <span class="badge text-bg-secondary">Pending</span></h5>
                                        <?php endif; ?>
                                        <?php if ($p['status'] == 1) : ?>
                                            <h5 class="d-inline"> <span class="badge text-bg-success">ACC</span></h5>
                                        <?php endif; ?>
                                        <p class="card-text m-0" style="font-size: 1.05em;">Email: <?= $p['email']; ?></p>
                                        <p class="card-text m-0" style="font-size: 1.05em;">Nomor Telepon: <?= $p['no_telp']; ?></p>
                                        <p class="card-text m-0" style="font-size: 1.05em;">Instansi: <?= $p['afiliasi']; ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <?php if ($p['status'] != 1) : ?>
                                            <a href="<?= base_url(); ?>/admin/acc/<?= $p['id']; ?>" class="btn btn-success">Acc</a>
                                        <?php endif; ?>
                                        <?php if ($p['status'] != 0) : ?>
                                            <a href="<?= base_url(); ?>/admin/pending/<?= $p['id']; ?>" class="btn btn-warning">Tunda</a>
                                        <?php endif; ?>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php endif;
                endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- Modal Hapus Data-->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModalLabel">Hapus Data?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Anda akan menghapus data ini.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?= base_url(); ?>/admin/delete/<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection(); ?>