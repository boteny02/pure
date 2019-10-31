<div class="table-responsive">
    <table class="table" id="thesisprojects-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Matric</th>
        <th>Candidate Name</th>
        <th>Grad Year</th>
        <th>Abstract</th>
        <th>Keyword</th>
        <th>Supervisor</th>
        <th>Dept</th>
        <th>Faculty</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $thesisprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thesisprojects): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo $thesisprojects->title; ?></td>
            <td><?php echo $thesisprojects->matric; ?></td>
            <td><?php echo $thesisprojects->candidate_name; ?></td>
            <td><?php echo $thesisprojects->grad_year; ?></td>
            <td><?php echo $thesisprojects->abstract; ?></td>
            <td><?php echo $thesisprojects->keyword; ?></td>
            <td><?php echo $thesisprojects->supervisor; ?></td>
            <td><?php echo $thesisprojects->dept; ?></td>
            <td><?php echo $thesisprojects->faculty; ?></td>
                <td>
                    <?php echo Form::open(['route' => ['thesisprojects.destroy', $thesisprojects->id], 'method' => 'delete']); ?>

                    <div class='btn-group'>
                        <a href="<?php echo route('thesisprojects.show', [$thesisprojects->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="<?php echo route('thesisprojects.edit', [$thesisprojects->id]); ?>" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <?php echo Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]); ?>

                    </div>
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/emmanueljet/Documents/Projects/Laravel/pure/resources/views/thesisprojects/table.blade.php ENDPATH**/ ?>