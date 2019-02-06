<?php echo $__env->make('header.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="page-container">
        <?php echo $__env->make('sidebar.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

        <div class="page-content-wrapper">
            <div class="page-content">
                
            </div>
        </div>

    </div>
    
</div>

<?php echo $__env->make('footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>            

