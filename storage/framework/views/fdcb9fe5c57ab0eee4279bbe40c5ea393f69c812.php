<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My Protfolio</title>

  <!-- Favicons -->

  
  <link href="<?php echo e(asset('assets/img/favicon.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('assets/img/apple-touch-icon.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('assets/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
  

</head>
<body>
  
  <div class="spinner-wrapper">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>



<?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<main id="main">
<?php echo $__env->yieldContent('content'); ?>

</main>

<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <script src="<?php echo e(asset('assets/vendor/purecounter/purecounter_vanilla.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/typed.js/typed.umd.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\LaravelPHPWithOstad\Assignments\Module9\PersonalProtfolio\resources\views/Layout/app.blade.php ENDPATH**/ ?>