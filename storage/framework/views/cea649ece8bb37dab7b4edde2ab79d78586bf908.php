

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 mt-5 mb-5">
                <div class="card d-block gb-light" style="width: 250px;">
                    <img class="card-img-top" src="/image/<?php echo e($articulo->image); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo e($articulo->titulo); ?></h5>
                        <p class="card-text"><?php echo e($articulo->autor); ?></p>
                        <p class="card-text"><?php echo e($articulo->contenido); ?></p>
                        <a class="btn btn-primary" href="<?php echo e(route('articulos.index')); ?>">Ver descripcion completa</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/articulos/show.blade.php ENDPATH**/ ?>