@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/homepage/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap/bootstrap.css') }}">
@stop

@section('title')
    F1 Database - Forgot
@endsection

@section('body')
<div id="homepage_index_background">
        
    <img src="{{ URL::to('images/f1_homepage_image_small.jpg') }}" alt="background_image">

    <br><br>
    <div class="container" style="font-weight: 600;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Send Password Reset Link') }}</div>

                        <div class="card-body">

                            @include('auth.errors.errors')

                            <form method="POST" action="/forgot" aria-label="{{ __('Register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input style="font-weight: 600;" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                           
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-weight: 600;">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::to('js/jquery/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/homepage/index.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap/bootstrap.js') }}"></script>
@stop