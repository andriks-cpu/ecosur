<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"/>
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e(config('app.name')); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 4.1.1 -->
    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- Ionicons -->
    <link href="//fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/@fortawesome/fontawesome-free/css/all.css')); ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/iziToast.min.css')); ?>">
    <link href="<?php echo e(asset('assets/css/sweetalert.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(asset('assets/css/select2.min.css')); ?>" rel="stylesheet" type="text/css"/>

<?php echo $__env->yieldContent('page_css'); ?>
<!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('web/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/components.css')); ?>">
    <?php echo $__env->yieldContent('page_css'); ?>

    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>

<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto" action="#">
    <ul class="navbar-nav mr-3">
        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
    </ul>
</form>

        </nav>
        
        <div class="main-sidebar main-sidebar-postion">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <!-- Main Content -->
        <div class="main-content">
             <!-- Inicio del contenido -->
        <div class="card-body mt-5">
        
                            
                            <div class="card-deck">
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card1.jpg')); ?>"  alt=""/>
                                  <div class="card-body">
                                    <h5 class="card-title"> </h5>
                                    <p class="card-text">Un repaso a la vida de Roy J. Glauber nos invita a reflexionar sobre la ética de la disuasión nuclear..</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card2.jpg')); ?>"  alt=""/>
                                  <div class="card-body">
                                    <h5 class="card-title">Mutaciones cuánticas</h5>
                                    <p class="card-text">El efecto túnel podría modificart el ADN.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card3.jpg')); ?>"  alt=""/>
                                  <div class="card-body">
                                    <h5 class="card-title">La industra petrolera</h5>
                                    <p class="card-text">Así manipulan las empresas gasísticas y petroíferas lo que se enseña en las aulas y libros de texto de preescolar.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card4.jpg')); ?>"  alt=""/>
                                    <div class="card-body">
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">Así manipulan las empresas gasísticas y petrolíferas lo que se enseña en las aulas y libros de texto de  preescolar.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            <div class="card-deck">
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card5.jpg')); ?>"  alt=""/>
                                    <div class="card-body">
                                      <h5 class="card-title">La percepcion de la sociedad</h5>
                                      <p class="card-text">En el juego de bolos, para derribar todos los palos de un solo tiro debemos aprovechar el lubricante que cubre el suelo de la pista, la asimetría.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card6.jpg')); ?>"  alt=""/>
                                    <div class="card-body">
                                      <h5 class="card-title">Las particulas fuera de nuestro alcance</h5>
                                      <p class="card-text"> Si la materia invisible del cosmos no aparece en los experimentos de detección directa ni en los colisionadores de partículas, tendremos que estudiarla.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card7.jpg')); ?>"  alt=""/>
                                    <div class="card-body">
                                      <h5 class="card-title">Los relieves del mundo</h5>
                                      <p class="card-text">Una imagen fabulosa de estas moléculas obtenida con métodos caseros.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card8.jpg')); ?>"  alt=""/>
                                    <div class="card-body">
                                      <h5 class="card-title">La radiacion del planeta</h5>
                                      <p class="card-text">Es un tumor frecuente que afecta mucho más a unas poblaciones y regiones que a otras.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                                 
                                <br><br>
                                 <div class="card-deck">
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card9.jpg')); ?>"  alt=""/>
                                  <div class="card-body">
                                    <h5 class="card-title">Las aves</h5>
                                    <p class="card-text">Según diversos estudios, las aves prestarían más atención a los sutiles matices acústicos, imperceptibles para el oído humano, que a las melodías que nos cautivan.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card10.jpg')); ?>"  alt=""/>
                                  <div class="card-body">
                                    <h5 class="card-title">La falta de recursos primarios</h5>
                                    <p class="card-text">La alimentación ideal debería ser nutritiva y no poner en riesgo los recursos naturales. En estos momentos se intenta dilucidar cuál sería la mejor dieta en países como Kenia o Suecia..</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card10.jpg')); ?>"  alt=""/>
                                  <div class="card-body">
                                    <h5 class="card-title">La falta de recursos primarios</h5>
                                    <p class="card-text">La alimentación ideal debería ser nutritiva y no poner en riesgo los recursos naturales. En estos momentos se intenta dilucidar cuál sería la mejor dieta en países como Kenia o Suecia..</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                  </div>
                                </div>
                                <div class="card">
                                <img  src="<?php echo e(asset('img/card8.jpg')); ?>"  alt=""/>
                                    <div class="card-body">
                                      <h5 class="card-title">La radiacion del planeta</h5>
                                      <p class="card-text">Es un tumor frecuente que afecta mucho más a unas poblaciones y regiones que a otras.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            </div>
                        </div>
                        <!-- Fin del cuerpo -->
           
        </div>
     



        <footer class="main-footer">
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </footer>
    </div>
</div>



</body>
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/sweetalert.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/iziToast.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.nicescroll.js')); ?>"></script>

<!-- Template JS File -->
<script src="<?php echo e(asset('web/js/stisla.js')); ?>"></script>
<script src="<?php echo e(asset('web/js/scripts.js')); ?>"></script>
<script src="<?php echo e(mix('assets/js/profile.js')); ?>"></script>
<script src="<?php echo e(mix('assets/js/custom/custom.js')); ?>"></script>
<?php echo $__env->yieldContent('page_js'); ?>
<?php echo $__env->yieldContent('scripts'); ?>
<script>
    let loggedInUser =<?php echo json_encode(\Illuminate\Support\Facades\Auth::user(), 15, 512) ?>;
    let loginUrl = '<?php echo e(route('login')); ?>';
    const userUrl = '<?php echo e(url('users')); ?>';
    // Loading button plugin (removed from BS4)
    (function ($) {
        $.fn.button = function (action) {
            if (action === 'loading' && this.data('loading-text')) {
                this.data('original-text', this.html()).html(this.data('loading-text')).prop('disabled', true);
            }
            if (action === 'reset' && this.data('original-text')) {
                this.html(this.data('original-text')).prop('disabled', false);
            }
        };
    }(jQuery));
</script>
</html><?php /**PATH C:\xampp\htdocs\roles_permisos\resources\views/welcome.blade.php ENDPATH**/ ?>