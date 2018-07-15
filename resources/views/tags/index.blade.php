@extends('layouts.app')

@section('title', isset($tag) ?  $tag->name  : '标签')
@section('content')
    <div class="container ui" id="layout-content">

        <div class="ui instructive bottom attached segment">
            <button class="ui red basic button big">Red</button>
            <button class="ui orange basic button">Orange</button>
            <button class="ui yellow basic button">Yellow</button>
            <button class="ui olive basic button">Olive</button>
            <button class="ui green basic button">Green</button>
            <button class="ui teal basic button">Teal</button>
            <button class="ui blue basic button">Blue</button>
            <button class="ui violet basic button">Violet</button>
            <button class="ui purple basic button">Purple</button>
            <button class="ui pink basic button">Pink</button>
            <button class="ui brown basic button">Brown</button>
            <button class="ui grey basic button">Grey</button>
            <button class="ui black basic button">Black</button>

        </div>


    </div>
@endsection