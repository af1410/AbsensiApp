<?php if (isset($component)) { $__componentOriginale69af54a4a9cbe7f7e26a19e42847b31 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale69af54a4a9cbe7f7e26a19e42847b31 = $attributes; } ?>
<?php $component = App\View\Components\HrdAppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('hrd-app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\HrdAppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('HRD Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <?php echo e(__("You're logged in!")); ?>

                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale69af54a4a9cbe7f7e26a19e42847b31)): ?>
<?php $attributes = $__attributesOriginale69af54a4a9cbe7f7e26a19e42847b31; ?>
<?php unset($__attributesOriginale69af54a4a9cbe7f7e26a19e42847b31); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale69af54a4a9cbe7f7e26a19e42847b31)): ?>
<?php $component = $__componentOriginale69af54a4a9cbe7f7e26a19e42847b31; ?>
<?php unset($__componentOriginale69af54a4a9cbe7f7e26a19e42847b31); ?>
<?php endif; ?><?php /**PATH F:\Absensi App\AbsensiApp\resources\views/hrd/dashboard.blade.php ENDPATH**/ ?>