<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Inicio</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">
                                    
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                <?php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                ?>
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span><?php echo e($cant_usuarios); ?></span></h2>
                                                <p class="m-b-0 text-right"><a href="<?php echo e(route('usuarios.index')); ?>" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                <?php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                ?>
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span><?php echo e($cant_roles); ?></span></h2>
                                                <p class="m-b-0 text-right"><a href="<?php echo e(route('roles.index')); ?>" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>       
                                    
                                   
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Artículos</h5>                                               
                                                <?php
                                                 use App\Models\Articulo;
                                                $cant_articulos = Articulo::count();                                                
                                                ?>
                                                <h2 class="text-right"><i class="fa fa-newspaper f-left"></i><span><?php echo e($cant_articulos); ?></span></h2>
                                                <p class="m-b-0 text-right"><a href="<?php echo e(route('articulos.index')); ?>" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/home.blade.php ENDPATH**/ ?>