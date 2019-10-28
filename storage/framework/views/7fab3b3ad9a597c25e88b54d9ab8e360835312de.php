<li class="<?php echo e(Request::is('books*') ? 'active' : ''); ?>" style="border-color: #0C9A9A; border: groove;float: left; ">
    <a href="<?php echo route('books.index'); ?>"><i class="fa fa-edit"></i><span>Books</span></a>
</li>
<button class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="<?php echo route('books.index'); ?>"><i class="fa fa-edit"></i><span>Books</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="<?php echo route('conferences.index'); ?>"><i class="fa fa-edit"></i><span>Conferences</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="<?php echo route('journals.index'); ?>"><i class="fa fa-edit"></i><span>Journals</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="<?php echo route('thesisprojects.index'); ?>"><i class="fa fa-edit"></i><span>Thesis/ projects</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="<?php echo route('videos.index'); ?>"><i class="fa fa-edit"></i><span>Videos</span></a></a></button>


<li class="<?php echo e(Request::is('conferences*') ? 'active' : ''); ?>">
    <a href="<?php echo route('conferences.index'); ?>"><i class="fa fa-edit"></i><span>Conferences</span></a>
</li>

<li class="<?php echo e(Request::is('journals*') ? 'active' : ''); ?>">
    <a href="<?php echo route('journals.index'); ?>"><i class="fa fa-edit"></i><span>Journals</span></a>
</li>

<li class="<?php echo e(Request::is('thesisprojects*') ? 'active' : ''); ?>">
    <a href="<?php echo route('thesisprojects.index'); ?>"><i class="fa fa-edit"></i><span>Thesis/ projects</span></a>
</li>

<li class="<?php echo e(Request::is('videos*') ? 'active' : ''); ?>">
    <a href="<?php echo route('videos.index'); ?>"><i class="fa fa-edit"></i><span>Videos</span></a>
</li>

<?php /**PATH C:\xampp\htdocs\manageroer\resources\views/layouts/links.blade.php ENDPATH**/ ?>