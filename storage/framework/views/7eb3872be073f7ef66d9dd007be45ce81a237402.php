<!-- Title Field -->
<div class="form-group">
    <?php echo Form::label('title', 'Title:'); ?>

    <p><?php echo $books->title; ?></p>
</div>

<!-- Author Name Field -->
<div class="form-group">
    <?php echo Form::label('author_name', 'Author Name:'); ?>

    <p><?php echo $books->author_name; ?></p>
</div>

<!-- Publish Year Field -->
<div class="form-group">
    <?php echo Form::label('publish_year', 'Publish Year:'); ?>

    <p><?php echo $books->publish_year; ?></p>
</div>

<!-- Publisher Field -->
<div class="form-group">
    <?php echo Form::label('publisher', 'Publisher:'); ?>

    <p><?php echo $books->publisher; ?></p>
</div>

<?php /**PATH C:\xampp\htdocs\manageroer\resources\views/books/show_fields.blade.php ENDPATH**/ ?>