@props(['users'])
@props(['event'])

@foreach ($users as $user)
<ul class="list-group list-group-flush">
    <li class="list-group-item d-flex justify-content-between">{{$user->name}} <button id="userDelBtn" class="btn-close"
            type="button" data-bs-toggle="modal" data-bs-target="#delUser"
            data-event-id="{{$user->eventParticipant->first()->id}}"></button></li>
</ul>
@endforeach

<div class="modal fade" id="delUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Biztosan törölni szeretné a felhasználót?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <form action="" class="d-flex justify-content-between w-100">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Mégse</button>
                    <button type="button" class="btn btn-danger" id="delParticipant">Törlés</button>
                </form>
            </div>
        </div>
    </div>
</div>