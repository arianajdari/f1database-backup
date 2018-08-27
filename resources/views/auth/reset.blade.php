@extends('layouts.homepage')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/homepage/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap/bootstrap.css') }}">
@stop

@section('title')
    F1 Database - Reset
@endsection

@section('body')
<div id="homepage_index_background">
        
    <img src="{{ URL::to('images/f1_homepage_image_small.jpg') }}" alt="background_image">

    <br><br>
    <div class="container" style="font-weight: 600;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset') }}</div>

                        <div class="card-body">

                            <form method="POST" action="/reset" aria-label="{{ __('Register') }}">
                            @csrf

                            <input type="hidden" name="password_reset" value="{{ $password_reset }}">

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input style="font-weight: 600;" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input style="font-weight: 600;" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                           
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" style="font-weight: 600;">
                                        {{ __('Reset') }}
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