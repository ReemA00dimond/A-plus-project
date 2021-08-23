<div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo e(asset('material')); ?>/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      <?php echo e(__('Creative Tim')); ?>

    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item<?php echo e($activePage == 'dashboard' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('home')); ?>">
          <i class="material-icons">dashboard</i>
            <p><?php echo e(__('Dashboard')); ?></p>
        </a>
      </li>
      <li class="nav-item <?php echo e(($activePage == 'profile' || $activePage == 'user-management') ? ' active' : ''); ?>">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="<?php echo e(asset('material')); ?>/img/laravel.svg"></i>
          <p><?php echo e(__('Laravel Examples')); ?>

            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item<?php echo e($activePage == 'profile' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('profile.edit')); ?>">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal"><?php echo e(__('User profile')); ?> </span>
              </a>
            </li>
            <li class="nav-item<?php echo e($activePage == 'user-management' ? ' active' : ''); ?>">
              <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> <?php echo e(__('User Management')); ?> </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item<?php echo e($activePage == 'table' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('table')); ?>">
          <i class="material-icons">content_paste</i>
            <p><?php echo e(__('Table List')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'typography' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('typography')); ?>">
          <i class="material-icons">library_books</i>
            <p><?php echo e(__('Typography')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'icons' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('icons')); ?>">
          <i class="material-icons">bubble_chart</i>
          <p><?php echo e(__('Icons')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'map' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('map')); ?>">
          <i class="material-icons">location_ons</i>
            <p><?php echo e(__('Maps')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'notifications' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('notifications')); ?>">
          <i class="material-icons">notifications</i>
          <p><?php echo e(__('Notifications')); ?></p>
        </a>
      </li>
      <li class="nav-item<?php echo e($activePage == 'language' ? ' active' : ''); ?>">
        <a class="nav-link" href="<?php echo e(route('language')); ?>">
          <i class="material-icons">language</i>
          <p><?php echo e(__('RTL Support')); ?></p>
        </a>
      </li>
      <li class="nav-item active-pro<?php echo e($activePage == 'upgrade' ? ' active' : ''); ?>">
        <a class="nav-link text-white bg-danger" href="<?php echo e(route('upgrade')); ?>">
          <i class="material-icons text-white">unarchive</i>
          <p><?php echo e(__('Upgrade to PRO')); ?></p>
        </a>
      </li>
    </ul>
  </div>
</div>
<?php /**PATH /Users/noufalshehri/Desktop/a-plus/A-plus-project/resources/views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>