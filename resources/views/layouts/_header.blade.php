<div id="header" class="ui  vertical masthead center aligned ">
    <div class="ui container">
        <div class="ui secondary huge white-text pointing menu">
            <a href="{{ route('index') }}" class="active item">
                首页
            </a>
            <div class=" menu">
                <div class="ui dropdown  item">
                    <i class="th icon"></i>
                    分类
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a href="{{ route('categories.show', 1) }}" class="item">PHP</a>
                        <a href="{{ route('categories.show', 2) }}" class="item">Laravel</a>
                        <a href="{{ route('categories.show', 3) }}" class="item">Mysql</a>
                        <a href="{{ route('categories.show', 4) }}" class="item">个人</a>
                        <a href="{{ route('categories.show', 5) }}" class="item">JS</a>
                        <a href="{{ route('categories.show', 6) }}" class="item">IDE</a>
                        <a href="{{ route('categories.show', 7) }}" class="item">Linux</a>
                    </div>
                </div>
            </div>
            <a class="item" href="{{ route('tags.index') }}">
                <i class="tags icon"></i>
                标签
            </a>
            <a href="{{ route('timeline.index') }}" class="item">
                <i class="archive icon"></i>
                归档
            </a>
            <a href="{{ route('about.index') }}" class="item">
                <i class="user icon"></i>
                关于
            </a>

            <div class="right  menu">
                @guest
                    <a href="{{ route('login') }}" class="ui item">
                        登录
                    </a>
                    <a href="{{ route('register') }}" class="ui item">
                        注册
                    </a>
                @else
                    <a href="{{ route('posts.create') }}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>

                    {{-- 消息通知标记 --}}
                    <div>
                        <a href="{{ route('notifications.index') }}" class="notifications-badge" style="margin-top: -2px;">
                            <span class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }} " title="消息提醒">
                                {{ Auth::user()->notification_count }}
                            </span>
                        </a>
                    </div>

                    <div class="ui dropdown  item">

                        <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                    <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                                </span>
                        {{ Auth::user()->name }} <span class="caret"></span>

                        <div class="menu">
                            <a class="item" href="{{ route('users.edit', Auth::id() ) }}">
                                编辑资料
                            </a>

                            <a class="item" href="{{ route('users.show', Auth::id() ) }}">
                                个人中心
                            </a>

                            <a class="item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                退出登陆
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endguest
            </div>

        </div>
    </div>
    <br>
    <div class="ui text container">
        <h1 class="ui header">
            Just do it .
        </h1>
        <h2>Do whatever you want when you want to.</h2>
        <br>
    </div>
</div>