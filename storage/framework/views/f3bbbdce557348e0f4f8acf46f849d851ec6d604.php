<script>

</script>
<?php if(count($errors) > 0): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            toastr.error('<?php echo e($error); ?>');
        </script>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      
<?php endif; ?>

<?php if(session('success')): ?>
    <script>
        toastr.success("<?php echo session('success'); ?>");
    </script>
<?php endif; ?>
<?php if(session('info')): ?>
    <script>
        toastr.info("<?php echo session('info'); ?>");
    </script>
<?php endif; ?>

<?php if(session('warning')): ?>
    <script>
        toastr.warning("<?php echo session('warning'); ?>");
    </script>
<?php endif; ?>

<?php if(session('error')): ?>
    <script>
        toastr.error("<?php echo session('error'); ?>");
    </script>
<?php endif; ?>
