<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pelatek'24</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- bootstrap cdn -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        td.justify-content {
            text-align: justify;
        }

        .center-content {
            text-align: center;
        }

        .navbar-nav {
            background-color: #FDBB5D;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pelatek-24</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <?php $currentSegment = service('uri')->getSegment(1); ?>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= ($currentSegment == 'admin') ? 'active' : ''; ?>">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                <!-- Pendaftar semua bisa di acc, di tunda atau di delete. klik selengkapnya untuk view foto-->
            </li>

            <!-- Nav Item - ACC -->
            <li class="nav-item <?= ($currentSegment == 'acc') ? 'active' : ''; ?>">
                <a class="nav-link" href="/acc">
                    <i class="fas fa-fw fa-check"></i>
                    <span>Acc</span></a>
            </li>

            <!-- Nav Item - Tunda -->
            <li class="nav-item <?= ($currentSegment == 'pending') ? 'active' : ''; ?>">
                <a class="nav-link" href="/pending">
                    <i class="fas fa-fw fa-hourglass-start"></i>
                    <span>Tunda</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="ms-auto">
                        <button class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>
                            Logout
                        </button>
                    </div>
                </nav>
                <!-- End of Topbar -->

                <?= $this->renderSection('content'); ?>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kemakom 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.myTable').DataTable({
                responsive: true
            });
        });
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
    
    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>