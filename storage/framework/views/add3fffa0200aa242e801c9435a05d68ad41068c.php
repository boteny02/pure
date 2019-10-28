<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Author Name Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('author_name', 'Author Name:'); ?>

    <?php echo Form::text('author_name', null, ['class' => 'form-control']); ?>

</div>

<!-- Publish Year Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('publish_year', 'Publish Year:'); ?>

    <?php echo Form::text('publish_year', null, ['class' => 'form-control']); ?>

</div>

<!-- Publisher Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('publisher', 'Publisher:'); ?>

    <?php echo Form::text('publisher', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('books.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH C:\xampp\htdocs\manageroer\resources\views/books/fields.blade.php ENDPATH**/ ?>