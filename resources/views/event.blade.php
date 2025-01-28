@extends('layouts.app')

@section('content')
{{-- only the single event show --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header mb-2">{{$event->name}}</div>
                <div class="card-body m-auto">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $event->image == '' ? asset('storage/' . $event->image) : asset('images/no-image.png') }}"
                                class="img-fluid rounded-start p-4" alt="...">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">{{$event->description}}</p>
                            <p class="card-text">{{$event->location}}</p>
                            <div class="col-md-8 position-absolute bottom-0 end-0 mx-3">
                                <p class="card-text">
                                    <x-tags :tagsCsv="$event->tag" />
                                </p>
                                <p class="text-end"><small class="text-body-secondary">Last updated
                                        {{$event->updated_at->diffForHumans()}}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection