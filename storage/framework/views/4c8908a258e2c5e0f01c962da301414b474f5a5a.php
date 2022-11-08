

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Roles</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('crear-rol')): ?>
                            <a class="btn btn-warning" href="<?php echo e(route('roles.create')); ?>"> Nuevo</a>
                            <?php endif; ?>
                            
                            <table class="table table-striped mt-2">
                                <thead style="background-color: #A64812;">
                                <th style="color: #fff;">Rol</th>
                                <th style="color: #fff;">Acciones</th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($role->name); ?></td>
                                        <!-- Boton de editar -->
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('editar-rol')): ?>
                                            <a class="btn btn-primary" href="<?php echo e(route('roles.edit', $role->id)); ?>"> Editar</a>
                                        
                                            <?php endif; ?>

                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('borrar-rol')): ?>
                                            <?php echo Form::open(['method' => 'DELETE', 'route' =>['roles.destroy', $role->id], 'style'=>'display:inline']); ?>

                                                <?php echo Form::submit('Borrar', ['class' => 'btn btn-danger']); ?>   
                                            <?php echo Form::close(); ?>

                                            <?php endif; ?>                                    
                                        </td>


                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>

                            </table>

                            <!-- Centramos la pagina a la derecha -->
                            <div class="pagination justify-contend-end">
                                <?php echo $roles->links(); ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/roles/index.blade.php ENDPATH**/ ?>