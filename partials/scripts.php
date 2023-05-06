<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="./assets/admin/js/core/popper.min.js"></script>
<script src="./assets/admin/js/core/bootstrap.min.js"></script>
<script src="./assets/admin/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/admin/js/plugins/smooth-scrollbar.min.js"></script>  
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
<script src="./assets/admin/js/ui-dashboard.js?v=1.0.7"></script>