<ul>
@foreach($users as $user)
<li>
    <b>Name:</b> {{$user->name}}
</li>
@endforeach
</ul>
