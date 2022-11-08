<form class="form-inline mr-auto" action="#">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
</form>
<ul class="navbar-nav navbar-right">

    <?php if(\Illuminate\Support\Facades\Auth::user()): ?>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown"
               class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="<?php echo e(asset('img/logo.png')); ?>"
                     class="rounded-circle mr-1 thumbnail-rounded user-thumbnail ">
                <div class="d-sm-none d-lg-inline-block">
                    Hola, <?php echo e(\Illuminate\Support\Facades\Auth::user()->first_name); ?></div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    Bienvenido, <?php echo e(\Illuminate\Support\Facades\Auth::user()->name); ?></div>
                <a class="dropdown-item has-icon edit-profile" href="#" data-id="<?php echo e(\Auth::id()); ?>">
                    <i class="fa fa-user"></i>Editar perfil</a>
                <a class="dropdown-item has-icon" data-toggle="modal" data-target="#changePasswordModal" href="#" data-id="<?php echo e(\Auth::id()); ?>"><i
                            class="fa fa-lock"> </i>Cambiar contraseña</a>
                <a href="<?php echo e(url('logout')); ?>" class="dropdown-item has-icon text-danger"
                   onclick="event.preventDefault(); localStorage.clear();  document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a>
                <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" class="d-none">
                    <?php echo e(csrf_field()); ?>

                </form>
            </div>
        </li>
    <?php else: ?>
        
    <?php endif; ?>
</ul>
<?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/layouts/header.blade.php ENDPATH**/ ?>