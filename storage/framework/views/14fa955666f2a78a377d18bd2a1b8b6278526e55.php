

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center"> </h3>

                            <a class="btn btn-warning" href="<?php echo e(route('usuarios.create')); ?>">Nuevo</a>
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #A64812;">
                                <th style="color: #fff;">ID</th>
                                <th style="color: #fff;">Nombre</th>
                                <th style="color: #fff;">Correo</th>
                                <th style="color: #fff;">Rol</th>
                                <th style="color: #fff;">Acciones</th>


                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($usuario->id); ?></td>
                                        <td><?php echo e($usuario->name); ?></td>
                                        <td><?php echo e($usuario->email); ?></td>
                                        <td>
                                            <?php if(!empty($usuario->getRoleNames())): ?>
                                                <?php $__currentLoopData = $usuario->getRoleNames(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rolName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <h5><span class="badge badge-dark"><?php echo e($rolName); ?></span></h5>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </td>
                                        <!-- Botones -->
                                        <td>
                                        <a class="btn btn-info" href="<?php echo e(route('usuarios.edit', $usuario->id)); ?>">Editar</a>

                                         
                                        <!-- Boton con html collective -->
                                        <?php echo Form::open(['method'=> 'DELETE', 'route'=> ['usuarios.destroy', $usuario->id], 'style'=>'display:inline' ]); ?>

                                            <?php echo Form::submit('Borrar', ['class'=> 'btn btn-danger']); ?>

                                        <?php echo Form::close(); ?>

                                        </td>


                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>
                            


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/usuarios/index.blade.php ENDPATH**/ ?>