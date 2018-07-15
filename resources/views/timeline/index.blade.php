@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="css/timeLine.css">
    @stop
@section('style')
    <style>
        body {
                                                                                        display: block !important;
        }
    </style>
@stop
@section('content')
    <div class="timeLine">
        <div class="row">
            <div class="lineHeader hidden-sm hidden-xs"></div>
            <div class="lineFooter hidden-sm hidden-xs"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item" >
                <div class="caption">
                    <div class="star center-block">
                        <span class="h3">27</span>
                        <span>Jan</span>
                        <span>1990</span>
                    </div>
                    <div class="image">
                        <img src="https://picsum.photos/600/400/?random">
                        <div class="title">
                            <h2>Started to Breath <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="textContent">
                        <p class="lead">Hi, this is my very short history, lets start from my berthday that was in 27 of January 1990. I thing my feet was bigger than this because now i just can buy shoes with size 45 LOL.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                <div class="caption">
                    <div class="star center-block">
                        <span class="h3">15</span>
                        <span>Sep</span>
                        <span>2007</span>
                    </div>
                    <div class="image">
                        <img src="https://picsum.photos/600/401/?random">
                        <div class="title">
                            <h2>School Study <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="textContent">
                        <p class="lead">I have studied for 12 years until i complete school then i was ready for joining university. i sufferd really but i dont know why!! may be i don't like studing in the past.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                <div class="caption">
                    <div class="star center-block">
                        <span class="h3">18</span>
                        <span>Aug</span>
                        <span>2011</span>
                    </div>
                    <div class="image">
                        <img src="https://picsum.photos/601/400/?random">
                        <div class="title">
                            <h2>University <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="textContent">
                        <p class="lead">University was the level that i didn't feel it, it just 4 years passed through like a wink.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                <div class="caption">
                    <div class="star center-block">
                        <span class="h3">01</span>
                        <span>May</span>
                        <span>2012</span>
                    </div>
                    <div class="image">
                        <img src="https://picsum.photos/603/400/?random">
                        <div class="title">
                            <h2>Work field <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="textContent">
                        <p class="lead">For 2 years of work as support engineer responsible about installing and maintenance SWIFT packages for banks. I gain a lot from it before i leave country.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                <div class="caption">
                    <div class="star center-block">
                        <span class="h3">14</span>
                        <span>Apr</span>
                        <span>2015</span>
                    </div>
                    <div class="image">
                        <img src="https://picsum.photos/600/403/?random">
                        <div class="title">
                            <h2>Refugee <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="textContent">
                        <p class="lead">Since then i came to Austria as refugee far from my lovers and friends far a way escaping from wars and threats searching a new life that i didn't find until yet.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                <div class="caption">
                    <div class="star center-block">
                        <span class="h3">01</span>
                        <span>Jun</span>
                        <span>2016</span>
                    </div>
                    <div class="image">
                        <img src="https://picsum.photos/605/400/?random">
                        <div class="title">
                            <h2>Hope <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="textContent">
                        <p class="lead">Dreams are always growing up by hope. This is the last thing that i can not get rid of it just because i believe in myself and my abilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 item">
                <div class="caption">
                    <div class="star center-block">
                        <span class="h3">01</span>
                        <span>Jun</span>
                        <span>2016</span>
                    </div>
                    <div class="image">
                        <video src="Lights.mp4"></video>
                        <div class="title">
                            <h2>Hope <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="textContent">
                        <p class="lead">Dreams are always growing up by hope. This is the last thing that i can not get rid of it just because i believe in myself and my abilities.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <script src="js/timeLine.min.js"></script>
    @stop

@section('script')
    <script>
        $('.timeLine').timeLine({
            mainColor: '#4DB7AA',
            opacity: '0.85',
            lineColor: '#fafafa'
        });
    </script>
@stop