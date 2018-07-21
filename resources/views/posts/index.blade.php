@extends('layouts.app')
@section('title', isset($category) ?  $category->name  : '文章列表')

@section('content')
    <div class="ui main container">
        <div class="ui grid">
            <div class="ten wide column">
                <div class="panel-heading">
                    <ul class="nav nav-pills">
                        <li class="{{ active_class(( ! if_query('order', 'recent') )) }}"><a
                                    href="{{ Request::url() }}?order=default">最后回复</a></li>
                        <li class="{{ active_class(if_query('order', 'recent')) }}"><a
                                    href="{{ Request::url() }}?order=recent">最新发布</a></li>
                    </ul>
                </div>
                @if (isset($category))
                    <div class="alert alert-info" role="alert">
                        {{ $category->name }} : {{ $category->info }}
                    </div>
                @endif
                @include('posts.post_list')
            </div>
            <div class="six wide column">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab explicabo fugit reiciendis voluptatem. Accusamus at dicta doloremque doloribus ducimus eveniet, ex id magni natus, obcaecati, praesentium repudiandae ullam veritatis vitae.
            </div>

        </div>

    </div>
@endsection