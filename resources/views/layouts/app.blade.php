<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title', config('app.name', 'Laravel'))</title>
    @yield('css')

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">


    @yield('style')

</head>
<body class="Site">
        @include('vendor.ueditor.assets')
        @include('layouts._header')

        @include('layouts._message')
        <div id="layout-content">
            @yield('content')
        </div>

        @include('layouts._footer')

    <!-- Scripts -->
    <script src="//cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
    @yield('js')
    <script>
        $(document).ready(function() {

                // fix main menu to page on passing
                $('.main.menu').visibility({
                    type: 'fixed'
                });
                $('.overlay').visibility({
                    type: 'fixed',
                    offset: 80
                });

                // lazy load images
                $('.image').visibility({
                    type: 'image',
                    transition: 'vertical flip in',
                    duration: 500
                });

                // show dropdown on hover
                $('.main.menu  .ui.dropdown').dropdown({
                    on: 'hover'
                });
            });

    </script>
    <script>
        $('.ui.dropdown').dropdown();
    </script>

    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('editor', {
            toolbars: [
                ['bold', 'italic', 'underline', 'strikethrough', 'blockquote', 'insertunorderedlist', 'insertorderedlist', 'justifyleft','justifycenter', 'justifyright',  'link', 'insertimage', 'fullscreen']
            ],
            elementPathEnabled: false,
            enableContextMenu: false,
            autoClearEmptyNode:true,
            wordCount:false,
            imagePopup:false,
            autotypeset:{ indent: true,imageBlockLine: 'center' }
        });
    </script>

@yield('script')
</body>
</html>
