<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="" src="<?php echo e(asset('img/logo.png')); ?>" width="65" height=""
                    class="d-inline-block align-text-top">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo e(route('login')); ?>">Acceder</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <div class="card h-100">
                <img src="/image/<?php echo e($articulo->image); ?>" height="200px" class="card-img-top" alt="..naiz.">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($articulo->titulo); ?></h5>
                    <p class="card-text"><?php echo e($articulo->autor); ?></p>

                    <p class="card-text"><?php echo e(Illuminate\Support\Str::of ($articulo->contenido)->words(20)); ?></p>
                    <a class="btn btn-info" href="<?php echo e(route('show',$articulo->id)); ?>">Mostrar</a>



                </div>
            </div>
        </div>

        <?php echo csrf_field(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!-- Ubicamos la paginacion a la derecha -->
    <div class="pagination justify-content-end">
        <?php echo $articulos->links(); ?>

    </div>
</div>

<?php echo $__env->make('layouts.estilos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/index.blade.php ENDPATH**/ ?>