@extends('layouts.app')
@section('title')
    @lang('app.home')
@endsection
@section('content')
    <div class="row g-4 mb-4">
        @foreach($transportTypes as $transportType)
            <div class="col">
                <a href="{{ route('home', ['transportType' => $transportType->id]) }}"
                   class="btn btn-{{ $transportType->id == $f_transportType ? '' : 'outline-' }}success w-100">
                    {{ $transportType->getName() }}
                </a>
            </div>
        @endforeach
    </div>

    <div class="row g-2 mb-4">
        @foreach($routes as $route)
            <div class="col-12">
                <div class="card">
                    <div class="card-body p-1 p-sm-2">
                        <div class="row align-items-center text-center g-3">
                            <div class="col-4">
                                <div class="h6">{{ $route->fromStation->getName() }}</div>
                                <div class="small">{{ $route->departure_time->format('d.m.Y H:i') }}</div>
                            </div>
                            <div class="col-4">
                                <div class="h6">{{ $route->transport->getName() }}</div>
                                <div>
                                    <a href="{{ route('routes.show', $route->code) }}" class="font-monospace link-danger text-decoration-none stretched-link">{{ $route->code }}</a>
                                    <span>{{ $route->getStatus() }}</span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="h6">{{ $route->toStation->getName() }}</div>
                                <div class="small">{{ $route->arrival_time->format('d.m.Y H:i') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div>{{ $routes->links() }}</div>
@endsection
