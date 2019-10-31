<div class="table-responsive">
    <table class="table" id="conferences-table">
        <thead>
            <tr>
                <th>Article Title</th>
        <th>Author Name</th>
        <th>Publish Year</th>
        <th>Abstract</th>
        <th>Keyword</th>
        <th>Location</th>
        <th>Organiser</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $conferences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conferences): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $conferences->article_title; ?></td>
            <td><?php echo $conferences->author_name; ?></td>
            <td><?php echo $conferences->publish_year; ?></td>
            <td><?php echo $conferences->abstract; ?></td>
            <td><?php echo $conferences->keyword; ?></td>
            <td><?php echo $conferences->location; ?></td>
            <td><?php echo $conferences->organiser; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['conferences.destroy', $conferences->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('conferences.show', [$conferences->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('conferences.edit', [$conferences->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/emmanueljet/Documents/Projects/Laravel/pure/resources/views/conferences/table.blade.php ENDPATH**/ ?>