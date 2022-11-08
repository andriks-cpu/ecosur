
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
                    <a class="btn btn-info" href="<?php echo e(route('vista.show',$articulo->id)); ?>">Mostrar</a>
                    
                   

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
<?php echo $__env->make('layouts.estilos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/vista/index.blade.php ENDPATH**/ ?>