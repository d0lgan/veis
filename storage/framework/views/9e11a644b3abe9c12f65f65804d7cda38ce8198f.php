

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo e(LaravelLocalization::getCurrentLocale()); ?>

    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="dropdown-item" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, NULL, [], TRUE)); ?>">
            <?php echo e($properties['native']); ?>

        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH W:\domains\veisshop\resources\views/layouts/site/language.blade.php ENDPATH**/ ?>