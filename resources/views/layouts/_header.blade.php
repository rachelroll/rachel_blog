<div id="header" class="ui  vertical masthead center aligned ">
    <div class="ui container">
        <div class="ui secondary huge white-text pointing menu">
            <a href="index.html" class="active item">
                回到主页
            </a>
            <div class=" menu">
                <div class="ui dropdown  item">
                    <i class="th icon"></i>
                    分类
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        <a href="post.html" class="item">English</a>
                        <a href="post.html" class="item">Russian</a>
                        <a href="post.html" class="item">Spanish</a>
                    </div>
                </div>
            </div>
            <a class="item">
                <i class="tags icon"></i>
                标签
            </a>
            <a href="archives.html" class="item">
                <i class="archive icon"></i>
                归档
            </a>
            <a href="about.html" class="item">
                <i class="user icon"></i>
                关于
            </a>
            @guest
            <div class="right menu">

                <a href="{{ route('login') }}" class="ui item">
                    登录
                </a>
                <a href="{{ route('register') }}" class="ui item">
                    注册
                </a>
            </div>
            @else
            <div class="right  menu">
                <div class="ui dropdown  item">

                    <i class="th icon"></i>
                    <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">
                            </span>
                    {{ Auth::user()->name }} <span class="caret"></span>
                    <i class="dropdown icon"></i>
                    <div class="menu">
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
            </div>
            @endguest
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