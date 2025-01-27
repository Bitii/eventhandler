@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-2">Események</div>
                <div class="card-body m-auto">
                    @foreach ($events as $event)
                    @if ($event->visibility == 'public')
                    <a href="/event/{{ $event->id }}" class="text-decoration-none text-dark">
                        <div class="card mb-3"">
                            <div class=" row g-0">
                            <div class="col-md-4">
                                <img src="{{ $event->image == '' ? asset('storage/' . $event->image) : asset('images/no-image.png') }}"
                                    class="img-fluid rounded-start p-4" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$event->name}}</h5>
                                    <p class="card-text">{{$event->description}}</p>
                                    <p class="card-text">{{$event->tag}}</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated {{$event->updated_at->diffForHumans()}}</small>
                                </div>
                            </div>
                        </div>
                </div>
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@endsection