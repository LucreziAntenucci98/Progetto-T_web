<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-',app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">     
        <title>ZABAuto&Moto | <?php echo $__env->yieldContent('title','Home'); ?></title>
    </head>
    <body>
        
        <header class="header">
        <?php echo $__env->make('layouts/_navpublic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </header>
            

            <!-- end #menu -->
            <div id="page">
                <div id="page-bgtop">
                    <div id="page-bgbtm">
                        <?php echo $__env->yieldContent('content'); ?>
                        <div style="clear: both;">&nbsp;</div>
                    </div>
                </div>
            </div>

            <!-- end #content -->
        <footer class="footer">
                <p>Copyright  -  2020 ZABA</p>
        </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\ProgTWebLara\resources\views/layouts/public.blade.php ENDPATH**/ ?>