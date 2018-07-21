<div class="ui divided items ross_margin">
    @foreach($posts as $post)
        <div class="item">
            <div class="image ui">
                <a href="{{ $post->link() }}">
                    <img class="ui image small" src="{{ $post->thumb }}">
                </a>
            </div>
            <div class="content">
                <a class="header" href="{{ $post->link() }}">{{ $post->title }}</a>
                <div class="meta">
                    <a href="{{ route('categories.show', [$post->category->id]) }}" class="ui orange tag label" >{{ $post->category->name }}</a>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <i class="user icon"></i>
                    <span class="cinema">{{ $post->user->name }}</span>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <i class="clock icon"></i>
                    <span class="cinema">{{ $post->created_at }}</span>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <i class="eye blue icon"></i>
                    <span class="ui blue text">234</span>
                    <i class="comment green icon"></i>
                    <span class="ui green text ">18</span>
                    <i class="heart icon red"></i>
                    <span class="ui text red">55</span>
                </div>
                <div class="description">
                    <p>{{ $post->body }}</p>
                </div>
                <div class="extra">
                    <div class="ui label">PHP</div>
                    <div class="ui label"><i class="globe icon"></i>Javascript</div>
                    <a href="{{ $post->link() }}">
                        <div class="ui right floated primary button">
                            阅读全文
                            <i class="right chevron icon"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="br"><br /><br /></div>
    @endforeach

<!--pagination-->
{{ $posts->links() }}
<!--pagination.end-->

</div>