@extends('layouts.app')
@section('title')
    @lang('app.routes')
@endsection
@section('content')
    <div class="mb-3">
        @foreach($routes as $route)
            <div class="mb-2">
                @include('app.route')
            </div>
        @endforeach
    </div>

    <div>{{ $routes->links() }}</div>
@endsection
