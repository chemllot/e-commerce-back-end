@extends('layout.app')

@section('content')
    <form action="{{ route('articles.store') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-sm-2 control-label" for="title">Title</label>
            <div class="col-sm-10">
                <input id="title" type="text" name="title" class="form-control" placeholder="Text input" value="{{ old('title') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="name">Author</label>
            <div class="col-sm-10">
                <input id="name" type="text" name="name" class="form-control" placeholder="Text input" value="{{ old('name') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="category">Category</label>
            <div class="col-sm-10">
                <input id="category" type="text" name="category" class="form-control" placeholder="Text input" value="{{ old('category') }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" for="content">content</label>
            <div class="col-sm-10">
                <textarea id="content" type="text-area" name="content" class="form-control" placeholder="Text input" value="{{ old('content') }}"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-info">OK</button>
    </form>
@stop
