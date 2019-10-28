<div class="table-responsive">
    <table class="table" id="videos-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Murl</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $videos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $videos->title; ?></td>
            <td><?php echo $videos->murl; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['videos.destroy', $videos->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('videos.show', [$videos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('videos.edit', [$videos->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\manageroer\resources\views/videos/table.blade.php ENDPATH**/ ?>