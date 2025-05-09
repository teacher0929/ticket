@extends('layouts.app')
@section('title')
    @lang('app.home')
@endsection
@section('content')
    <div class="row g-4 mb-4">
        @foreach($transportTypes as $transportType)
            <div class="col">
                <a href="{{ route('home', ['transportType' => $transportType->id]) }}"
                   class="btn btn-{{ $transportType->id == $f_transportType ? '' : 'outline-' }}dark btn-lg w-100">
                    {{ $transportType->getName() }}
                </a>
            </div>
        @endforeach
    </div>

    <div class="row g-3">
        @foreach($routes as $route)
            <div class="col-12">
                {{ $route->code }}
            </div>
        @endforeach
    </div>
@endsection
