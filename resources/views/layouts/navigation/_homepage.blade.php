<div id="dashboard_link">
	@if (!Auth::check())
        <a href="/login">Login</a>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <a href="/register">Register</a>
    @else
    	<a href="/dashboard">Dashboard</a>
    @endif
</div>