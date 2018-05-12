@extends('layouts.app')

@section('title', $post->title)
@section('description', $post->excerpt)

@section('content')

    <div class="row">

        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs author-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        作者：{{ $post->user->name }}
                    </div>
                    <hr>
                    <div class="media">
                        <div align="center">
                            <a href="{{ route('users.show', $post->user->id) }}">
                                <img class="thumbnail img-responsive" src="{{ $post->user->avatar }}" width="300px" height="300px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 post-content">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">
                        {{ $post->title }}
                    </h1>

                    <div class="article-meta text-center">
                        {{ $post->created_at->diffForHumans() }}
                        ⋅
                        <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
                        {{ $post->reply_count }}
                    </div>

                    <div class="post-body">
                        {!! $post->body !!}
                    </div>

                    @can('update', $post)
                        <div class="operate">
                            <hr>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-xs pull-left" role="button">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-default btn-xs pull-left" style="margin-left: 6px">
                                    <i class="glyphicon glyphicon-trash"></i>
                                    删除
                                </button>
                            </form>
                        </div>
                    @endcan

                </div>
            </div>

            {{-- 用户回复列表 --}}
            <div class="panel panel-default post-reply">
                <div class="panel-body">
                    @includeWhen(Auth::check(), 'posts._reply_box', ['post' => $post])
                    @include('posts._reply_list', ['replies' => $post->reply()->with('user')->get()])
                </div>
            </div>
        </div>
    </div>
@stop
