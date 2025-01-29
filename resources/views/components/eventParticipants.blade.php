@props(['users'])

@foreach ($users as $user)
<ul class="list-group list-group-flush">
    <li class="list-group-item">{{$user->name}}</li>
</ul>
@endforeach