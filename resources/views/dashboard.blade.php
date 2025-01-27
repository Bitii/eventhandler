@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Események</div>
                    <div class="card-body text-center">
                        @foreach ($events as $event)
                            @if ($event->visibility == 'public')
                                <div class="card text-start mb-3">
                                    <img class="card-img-top" src="" alt="" />
                                    <a href="/event/{{$event->id}}" class="text-decoration-none text-dark">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $event->name }}</h4>
                                            <p class="card-text">{{ $event->description }}</p>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
