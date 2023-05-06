<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/admin/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/admin/assets/img/favicon.png">
    <title>Painel Administrativo - Guia Médico Operadora</title>
    <!-- STYLES -->
    <?php include('../partials/styles.php'); ?>
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
    <link href="../assets/admin/css/custom.css?v=1.0.7" rel="stylesheet" />

    <link href="../assets/admin/js/plugins/nice-select/css/nice-select2.css" rel="stylesheet" />
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
                                <div class="col-12">
                                    <p><h6 class="mb-0">Cadastro novo prestador</h6></p>
                                    <p style="margin-top: -15px; font-size: 13px;"><small>Campos com <span style="color: red;">*</span> são obrigatórios</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="row p-3 mt-3">
                                <div class="col-lg-12">
                                    <form class="needs-validation" id="form-new-provider" role="form" novalidate>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Nome / Razão Social <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" name="name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Nome Fantasia</label>
                                                <div class="mb-3">
                                                    <input type="text" name="fantasy-name" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <label>Nome Abreviado</label>
                                                <div class="mb-3">
                                                    <input type="text" name="short-name" class="form-control" disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Cod. Prestador <small style="font-size: 10px; color: #FF512F; font-weight: 400;">ex: CRM</small> <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" name="cod-provider" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Tipo de Pessoa <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <select class="form-control" name="type-people" id="seachable-select-type-people" required>
                                                        <option value="" disabled selected>Selecione...</option>
                                                        <option value="F">Física</option>
                                                        <option value="J">Jurídica</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>CPF / CNPJ <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" name="cpf-cnpj" class="form-control" id="cpf-cnpj" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Tipo Prestador <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <select name="provider" class="form-control" id="seachable-select-provider" required>
                                                        <option value="" disabled selected>Selecione...</option>
                                                        <option value="2">Médico</option>
                                                        <option value="4">Clínica</option>
                                                        <option value="1">Hospital</option>
                                                        <option value="3">Laboratório</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Especialidade <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <select name="specialty" class="form-control" id="seachable-select-specialty" required>
                                                        <option value="" disabled selected>Selecione...</option>
                                                        <option value="noespecialidade">noespecialidade</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Rua <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" name="street" class="form-control" placeholder="" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Número <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" name="number" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Bairro <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <input type="text" name="birth" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Estado <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <select name="state" class="form-control" id="seachable-select-state" required>
                                                        <option value="" disabled selected>Selecione...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Cidade <span style="color: red;">*</span></label>
                                                <div class="mb-3">
                                                    <select name="city" class="form-control" id="seachable-select-city" required>
                                                        <option value="" disabled selected>Selecione...</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <label>Cep <span style="color: red;">*</span> <a href="https://buscacepinter.correios.com.br/app/endereco/index.php" style="font-size: 11px; color: #FF512F; font-weight: 400;" target="_blank">Busca Cep</a></label>
                                                <div class="mb-3">
                                                    <input type="text" name="cep" class="form-control" id="cep" required>
                                                </div>
                                            </div>                                            
                                            <div class="col-lg-2">
                                                <label>Residência?</label>
                                                <div class="mb-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="cb-residence" type="checkbox" value="S" id="rememberMe">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Possui Certificado?</label>
                                                <div class="mb-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="cb-certificate" type="checkbox" value="S" id="rememberMe">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Part. Anvisa</label>
                                                <div class="mb-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="cb-anvisa" type="checkbox" value="S" id="rememberMe">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Pós Graduação?</label>
                                                <div class="mb-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="cb-pos-graduation" type="checkbox" value="S" id="rememberMe">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>Doutorado?</label>
                                                <div class="mb-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="cb-doctorate" type="checkbox" value="S" id="rememberMe">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <label>ISO 9001?</label>
                                                <div class="mb-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" name="cb-iso" type="checkbox" value="S" id="rememberMe">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-end">
                                            <div class="col-lg-2 text-center">
                                                <button type="button" class="btn bg-gradient-green text-white w-100 mt-4 mb-0" id="btn-save">Salvar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
    
    <script src="../assets/admin/js/plugins/jquery.blockUI/jquery.blockUI.js"></script>    
    <script src="../assets/admin/js/plugins/nice-select/js/nice-select2.js"></script>
    <script src="../assets/admin/js/plugins/jquery.inputmask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
    <script src="../assets/admin/js/custom.js"></script>
    <script>        
        $(function() {    
            $(".mn-operation").addClass("active");
            //$('#birth-date').inputmask("99/99/9999");
            //$('#phone').inputmask({"mask": ["(99) 9999-9999", "(99) 99999-9999"], keepStatic: true}); 
            $('#cpf-cnpj').inputmask({"mask": ['999.999.999-99', '99.999.999/9999-99'], keepStatic: true});
            $('#cep').inputmask("99999-999");
        });
        var options = {searchable: true, placeholder: 'Selecione...', searchtext: 'Pesquisar', selectedtext: 'geselecteerd'};
        NiceSelect.bind(document.querySelector("#seachable-select-type-people"), options);
        NiceSelect.bind(document.querySelector("#seachable-select-provider"), options);
        NiceSelect.bind(document.querySelector("#seachable-select-specialty"), options);
        NiceSelect.bind(document.querySelector("#seachable-select-city"), options);
        NiceSelect.bind(document.querySelector("#seachable-select-state"), options);
    </script>
</body>

</html>
