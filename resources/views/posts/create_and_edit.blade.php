@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            
            <div class="panel-heading">
                <h2 class="text-center">
                    <i class="glyphicon glyphicon-edit"></i>
                    @if($post->id)
                        编辑话题
                    @else
                        新建话题
                    @endif
                </h2>
            </div>

            @include('common.error')

            <div class="panel-body">
                @if($post->id)
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" accept-charset="UTF-8">
                        <input type="hidden" name="_method" value="PUT">
                @else
                    <form action="{{ route('posts.store') }}" method="POST" accept-charset="UTF-8">
                @endif

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    
                <div class="form-group">
                	<label for="title-field">标题</label>
                	<input class="form-control" type="text" name="title" placeholder="请填写标题" id="title-field" value="{{ old('title', $post->title ) }}" />
                </div> 
                <div class="form-group">
                	<label for="body-field">内容</label>
                	<textarea name="body" placeholder="请填写至少3个字的内容" body-field" class="form-control" rows="3">{{ old('body', $post->body ) }}</textarea>
                </div>

                        <div class="form-group">
                            <select class="form-control" name="category_id" required>
                                <option value="" hidden disabled {{ $post->id ? '' : 'selected' }}>请选择分类</option>
                                @foreach ($categories as $value)
                                    <option value="{{ $value->id }}" {{ $post->category_id == $value->id ? 'selected' : '' }}>{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>


                    <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ route('posts.index') }}"><i class="glyphicon glyphicon-backward"></i>  Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection