<!DOCTYPE html>
<html lang="pt_br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/admin/assets/img/favicon.png">
  <title>Dashboard - Painel Administrativo</title>
  <!-- STYLES -->
  <?php include('partials/styles.php'); ?>
  <link href="assets/admin/css/custom.css?v=1.0.7" rel="stylesheet" />
  <!-- ./STYLES -->
</head>

<body class="g-sidenav-show  bg-gray-100">
  <!-- SIDEBAR -->
  <?php include('partials/sidebar.php'); ?>
  <!-- ./SIDEBAR -->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Guia</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Operadora</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Guia Operadora</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              &nbsp;
            </div>
          </div>
          <?php include('partials/navbar.php'); ?>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid h-100 py-4">

      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total de Especialidades</p>
                    <h5 class="font-weight-bolder mb-0">53</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa-solid fa-cubes-stacked text-lg opacity-10"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total de Médicos</p>
                    <h5 class="font-weight-bolder mb-0">2.300</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="fa-solid fa-user-doctor text-lg opacity-10"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        
      </div>

      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex flex-column h-100">
                    <p class="mb-1 pt-2 text-bold"></p>
                    <h5 class="font-weight-bolder">O Guia Médico</h5>
                    <p class="mb-5">Consulte aqui todos os médicos cooperados, hospitais e clínicas da Unimed Volta Redonda.</p>
                    <a href="https://www.unimedvr.com.br/servicos/php/guiamedico_sem_redirecionar/index-novo-guia-medico.php" target="_blank" class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto">
                      Ver mais
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
                  <div class="bg-gradient-green border-radius-lg h-100">
                    <img src="assets/admin/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                    <div class="position-relative d-flex align-items-center justify-content-center h-100">
                      <img class="w-100 position-relative z-index-2 pt-4" src="assets/admin/img/illustrations/rocket-white.png" alt="rocket">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
              <span class="mask bg-gradient-dark"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Guia Médico Operadora</h5>
                <p class="text-white">Cadastre médicos ou especialidades para o guia médico da operadora.</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="guia-operadora">
                  Cadastrar
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>        
      </div>
        
      <div class="row mt-4">
        <div class="col-lg-6">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
              <span class="mask bg-gradient-primary"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Guia Médico Oncologia</h5>
                <p class="text-white">Cadastre médicos ou especialidades para o guia médico da oncologia.</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                  Cadastrar
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100 p-3">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
              <span class="mask bg-gradient-info"></span>
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
                <h5 class="text-white font-weight-bolder mb-4 pt-2">Guia Médico Hospital</h5>
                <p class="text-white">Cadastre médicos ou especialidades para o guia médico da operadora.</p>
                <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                  Cadastrar
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- FOOTER -->
      <?php include('partials/footer.php'); ?>
      <!-- ./FOOTER -->
    </div>
  </main>
  
  <!-- SCRIPT -->
  <?php include('partials/scripts.php'); ?>
  <script>
    $('.mn-dash').addClass('active');
  </script>  
  <!-- ./SCRIPT -->

</body>

</html>