<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Author Name</th>
        <th>Publish Year</th>
        <th>Publisher</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $books): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $books->title; ?></td>
            <td><?php echo $books->author_name; ?></td>
            <td><?php echo $books->publish_year; ?></td>
            <td><?php echo $books->publisher; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['books.destroy', $books->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('books.show', [$books->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('books.edit', [$books->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\xampp\htdocs\manageroer\resources\views/books/table.blade.php ENDPATH**/ ?>