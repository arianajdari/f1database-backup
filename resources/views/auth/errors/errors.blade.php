 @if (Session::has('invalid_email_error'))
    <div class="alert alert-danger">
        <strong>{{ Session::get('invalid_email_error')}} Try to <a href="/register">register</a> instead</strong>
    </div>
@endif

@if (Session::has('invalid_token'))
    <div class="alert alert-danger">
        <strong>{{ Session::get('invalid_token')}}</strong>
    </div>
@endif

@if (Session::has('token_not_exits'))
    <div class="alert alert-danger">
        <strong>{{ Session::get('token_not_exits')}}</strong>
    </div>
@endif

@if (Session::has('token_expired'))
    <div class="alert alert-danger">
        <strong>{{ Session::get('token_expired')}}</strong>
    </div>
@endif

@if (Session::has('success_token'))
    <div class="alert alert-success">
        <strong>{{ Session::get('success_token')}}</strong>
    </div>
@endif  