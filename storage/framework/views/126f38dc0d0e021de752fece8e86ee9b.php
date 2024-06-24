<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - AAK</title>
    <!-- base:css -->
    <link rel="stylesheet" href="https://themewagon.github.io/celestialAdmin-free-admin-template/vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="https://themewagon.github.io/celestialAdmin-free-admin-template/vendors/css/vendor.bundle.base.css">
    <!-- endinject --> 
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="https://themewagon.github.io/celestialAdmin-free-admin-template/vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="https://themewagon.github.io/celestialAdmin-free-admin-template/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link href="<?php echo e(asset('frontend/assets/images/logo/favicon.png')); ?>" rel="shortcut icon">
  </head>
  <body>
    <div class="container-scroller">
        <?php echo $__env->make('admin/layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
          <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
          <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-delete-outline"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options" id="sidebar-light-theme">
              <div class="img-ss rounded-circle bg-light border mr-3"></div>
              Light
            </div>
            <div class="sidebar-bg-options selected" id="sidebar-dark-theme">
              <div class="img-ss rounded-circle bg-dark border mr-3"></div>
              Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
              <div class="tiles success"></div>
              <div class="tiles warning"></div>
              <div class="tiles danger"></div>
              <div class="tiles primary"></div>
              <div class="tiles info"></div>
              <div class="tiles dark"></div>
              <div class="tiles default border"></div>
            </div>
          </div>
        </div>
        <!-- partial -->
        <?php echo $__env->make('admin/layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
              <!-- partial -->
          </div>
          <!-- main-panel ends -->

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/js/off-canvas.js"></script>
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/js/hoverable-collapse.js"></script>
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/js/template.js"></script>
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/js/settings.js"></script>
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/js/todolist.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="https://themewagon.github.io/celestialAdmin-free-admin-template/js/dashboard.js"></script>
    <!-- End custom js for this page-->

  </body>
</html><?php /**PATH C:\laragon\www\arvitaagusk\resources\views/admin/layouts/template.blade.php ENDPATH**/ ?>