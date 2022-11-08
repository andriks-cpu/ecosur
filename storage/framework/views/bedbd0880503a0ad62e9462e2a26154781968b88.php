
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1"><?php echo e($articulo->titulo); ?></h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2"><?php echo e($articulo->autor); ?></div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                 
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded" src="/image/<?php echo e($articulo->image); ?>" /></figure>
                <!-- Post content-->
                <section class="mb-5">
                    <p class="fs-5 mb-4"><?php echo e($articulo->contenido); ?></p>
                </section>
<?php echo $__env->make('layouts.estilos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/show.blade.php ENDPATH**/ ?>