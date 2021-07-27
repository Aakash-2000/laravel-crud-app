
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class='row'>
        <div class='col col-sm-12 col-md-7'>
            <img id="con-img" src="/img/container-img.svg"/>
        </div>
        <div class='col col-sm-12 col-md-5' >
            <div class="card" id = 'head-card' style="width: 18rem;border:none;margin-top:20px;">
                
                <i class="fas fa-book" id='add-i'></i>
                <div class="card-body">
                    <div class="btn-con">
                    
                        <button class='create-btn' ><a href="/library/create">Add new book to database</a></button>
                    </div>
                </div>
                
            </div>
        </div>

    </div>

    <div class='row'>
        
        <?php for($i = 0; $i < count($data); $i++): ?>
            <div class='col col-sm-12 col-md-4'>
            
            <div class="card shadow p-3 mb-3 bg-white rounded" style="width: 100%">
                
                <div class="card-body">
                    <div id="title-icon-con">

                    <h5 class="card-title"><?php echo e($data[$i]['title']); ?></h5>
                    <span>
                        <a href="/library/edit/<?php echo e($data[$i]['id']); ?>">
                            <i class="fas fa-pen" title='edit'></i>
                        </a>
                        <a href="/library/delete/<?php echo e($data[$i]['id']); ?>">
                            <i class="fas fa-trash" title='delete'></i>
                        </a>
                        
                        
                        
                    </span>
                    </div>
                    <p class="card-text"><strong>Genre</strong> : <?php echo e($data[$i]['genre']); ?></p>
                    <p class="card-text"><strong>Author</strong> : <?php echo e($data[$i]['author']); ?></p>
                </div>
            </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laravel\library\resources\views/read.blade.php ENDPATH**/ ?>