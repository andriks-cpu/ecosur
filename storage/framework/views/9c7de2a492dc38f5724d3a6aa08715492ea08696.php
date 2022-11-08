
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <?php $__currentLoopData = $spotify; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1"><?php echo e($pasar->titulo); ?></h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2"><?php echo e($pasar->autor); ?></div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="/image/<?php echo e($pasar->image); ?>" /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4"><?php echo e($pasar->contenido); ?></p>
                </section>
<?php echo $__env->make('layouts.estilos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/general.blade.php ENDPATH**/ ?>