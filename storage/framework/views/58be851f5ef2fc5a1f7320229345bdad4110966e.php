

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Artículo </h3>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?php if($errors->any()): ?>
                        <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <span class="badge badge-danger"><?php echo e($error); ?></span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('articulos.update',$articulo->id)); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" name="titulo" class="form-control" value="<?php echo e($articulo->titulo); ?>">
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="autor">Autor</label>
                                        <input type="text" name="autor" class="form-control" value="<?php echo e($articulo->autor); ?>">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-floating">
                                        <label for="contenido">Contenido</label>
                                        <textarea class="form-control" name="contenido" style="height: 100px"><?php echo e($articulo->contenido); ?></textarea>
                                    </div>
                                </div>
                                <!-- Imagen metodo -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Image:</strong>
                                        <input type="file" name="image" class="form-control" placeholder="image">
                                        <img src="/image/<?php echo e($articulo->image); ?>" width="100px">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                                <!-- Fin del metodo de la imagen -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/articulos/editar.blade.php ENDPATH**/ ?>