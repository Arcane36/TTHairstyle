<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kadeřnictví</title>

        <!-- Fonts -->

        <link rel="stylesheet" type="text/css" href= <?php echo e(URL::asset("css/style.css")); ?> />
        <!-- Styles -->
        
    </head>
    <body id="top">
        <?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH F:\weby\kadernictvi2023\resources\views/default.blade.php ENDPATH**/ ?>