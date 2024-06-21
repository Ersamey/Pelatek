<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1>Pending</h1>
                    <?php
                    $i = 1;
                    ?>
                    <table>
                        <thead>
                            <tr>
                                <th class="center-content">No</th>
                                <th class="center-content">Nama</th>
                                <th class="center-content">Email</th>
                                <th class="center-content">No Telp</th>
                                <th class="center-content">Afiliasi</th>
                                <th class="center-content">Alamat</th>
                                <th class="center-content">Status</th>
                                <th class="center-content">View</th>
                                <th class="center-content">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($pendaftar as $p) :
                                if ($p['status'] == 0) : 
                                ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td class="justify-content"><?= $p['nama']; ?></td>
                                    <td><?= $p['email']; ?></td>
                                    <td><?= $p['no_telp']; ?></td>
                                    <td><?= $p['afiliasi']; ?></td>
                                    <td><?= $p['alamat']; ?></td>
                                    <td><?php if ($p['status'] == 0) {
                                        echo "Pending";
                                    } else if ($p['status'] == 1) {
                                        echo "ACC";
                                    }?></td> 
                                    <td class="center-content"><a href="<?= base_url(); ?>/admin/view/<?= $p['id']; ?>">Selengkapnya</a></td>
                                    <td class="center-content">
                                        <a href="<?= base_url(); ?>/admin/acc/<?= $p['id']; ?>" class="btn btn-success">Acc</a>
                                        <a href="<?= base_url(); ?>/admin/tunda/<?= $p['id']; ?>" class="btn btn-warning">Tunda</a>
                                        <a href="<?= base_url(); ?>/admin/delete/<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php endif; 
                        endforeach; ?>
                        </tbody>
                    </table>

                </div>
                <!-- /.container-fluid -->
<?= $this->endSection(); ?>