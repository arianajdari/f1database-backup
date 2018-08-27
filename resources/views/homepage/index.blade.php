@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/homepage/index.css') }}">
@stop

@section('title')
    F1 Database
@endsection

@section('body')
    <div id="homepage_index_background">
        <img src="{{ URL::to('images/f1_homepage_image_small.jpg') }}" alt="background_image">

        @include('layouts.navigation._homepage')

        <div id="center_text">
            <h1>Formula 1 Database</h1>
            <h3>The most comprehensive Formula 1 Database built by community, for community</h3>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::to('js/jquery/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/homepage/index.js') }}"></script>
@stop