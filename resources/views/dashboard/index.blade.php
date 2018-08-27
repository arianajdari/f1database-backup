@extends('layouts.dashboard')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/dashboard/dashboard.css') }}">
@stop

@section('title')
    F1 Database
@endsection

@section('body')
  <div id="dashboard">
      <dashboard  
      	user-id="{{ $user->id }}" 
      	user-email="{{ $user->email }}" 
      	user-name="{{ $user->name }}" 
      	user-image-filename="{{ $user->image_filename }}" 
      >
          
      </dashboard>
  </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::to('js/dashboard/dashboard.js') }}"></script>
@stop
