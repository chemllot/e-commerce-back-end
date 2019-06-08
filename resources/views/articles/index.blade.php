@extends('layout.app')

@section('content')
    <a href="{{ route('articles.create') }}" style="padding:5px;border:1px dashed gray;">
        + New Article
    </a>

    @foreach ($articles as $article)
        <div style="border:1px solid gray;margin-top:20px;padding:20px;">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>{{ $article->title }}</h2>
                    <span>{{ $article->name }}</span>
                </div>

                <div class="panel-body">
                    <p>{{ $article->content }}</p>
                </div>
            </div>

            <a href="{{ route('articles.edit', $article->id ) }}">Edit</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: inline-block;">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            {{--<form action="{{ route('posts.create', $article->id) }}" method="post" style="display: inline-block;">--}}
                {{--{{ csrf_field() }}--}}
                {{--{{ method_field('POST') }}--}}
                {{--<button type="submit" class="btn btn-info">Post</button>--}}
            {{--</form>--}}

        </div>
    @endforeach
    @foreach($postsComments as $post)
        <div class="media">
            <div class="media-left" style="width: 110px">
                <a href="#">
                    <img class="media-object image-size" src="{{ URL::asset('images/head01.jpg') }}" alt="...">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">{{ $post->username }}</h4>
                <p>{{ $post->comments }}</p>
            </div>
        </div>
    @endforeach
@stop

<style>
    .image-size{
        width: 85%;
    }
</style>
