<!-- Name Field -->
<div class="form-group">
    <?php echo Form::label('name', 'Name:'); ?>

    <p><?php echo $user->name; ?></p>
</div>

<!-- Email Field -->
<div class="form-group">
    <?php echo Form::label('email', 'Email:'); ?>

    <p><?php echo $user->email; ?></p>
</div>

<!-- Email Verified At Field -->
<div class="form-group">
    <?php echo Form::label('email_verified_at', 'Email Verified At:'); ?>

    <p><?php echo $user->email_verified_at; ?></p>
</div>

<!-- Password Field -->
<div class="form-group">
    <?php echo Form::label('password', 'Password:'); ?>

    <p><?php echo $user->password; ?></p>
</div>

<!-- Remember Token Field -->
<div class="form-group">
    <?php echo Form::label('remember_token', 'Remember Token:'); ?>

    <p><?php echo $user->remember_token; ?></p>
</div>

<?php /**PATH /home/emmanueljet/Documents/Projects/Laravel/pure/resources/views/users/show_fields.blade.php ENDPATH**/ ?>