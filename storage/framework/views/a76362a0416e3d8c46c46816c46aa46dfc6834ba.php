<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
  <div class="container">
    <div class="navbar-wrapper">
      <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><?php echo e($title); ?></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="sr-only">Toggle navigation</span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
      <span class="navbar-toggler-icon icon-bar"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo e(route('home')); ?>" class="nav-link">
            <i class="material-icons">dashboard</i> <?php echo e(__('Dashboard')); ?>

          </a>
        </li>
        <li class="nav-item<?php echo e($activePage == 'register' ? ' active' : ''); ?>">
          <a href="<?php echo e(route('register')); ?>" class="nav-link">
            <i class="material-icons">person_add</i> <?php echo e(__('Register')); ?>

          </a>
        </li>
        <li class="nav-item<?php echo e($activePage == 'login' ? ' active' : ''); ?>">
          <a href="<?php echo e(route('login')); ?>" class="nav-link">
            <i class="material-icons">fingerprint</i> <?php echo e(__('Login')); ?>

          </a>
        </li>
        <li class="nav-item ">
          <a href="<?php echo e(route('profile.edit')); ?>" class="nav-link">
            <i class="material-icons">face</i> <?php echo e(__('Profile')); ?>

          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar --><?php /**PATH /Users/noufalshehri/Desktop/a-plus/A-plus-project/resources/views/layouts/navbars/navs/guest.blade.php ENDPATH**/ ?>