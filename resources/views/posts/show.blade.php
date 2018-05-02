@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>Post / Show #{{ $post->id }}</h1>
            </div>

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-link" href="{{ route('posts.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                        </div>
                        <div class="col-md-6">
                             <a class="btn btn-sm btn-warning pull-right" href="{{ route('posts.edit', $post->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>

                <label>Title</label>
<p>
	{{ $post->title }}
</p> <label>Body</label>
<p>
	{{ $post->body }}
</p> <label>User_id</label>
<p>
	{{ $post->user_id }}
</p> <label>Category_id</label>
<p>
	{{ $post->category_id }}
</p> <label>Reply_count</label>
<p>
	{{ $post->reply_count }}
</p> <label>View_count</label>
<p>
	{{ $post->view_count }}
</p> <label>Last_reply_user_id</label>
<p>
	{{ $post->last_reply_user_id }}
</p> <label>Order</label>
<p>
	{{ $post->order }}
</p> <label>Excerpt</label>
<p>
	{{ $post->excerpt }}
</p> <label>Slug</label>
<p>
	{{ $post->slug }}
</p>
            </div>
        </div>
    </div>
</div>

@endsection
