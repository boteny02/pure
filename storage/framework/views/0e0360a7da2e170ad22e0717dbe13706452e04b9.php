<div class="table-responsive">
    <table class="table" id="journals-table">
        <thead>
            <tr>
                <th>Author Name</th>
        <th>Publish Year</th>
        <th>Abstract</th>
        <th>Keyword</th>
        <th>Publisher</th>
        <th>Volume</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $journals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $journals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $journals->author_name; ?></td>
            <td><?php echo $journals->publish_year; ?></td>
            <td><?php echo $journals->abstract; ?></td>
            <td><?php echo $journals->keyword; ?></td>
            <td><?php echo $journals->publisher; ?></td>
            <td><?php echo $journals->volume; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['journals.destroy', $journals->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('journals.show', [$journals->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('journals.edit', [$journals->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\manageroer\resources\views/journals/table.blade.php ENDPATH**/ ?>