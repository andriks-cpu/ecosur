

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Roles</h3>
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
                                    <span aria-hidden="true"> &times; </span>
                                </button>

                            </div>
                            <?php endif; ?>

                            <?php echo Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]); ?>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Nombre del rol</label>
                                        <?php echo Form::text('name', null, array('class'=>'form-control')); ?>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <di v class="form-group">
                                        <label for="">Permisos para este rol</label>
                                        <br/>
                                        <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label><?php echo e(Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name'))); ?>

                                            <?php echo e($value->name); ?>

                                        </label>
                                        <br/>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Guardar</button>

                              

                            <?php echo Form::close(); ?>


                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/roles/editar.blade.php ENDPATH**/ ?>