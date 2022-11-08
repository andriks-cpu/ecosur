<li class="side-menus <?php echo e(Request::is('*') ? 'active' : ''); ?>">
    <a class="nav-link" href="<?php echo e(route('home')); ?>">
        <i class=" fas fa-building"></i><span>Inicio</span>
    </a>
    <a class="nav-link" href="<?php echo e(route('usuarios.index')); ?>">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="<?php echo e(route('roles.index')); ?>">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    </a>
    <a class="nav-link" href="articulos">
        <i class="fas fa-thin fa-newspaper"></i><span>Artículos</span>
    </a>
</li><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/layouts/menu.blade.php ENDPATH**/ ?>