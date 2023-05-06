<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/admin/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/admin/assets/img/favicon.png">
    <title>Painel Administrativo - Guia Médico Operadora</title>
    <!-- STYLES -->
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/admin/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/78bb8de998.js" crossorigin="anonymous"></script>
    <link href="../assets/admin/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/admin/css/ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="../assets/admin/css/custom.css?v=1.0.7" rel="stylesheet" />
    <!-- ./STYLES -->
</head>

<body class="g-sidenav-show  bg-gray-100">
    <!-- SIDEBAR -->
    <?php include('../partials/sidebar.php'); ?>
    <!-- ./SIDEBAR -->
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a>
                        </li>
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Guia</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Operadora</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Guia da Operadora</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            &nbsp;
                        </div>
                    </div>
                    <?php include('../partials/navbar.php'); ?>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h6 class="mb-0">Cadastros</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="btn btn-success btn-sm-custom text-uppercase mb-0"
                                        href="/front-painel-guia-medico-base/guia-operadora/novo.php"><i class="fas fa-plus"></i>&nbsp;&nbsp; Prestador</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive row p-3 mt-3">
                                <table id="example" class="table col-12 table-striped align-items-center mb-0"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Nome</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Nome Fantasia</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Tipo Prestador</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td class="align-middle text-sm"></td>
                                            <td></td>   
                                            <td class="align-middle"></td>
                                        </tr>                                           
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FOOTER -->
            <?php include('../partials/footer.php'); ?>
            <!-- ./FOOTER -->
        </div>
    </main>

    <!-- SCRIPT -->
    <!--   Core JS Files   -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../assets/admin/js/core/popper.min.js"></script>
    <script src="../assets/admin/js/core/bootstrap.min.js"></script>
    <script src="../assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/admin/js/plugins/smooth-scrollbar.min.js"></script>  
    <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
        damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/admin/js/ui-dashboard.js?v=1.0.7"></script>
    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('.mn-operation').addClass('active');
        $('#example').DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json'
            },
        });
    </script>
    <!-- ./SCRIPT -->

</body>

</html>
