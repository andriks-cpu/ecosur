

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Artículos</h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                       


                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-articulo')): ?>
                        <a class="btn btn-warning" href="<?php echo e(route('articulos.create')); ?>">Nuevo</a>
                        <?php endif; ?>

                        <table class="table table-striped mt-2">
                            <thead style="background-color:#A64812">
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Título</th>
                                <th style="color:#fff;">Autor</th>
                                <th style="color:#fff;">Contenido</th>
                                <th style="color:#fff;">Imagen</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td style="display: none;"><?php echo e($articulo->id); ?></td>
                                    <td><?php echo e($articulo->titulo); ?></td>
                                    <td><?php echo e($articulo->autor); ?></td>
                                    <td><?php echo e($articulo->contenido); ?></td>
                                    <!-- Metodo de la imagen -->
    
                                    <td> <img src="/image/<?php echo e($articulo->image); ?>" width="100px"></td>
                                    <td>
                                    
                                        <form action="<?php echo e(route('articulos.destroy',$articulo->id)); ?>" method="POST">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-articulo')): ?>
                                           
                                            <a class="btn btn-info" href="<?php echo e(route('articulos.edit',$articulo->id)); ?>">Editar</a>
                                            
                                            <a class="btn btn-info" href="<?php echo e(route('articulos.show',$articulo->id)); ?>">Mostrar</a>
                                          
                                            <?php endif; ?>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-articulo')): ?>
                                            <button type="submit" class="btn btn-danger">Borrar</button>
                                            <?php endif; ?>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                        <!-- Ubicamos la paginacion a la derecha -->
                        <div class="pagination justify-content-end">
                            <?php echo $articulos->links(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/articulos/index.blade.php ENDPATH**/ ?>