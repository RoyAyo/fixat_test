welcome {{ auth()->user()->name }}
<br>
you have zero naira left
<hr>
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
	<button type="submit">Logout</a>
</form>