<li class="{{ Request::is('books*') ? 'active' : '' }}" style="border-color: #0C9A9A; border: groove;float: left; ">
    <a href="{!! route('books.index') !!}"><i class="fa fa-edit"></i><span>Books</span></a>
</li>
<button class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="{!! route('books.index') !!}"><i class="fa fa-edit"></i><span>Books</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="{!! route('conferences.index') !!}"><i class="fa fa-edit"></i><span>Conferences</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="{!! route('journals.index') !!}"><i class="fa fa-edit"></i><span>Journals</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="{!! route('thesisprojects.index') !!}"><i class="fa fa-edit"></i><span>Thesis/ projects</span></a></button>
<button type="button" class="btn btn-primary btn-lg" style="color: #9fcdff;> <a href="{!! route('videos.index') !!}"><i class="fa fa-edit"></i><span>Videos</span></a></a></button>


<li class="{{ Request::is('conferences*') ? 'active' : '' }}">
    <a href="{!! route('conferences.index') !!}"><i class="fa fa-edit"></i><span>Conferences</span></a>
</li>

<li class="{{ Request::is('journals*') ? 'active' : '' }}">
    <a href="{!! route('journals.index') !!}"><i class="fa fa-edit"></i><span>Journals</span></a>
</li>

<li class="{{ Request::is('thesisprojects*') ? 'active' : '' }}">
    <a href="{!! route('thesisprojects.index') !!}"><i class="fa fa-edit"></i><span>Thesis/ projects</span></a>
</li>

<li class="{{ Request::is('videos*') ? 'active' : '' }}">
    <a href="{!! route('videos.index') !!}"><i class="fa fa-edit"></i><span>Videos</span></a>
</li>

