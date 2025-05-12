@extends('layouts.app')
@section('title')
    @lang('app.home')
@endsection
@section('content')
    <div class="row g-3 mb-3">
        @foreach($transportTypes as $transportType)
            <div class="col">
                <a href="{{ route('home', ['transportType' => $transportType->id]) }}"
                   class="btn btn-{{ $transportType->id == $f_transportType ? '' : 'outline-' }}primary w-100">
                    {{ $transportType->getName() }}
                </a>
            </div>
        @endforeach
    </div>

    @foreach($routes as $route)
        <div class="mb-2">
            @include('app.route')
        </div>
    @endforeach
    <div class="mb-3">
        <div class="card">
            <div class="card-body p-2 p-sm-3 text-center">
                <a href="{{ route('routes.index', ['transportType' => $f_transportType]) }}" class="link-danger text-decoration-none stretched-link">
                    Show more
                </a>
            </div>
        </div>
    </div>
@endsection
