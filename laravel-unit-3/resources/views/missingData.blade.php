<h1>Selected User</h1>

@if(isset($user[$val]))
    <p>{{ $user[$val] }}</p>
@else
    <p>User not found</p>
@endif