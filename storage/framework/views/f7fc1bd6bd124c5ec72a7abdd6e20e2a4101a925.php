<img src="LogoINTERNO.jpeg" height="80px" class="header__logo">
<ul class="header_menu">
    <li class="header_menu_voce"><a href="<?php echo e(route('home')); ?>" title="Home">Home</a></li>
    <li class="header_menu_voce"><a href="<?php echo e(route('catalog1')); ?>" title="Catalogo">Catalogo</a>
      <ul class="catalogo">
            <?php $__currentLoopData = $topCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="header_menu_voce_catalogo"><a href="<?php echo e(route('catalog2', [$category->catId])); ?>"><?php echo e($category->name); ?></a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul></li>
    <li class="header_menu_voce"><a href="<?php echo e(route('who')); ?>" title="Il nostro profilo aziendale">Chi siamo</a></li>
    <li class="header_menu_voce"><a href="<?php echo e(route('where')); ?>" title="Contattaci">Contatti</a></li>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
        <li><a href="<?php echo e(route('admin')); ?>" class="highlight" title="Home Admin">Admin</a></li>
    <?php endif; ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isUser')): ?>
        <li><a href="<?php echo e(route('user')); ?>" class="highlight" title="Home User">User</a></li>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo e(csrf_field()); ?>

        </form>
    <?php endif; ?>    
    <?php if(auth()->guard()->guest()): ?>
        <li><a href="<?php echo e(route('login')); ?>" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
    <?php endif; ?>
</ul><?php /**PATH C:\xampp\htdocs\ProgTWebLara\resources\views/layouts/_navpublic.blade.php ENDPATH**/ ?>